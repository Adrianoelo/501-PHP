<form method="POST" action="createUser.php">
	<p> Selecione um banco de dados:
	<select name="base">
		<option value="mysql">MySQL</option>
		<option value="postgres">PostgreSQL</option>
	</select></p>
	<p>Nome:<input type="text" name="nome"></p>
	<p>Email:<input type="email" name="email"></p>
	<p>Senha:<input type="password" name="senha"></p>
	<p><input type="submit" value="Save"></p>
</form>

<?php 

require_once 'Db/conexao.php';

$sql = "SELECT * FROM usuarios";

$mysql = $dbMysql->query($sql);

$usuariosmysql = $mysql->fetchAll(PDO::FETCH_ASSOC);

 ?>

<b><p>Usuários do banco de dados Mysql</p></b>
<table border="1">
	<tr>
		<th>Nome</th>
		<th>Email</th>
		<th>Senha</th>
		<th>Ação</th>
	</tr>
		<?php foreach ($usuariosmysql as $users) :?>
	<tr>	
		<td><?= $users['nome'] ?></td>
		<td><?= $users['email'] ?></td>
		<td><?= $users['senha'] ?></td>
		<td><form method="GET" action="editUser.php">
		<input type="hidden" name="id" value="<?= $users['id']?>">
		<input type="hidden" name="base" value="mysql">
		<input type="submit" class="btn btn-sm btn-danger" value="Editar">
		</form> 
		<form method="POST" action="deleteUser.php">
		<input type="hidden" name="id" value="<?= $users['id']?>">
		<input type="hidden" name="base" value="mysql">
		<input type="submit" class="btn btn-sm btn-danger" value="Excluir"></form>
		 </td>
	</tr>
	<?php endforeach; ?>
</table>

<?php 

$sql = "SELECT * FROM usuarios";

$postgres = $dbPostgres->query($sql);

$usuariospostgres = $postgres->fetchAll(PDO::FETCH_ASSOC);

 ?>

<b><p>Usuários do banco de dados Postgres</p></b>
<table border="1">
	<tr>
		<th>Nome</th>
		<th>Email</th>
		<th>Senha</th>
		<th>Ação</th>	
	</tr>
		<?php foreach ($usuariospostgres as $users2) :?>
	<tr>	
		<td><?= $users2['nome'] ?></td>
		<td><?= $users2['email'] ?></td>
		<td><?= $users2['senha'] ?></td>
		<td><form method="GET" action="editUser.php">
		<input type="hidden" name="id" value="<?= $users2['id']?>">
		<input type="hidden" name="base" value="postgres">
		<input type="submit" class="btn btn-sm btn-danger" value="Editar">
		</form> 
		<form method="POST" action="deleteUser.php">
		<input type="hidden" name="id" value="<?= $users2['id']?>">
		<input type="hidden" name="base" value="postgres">
		<input type="submit" class="btn btn-sm btn-danger" value="Excluir"></form>
		 </td>
	</tr>
	<?php endforeach; ?>
</table>