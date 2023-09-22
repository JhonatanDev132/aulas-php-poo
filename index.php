<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo1</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 3</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Encapsulamento</li>
        <li>Modificadores de visibilidade</li>
    </ul>
<?php
// Importando a Classe
require_once "src/Cliente.php";
$clienteA = new Cliente;

// O código abaixo dará erro pois a propriedade é privada!
// $clienteA->nome = "Jhonatan";

// Usando o setter para atribuir o valor a propriedade privada "nome"
$clienteA->setNome("Jhonners")
?>

<p>Nome: <?=$clienteA->getNome()?> </p>

<pre><?=var_dump($clienteA)?></pre>
</body>
</html>