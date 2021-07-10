<?php include 'header.php'; ?>

<h2>NEW USER</h2>

<form method="post" action="db/processa_usuario.php">
	<label class="badge badge-primary">Usuário</label>
	<input type="text" name="usuario" placeholder="nome do usuario" class="form-control">

	<label class="badge badge-primary">Senha</label>
	<input type="password" name="senha" placeholder="digite a senha" class="form-control">	
	<br>
	<input type="submit" value="Criar Usuário" class="btn btn-primary">	
</form>

<?php include 'footer.php'; ?>

<!-- Teste de novo user pass md5-->