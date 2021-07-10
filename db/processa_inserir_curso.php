<?php

include 'db.php';

$nome_curso = $_POST['NOME_CURSO'];
$carga_horaria = $_POST['CARGA_HORARIA'];
#	echo $nome_curso;
#	echo $carga_horaria;  teste

$query = "INSERT INTO cursos(NOME_CURSO, CARGA_HORARIA) VALUES ('$nome_curso',$carga_horaria)";
mysqli_query($conexao, $query);

#redirecionar de volta
header('location:../index.php?pagina=cursos');