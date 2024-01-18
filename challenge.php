<?php

require "mdp.php";
$sshHost = '172.31.0.10';
$sshPort = 22;
$sshUsername = 'llau';

$dbHost = 'imhotep';
$dbPort = 3306;
$dbUsername = 'llau';
$dbName = 'llau';

$localPort = 3307;

try {
    $cmd = "ssh -L $localPort:$dbHost:$dbPort $sshUsername@$sshHost -p $sshPort -N -f";
    shell_exec($cmd);

    $dsn = "mysql:host=127.0.0.1;port=$localPort;dbname=$dbName";
    $pdo = new PDO($dsn, $dbUsername, $password);


    $query = "SELECT * FROM dept";
    $stmt = $pdo->query($query);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    var_dump($result);


    $depts = simplexml_load_string('<LesDepartements/>');
    foreach ($result as $index => $dept) {
        if (is_array($dept)) {
        $unDepartement = $depts->addChild('unDepartement');
        foreach ($dept as $key => $value){
            $unDepartement->addChild($key, $value);
        }}
        else {
            $depts->addChild('Departement', $dept);
        }}

    var_dump($depts->asXML());

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>