drop table if exists emp;
drop table if exists dept;
create table dept(
	dno integer primary key,
	dnom text,
	dir integer,
	ville text);

create table emp(
	eno integer primary key,
	enom text,
	prof text,
	dateemb date,
	sal decimal(7,2),
	comm float,
	dno integer references dept(dno));

insert into dept 
	values (1, 'Commercial', 30, 'New York'),
	(2, 'Production', 40, 'Houston'),
	(3, 'Développement', 40, 'Boston');

insert into emp 
	values (10, 'Joe', 'Ingénieur', '1993-10-01', 4000, 3000, 3),
	(100, 'Jack', 'Technicien', '1988-05-01', 3000, null, 2),
	(30, 'Jim', 'Vendeur', '1980-03-01', 6000, 5000, 1),
	(40, 'Lucy', 'Ingénieur', '1980-03-01', 5000, 5000, 3);
