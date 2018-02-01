<?php 
$con =new PDO('mysql:host=localhost;dbname=farhad', 'root', '');
$con->query("
create table mytable(
	id int(11) auto_increment primary key,
	name varchar(30) not null,
	email varchar(30) not null,
	password varchar(50) not null


)
");