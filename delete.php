<?php 
session_start();

$id = $_GET['id'];

unset($_SESSION['nomes'][$id]);

header('location: form.php');
?>