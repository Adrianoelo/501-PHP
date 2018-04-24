<?php

require 'conexao.php';

//Alterando o banco de dados utilizando a função "exec"
//$sql = "INSERT INTO usuarios(nome,email,senha) VALUES ('adriano','adriano@amazul.gov.br','123')";
//$sql = "INSERT INTO usuarios(nome,email,senha) VALUES ('gabriela','gabriela@filha.gov.br','123')";
//$sql = "INSERT INTO usuarios(nome,email,senha) VALUES ('nicole','nicole@filha.gov.br','123')";


//$dbMysql->exec($sql);

// $sql = "SELECT * FROM usuarios";

// $stmt = $dbMysql->query($sql);

// var_dump($stmt);

// echo '<pre>';
// foreach ($stmt as $register) {
// 	print_r($register);
// }

//FETCH_ASSOC - Array associativo
//FETCH_NUM - Array numerico
//FETCH_OBJ - Objeto generico

// $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $usuarios = $stmt->fetchAll(PDO::FETCH_NUM);
// $usuarios = $stmt->fetchAll(PDO::FETCH_OBJ);

// echo '<pre>';
// foreach ($usuarios as $register) {
// 	print_r($register);
// }


//REALIZANDO TRANSAÇÃO NO BANCO
// try {
// 	$dbMysql->beginTransaction();

// 	$sql = "INSERT INTO usuarios(nome,email,senha) VALUES ('adriano','adriano@amazul.gov.br','123')";

// 	$dbMysql->exec($sql);	

// 	echo $dbMysql->exec($sql);
// 	$dbMysql->commit();
// } catch (PDOException $e) {
// 	$dbMysql->rollback();
// 	echo "erro: " . $e->getMessage();
// }
