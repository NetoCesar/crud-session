<?php 
session_start();

$nome = $_POST['nome'];
/*$_SESSION['nomes'][] = $nome;*/

array_push($_SESSION['nomes'], $nome);
header('location: form.php');
?>