<a class="btn btn-success" href="?pagina=inserir_curso">Inserir novo curso</a>
<br><br>
<table class="table table-hover table-striped" id="cur">
	<thead>
	<tr>
		<th>NOME CURSO</th>
		<th>CARGA HORÁRIA</th>
		<th>EDITAR</th>
		<th>DELETAR</th>
	</tr>
	</thead>
	
	<tbody>
	<?php
		while ($linha = mysqli_fetch_array($consulta_cursos)){
			echo '<tr><td>'.$linha['NOME_CURSO'].'</td>';
				echo '<td>'.$linha['CARGA_HORARIA'].'</td>';
	?>
		<td><a href="?pagina=inserir_curso&editar=<?php 
		echo $linha['ID_CURSO']; ?>"><i class="fas fa-edit"></a></td>

		<td><a href="db/deleta_curso.php?ID_CURSO=<?php 
		echo $linha['ID_CURSO']; ?>"><i class="fas fa-trash-alt"></a></td></tr>
	<?php	
	}
	?>
	</tbody>	
</table>
	