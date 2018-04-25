<?php

require_once 'Db/conexao.php';

$base  = $_POST['base'];
$id  = $_POST['id'];


if ($base == 'mysql') {

$sql = "DELETE FROM usuarios WHERE id = {$id}";


$result = $dbMysql->exec($sql);

if ($result) {
	echo 'Usuário excluido com sucesso !';
} else {
	echo 'Erro ao inserir';
}

} else if ($base == 'postgres') {

$sql = "DELETE FROM usuarios WHERE id = {$id}";


$result = $dbPostgres->exec($sql);


if ($result) {
	echo 'Usuário excluido com sucesso !';
} else {
	echo 'Erro ao inserir';
}
}

?>

<form action="index.php" method="Post">
<input type="submit" value="Voltar">
</form>