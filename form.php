<?php
session_start();

if (!isset($_SESSION['nomes'])) {
	$_SESSION['nomes'] = array();
}
$nomes = $_SESSION['nomes'];
asort($nomes);
?>

<!DOCTYPE html>
<html>
<head>
	<title>WELL</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style type="text/css">
		table{
			width: 30%;
		}
	</style>
</head>
<body>
	<div class="row">
		<form action="add.php" method="POST" class="col s3">
			<div class="row">
				<div class="input-field col s10">
					<legend>Digite o Filme</legend><input type="text" name="nome" class="validate" required/>
					<input class="btn waves-effect waves-light" type="submit">
				</form>
			</div>
		</div>
		<h2>Filmes Stanley Kubrick</h2>
		<div class="row">
			<table class="highlight">
				<tr>
					<?php foreach ($nomes as $chave => $nome): ?>
						<td><?=$nome?></td>
						<td><a href="delete.php?id=<?=$chave?>">Remover</a></td>
						<td><button data-target="#modal1" id="modal" class="btn modal-trigger">Modal</button></td>      
					</tr>
				<?php endforeach ?>
			</table>
		</div>	
	</div>
</body>
</html>