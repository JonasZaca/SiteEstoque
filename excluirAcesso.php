<?php
$banco = "aula";
$usuario = "root";
$senha = "";
$hostname = "localhost";

$conn = mysqli_connect($hostname,$usuario,$senha,$banco) or die( "Não foi possível conectar ao banco MySQL");

$id = $_GET["codigo"];

$sql = "DELETE FROM tb_acesso WHERE id='$id'";
mysqli_query($conn, $sql) or die("Erro ao tentar excluir registro");

mysqli_close($conn); 

header("Location: lerAcesso.php");


// utilizando a funções criadas
/*
include("conexao/check.php");
$id = $_GET["codigo"];
DBDelete('carro', "id_carro='$id'"); 
header("Location: ler.php");

*/
?>

