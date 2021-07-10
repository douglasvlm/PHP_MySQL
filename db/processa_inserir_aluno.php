<?php

include 'db.php';

$nome_aluno = $_POST['NOME_ALUNO'];
$data_nascimento = $_POST['DATA_NASCIMENTO'];
	#echo $nome_aluno;
	#echo $data_nascimento;  

$query = "INSERT INTO ALUNOS(NOME_ALUNO, DATA_NASCIMENTO) VALUES ('$nome_aluno','$data_nascimento')";
mysqli_query($conexao, $query);

#redirecionar de volta
header('location:../index.php?pagina=alunos');