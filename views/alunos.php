<a class="btn btn-success" href="?pagina=inserir_aluno">Inserir Alunos</a>
<br><br>
<table class="table table-hover table-striped" id="alu">
	<thead>
	<tr>
		<th>NOME ALUNO</th>
		<th>DATA NASCIMENTO</th>
		<th>EDITAR</th>
		<th>Deletar</th>
	</tr>
	</thead>
	
	<tbody>
	<?php
		while ($linha = mysqli_fetch_array($consulta_alunos)){
			echo '<tr><td>'.$linha['NOME_ALUNO'].'</td>';
			echo '<td>'.$linha['DATA_NASCIMENTO'].'</td>';
	?>
		<td><a href="?pagina=inserir_aluno&editar=<?php 
		echo $linha['ID_ALUNO']; ?>"><i class="fas fa-user-edit"></a></td>

		<td><a href="db/deleta_aluno.php?ID_ALUNO=<?php 
		echo $linha['ID_ALUNO']; ?>"><i class="fas fa-user-times"></a></td></tr>
	<?php	
	}
	?>
	</tbody>	
		
</table>

