<?php 

include 'db.php';

$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);

$query = "INSERT INTO USUARIOS(usuario, senha) VALUES('$usuario', '$senha')";

mysqli_query($conexao, $query);

header('location:../index.php');