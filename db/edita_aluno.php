<?php 

include 'db.php';

$id_aluno = $_POST['ID_ALUNO'];
$nome_aluno = $_POST['NOME_ALUNO'];
$data_nascimento = $_POST['DATA_NASCIMENTO'];


$query = "UPDATE ALUNOS SET NOME_ALUNO='$nome_aluno', DATA_NASCIMENTO='$data_nascimento' WHERE ID_ALUNO = $id_aluno";

#print($query);
mysqli_query($conexao, $query);

header('location:../index.php?pagina=alunos');
