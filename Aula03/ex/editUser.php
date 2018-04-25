<?php

require_once 'Db/conexao.php';


$base  = $_GET['base'];
$id  = $_GET['id'];

if ($base == 'mysql') {
	
$sql1 = "SELECT * FROM usuarios WHERE id ={$id}";

$mysql = $dbMysql->query($sql1);

$users = $mysql->fetch(PDO::FETCH_ASSOC);

}
 else if ($base == 'postgres') {

 $sql1 = "SELECT * FROM usuarios WHERE id ={$id}";

$pgSql = $dbPostgres->query($sql1);

$users = $pgSql->fetch(PDO::FETCH_ASSOC);
}

if (!empty($_POST)){
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	if ($base == 'mysql') {
		$sql2 = "UPDATE usuarios SET (nome,email,senha) VALUES ('$nome','$email','$senha') WHERE id ={$id}";

		$mysql = $dbMysql->exec($sql2);

		}
 else if ($base == 'postgres') {

 		$sql2 = "UPDATE usuarios SET (nome,email,senha) VALUES ('$nome','$email','$senha') WHERE id ={$id}";

		$pgSql = $dbPostgres->exec($sql2);

		}	
	}

?>

<form method="POST" action="">
	<p>Nome: <input type="text" name="nome" value="<?= $users['nome'] ?>"></p>
	<p>Email: <input type="email" name="email" value="<?= $users['email'] ?>"></p>
	<p>Senha: <input type="senha" name="senha"	value="<?= $users['senha'] ?>"></p>
	<p><input type="submit" value="Gravar"></p>
</form>
