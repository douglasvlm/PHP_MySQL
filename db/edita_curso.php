<?php 

include 'db.php';

$id_curso = $_POST['ID_CURSO'];
$nome_curso = $_POST['NOME_CURSO'];
$carga_horaria = $_POST['CARGA_HORARIA'];


$query = "UPDATE CURSOS SET NOME_CURSO='$nome_curso', CARGA_HORARIA=$carga_horaria WHERE ID_CURSO = $id_curso";

mysqli_query($conexao, $query);

header('location:../index.php?pagina=cursos');
