<h1>Inserir Nova Matricula</h1>


<form method="post" action="db/processa_matricula.php">
	Selecione o aluno<br>
	<select name="escolha_aluno">
		<option>Selecione um aluno</option>
		<?php
		while ($linha = mysqli_fetch_array($consulta_alunos)){
			echo '<option value="'.$linha['ID_ALUNO'].'">'.$linha[
				'NOME_ALUNO'].'</option>';
		}
		?>
	</select>
	<br><br>

	Selecione o curso<br>
	<select name="escolha_curso">
		<option>Selecione o curso</option>
		<?php
		while ($linha = mysqli_fetch_array($consulta_cursos)){
			echo '<option value="'.$linha['ID_CURSO'].'">'.$linha[
				'NOME_CURSO'].'</option>';
		}
		?>	
	</select>
	<br><br>
	<input class="btn btn-success" type="submit" value="Matricular aluno no curso">
</form>
	