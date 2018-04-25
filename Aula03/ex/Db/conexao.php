<?php 

//Data Source Name, User,Password
//Mysql
//"mysql:host=localhost;dbname=aula"
$dbMysql	= new PDO("mysql:host=localhost;dbname=aula","adriano","@da4linux");

$dbMysql->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$dbPostgres = new PDO("pgsql:host=localhost;dbname=aula","adriano","123");

$dbPostgres->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

// echo '<pre>';
// var_dump($dbMysql);
// var_dump($dbPostgres);

