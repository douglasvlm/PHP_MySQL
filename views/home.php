<h1>BEM VINDO A DOG SITE</h1>

<form method="post" action="login.php">
	<label class="badge badge-primary">Usuário</label>
	<input type="text" name="usuario" placeholder="nome do usuario" class="form-control">

	<label class="badge badge-primary">Senha</label>
	<input type="password" name="senha" placeholder="digite a senha" class="form-control">	
	<br>
	<input type="submit" value="Entrar" class="btn btn-success">
	
</form>
	<br><br>
	<a class="btn btn-primary" href="inserir_usuario.php">Criar novo usuário</a>	
	<br>
	
<?php if(isset($_GET['erro'])){ ?>
	<div class="alert alert-danger" role="alert">
		Usuário e/ou senha inválida!
	</div>
<?php } ?>

