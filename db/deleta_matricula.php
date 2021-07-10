<?php 

include 'db.php';

$id_aluno_curso = $_GET['ID_ALUNO_CURSO'];

$query = "DELETE FROM ALUNOS_CURSOS WHERE ID_ALUNO_CURSO = $id_aluno_curso";

mysqli_query($conexao, $query);

header('location:../index.php?pagina=matriculas');
