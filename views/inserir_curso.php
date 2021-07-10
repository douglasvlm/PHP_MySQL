<?php if(!isset($_GET['editar'])) { ?>

<h1>INSERIR NOVO CURSO</h1>
<form method="post" action="db/processa_inserir_curso.php">
	<br>
	<label  class="badge badge-primary">Nome Curso</label><br>
		<input class="form-control" type="text" name="NOME_CURSO" placeholder="Insira o nome do cursos">
	<br><br>
	<label class="badge badge-primary">Carga horaria:</label><br>
		<input class="form-control"  type="text" name="CARGA_HORARIA" placeholder="Insira  a carga horaria">
	<br><br>
	<input class="btn btn-success" type="submit" value="Inserir curso">
</form>

<?php  }else{	 ?>	

	<?php while($linha = mysqli_fetch_array($consulta_cursos)) { ?>
		
		<?php if($linha['ID_CURSO'] == $_GET['editar']){ ?>
		
			<h1>EDITAR CURSO</h1>
			<form method="post" action="db/edita_curso.php">
				<input type="hidden" name="ID_CURSO" value="<?php echo $linha['ID_CURSO']; ?> ">
				<br>
				<label  class="badge badge-primary">Nome Curso</label><br>
				<input class="form-control"  type="text" name="NOME_CURSO" placeholder="Insira o nome do cursos" 
				value="<?php echo $linha['NOME_CURSO']; ?> ">
				<br><br>
				<label  class="badge badge-primary">Carga horaria</label><br>
				<input class="form-control"  type="text" name="CARGA_HORARIA" placeholder="Insira  a carga horaria" value="<?php echo $linha['CARGA_HORARIA'];?>">
				<br><br>
			<input class="btn btn-success" type="submit" value="Editar curso">
			</form>
		
		<?php }  ?> 
	
	<?php }  ?> 

<?php }  ?> 
