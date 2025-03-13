<?php
$nome = $_GET['nome'];
$nome = $_POST['nome'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira Aplicação</title>
</head>
<body>
    <h1>Olá Vinícius<?= $nome ?></h1>
    <form action="">
<label for="nome">Digite seu Nome</label>
<input type="text"name= "nome"/>
<button type="submit">Enviar</button>

    </form>
</body>
</html>