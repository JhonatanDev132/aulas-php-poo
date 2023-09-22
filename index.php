<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo1</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 2</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Acesso direto às propriedades</li>
        <li>Atribuição e leitura de dados</li>
        <li>Chamada de método</li>
    </ul>
<?php
// Importando a Classe
require_once "src/Cliente.php";

// Criando instâncias da Classe (objetos!)
$clienteA = new Cliente;
$clienteB = new Cliente;

// Acesso a atribuição
$clienteA->nome = "Tiago";

$clienteB->nome = "Jhonatan";

$clienteA->telefones = ["4002-8922", "11-97217-0371"];

$clienteA->email = "jhonatan@gmail.com";
$clienteA->senha = password_hash("123abc", PASSWORD_DEFAULT);
?>

<hr>

<h2>Dados dos objetos(acesso e leitura)</h2>
<h3> <?= $clienteA->nome ?></h3>
<h3> E-mail: <?= $clienteA->email ?></h3>
<p>telefones:
    <?=$clienteA->telefones[0]?>,
    <?=$clienteA->telefones[1]?>
</p>

<p>Telefones:
    <?=implode(",", $clienteA->telefones)?>
</p>

<pre><?=var_dump($clienteA, $clienteB)?></pre>
</body>
</html>