<form action="?r=user/create" method="POST">
	<div class="form-group">
		<label for="name">Nome</label>
		<input type="text" name="name" class="form-control" required>
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" name="email" class="form-control" required>
	</div>
	<div class="form-group">
		<label for="senha">Senha</label>
		<input type="password" name="pass" class="form-control" required>
	</div>
	<a href="?r=user" class="btn btn-sm btn-default">Voltar</a>
	<button type="submit" class="btn btn-sm btn-default">Salvar</button>
</form>
