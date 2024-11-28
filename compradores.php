<?php

include 'db.php';

if($_SERVER['REQUEST_METHOD']=="POST"){

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    $sql = "INSERT INTO comprador (nome,telefone,endereco) VALUES (:nome,
    :telefone, :endereco)";

    $stmt =  $conn->prepare($sql);

    $stmt->bindParam(':nome',$nome);
    $stmt->bindParam(':telefone',$telefone);
    $stmt->bindParam(':endereco',$endereco);

    $stmt->execute();

    header('location: index.php');
    exit; 
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Comprador - Padaria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php">Registrar Pedidos</a>
        <a href="pedidos.php">Visualizar Pedidos</a>
        <a href="cadastro.php">Cadastro Clientes</a>
    </nav>

    <h1>Cadastro de Cliente</h1>
    <form action="cadastro.php" method="POST">
    <label for="nome">Nome do Cliente:</label>
    <input type="text" name="nome" id="nome" required><br>

    <label for="telefone">Telefone:</label>
    <input type="text" id="telefone" name="telefone" required><br>

    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco" required><br>

    <button type="submit">Cadastrar Cliente</button>
    </form>
</body>