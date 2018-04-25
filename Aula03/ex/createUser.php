<?php

require_once 'Db/conexao.php';

// print_r($_POST);
// die;

$base  = $_POST['base'];
$email = $_POST['email'];
$nome  = $_POST['nome'];
$senha = $_POST['senha'];

echo '<br>';

if ($base == 'mysql') {

$sql = "INSERT INTO usuarios(nome,email,senha) VALUES ('{$nome}','{$email}','{$senha}')";


$result = $dbMysql->exec($sql);

if ($result) {
	echo 'Usuário inserido com sucesso !';
} else {
	echo 'Erro ao inserir';
}


// echo $base;

// echo '<br>';

// echo $sql;


} else if ($base == 'postgres') {

$sql = "INSERT INTO usuarios(nome,email,senha) VALUES ('{$nome}','{$email}','{$senha}')";


$result = $dbPostgres->exec($sql);


if ($result) {
	echo 'Usuário inserido com sucesso !';
} else {
	echo 'Erro ao inserir';
}
}

?>

<form action="index.php" method="Post">
<input type="submit" value="Voltar">
</form>