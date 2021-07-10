<?php if(!isset($_GET['editar'])) { ?>

		<h1>INSERIR NOVO ALUNO</h1>
		<form method="post" action="db/processa_inserir_aluno.php">
			<br>
			<label class="badge badge-primary" >Nome Aluno</label><br>
				<input class="form-control" type="text" name="NOME_ALUNO" placeholder="Insira o nome do aluno">
			<br><br>
			<label class="badge badge-primary" >Data de nascimento</label><br>
				<input  class="form-control"  type="text" name="DATA_NASCIMENTO" placeholder="Insira data de nascimento">
			<br><br>
			<input class="btn btn-success"  type="submit" value="Inserir aluno">
		</form>	

<?php  }else{	 ?>	

	<?php while($linha = mysqli_fetch_array($consulta_alunos)) { ?>
		
		<?php if($linha['ID_ALUNO'] == $_GET['editar']){ ?>

		<h1>EDITAR ALUNO</h1>
		<form method="post" action="db/edita_aluno.php">
			<input type="hidden" name="ID_ALUNO" value="<?php echo $linha['ID_ALUNO']; ?> ">
			<br>
			<label class="badge badge-primary">Nome Aluno</label><br>
				<input class="form-control"  type="text" name="NOME_ALUNO" placeholder="Insira o nome do aluno" value="<?php echo $linha['NOME_ALUNO']; ?> ">
			<br><br>
			<label class="badge badge-primary">Data de nascimento</label><br>
				<input class="form-control"  type="text" name="DATA_NASCIMENTO" placeholder="Insira data de nascimento"value="<?php echo $linha['DATA_NASCIMENTO'];?>">
			<br><br>
			<input class="btn btn-success"  type="submit" value="Editar aluno">
		</form>	

		<?php }  ?> 
	
	<?php }  ?> 

<?php }  ?> 
