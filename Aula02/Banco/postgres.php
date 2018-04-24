<?php

require 'conexao.php';

//Alterando o banco de dados utilizando a função "exec"
//$sql = "INSERT INTO usuarios(nome,email,senha) VALUES ('adriano','adriano@amazul.gov.br','123')";
//$sql = "INSERT INTO usuarios(nome,email,senha) VALUES ('gabriela','gabriela@filha.gov.br','123')";
//$sql = "INSERT INTO usuarios(nome,email,senha) VALUES ('nicole','nicole@filha.gov.br','123')";
//$dbPostgres->exec($sql);


$sql = "SELECT * FROM usuarios";

$stmt = $dbPostgres->query($sql);

// var_dump($stmt);

// echo '<pre>';
// foreach ($stmt as $register) {
// 	print_r($register);
// }

//FETCH_ASSOC - Array associativo
//FETCH_NUM - Array numerico
//FETCH_OBJ - Objeto generico

//$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $usuarios = $stmt->fetchAll(PDO::FETCH_NUM);

// echo '<pre>';
// foreach ($usuarios as $register) {
// 	print_r($register);
// }

//REALIZANDO TRANSAÇÃO NO BANCO

// try {
// 	$dbPostgres->beginTransaction();

// 	$sql = "INSERT INTO usuarios(nome,email,senha) VALUES ('adriano','adriano@amazul.gov.br','123')";

// 	$dbPostgres->exec($sql);	

// 	echo $dbPostgres->exec($sql);
// 	$dbPostgres->commit();
// } catch (PDOException $e) {
// 	$dbPostgres->rollback();
// 	echo "erro: " . $e->getMessage();
// }