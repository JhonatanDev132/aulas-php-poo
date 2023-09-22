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
        <li>
            Método construtor com atribuição obrigatória de valores 
            aos parâmetros/propriedades do objeto.
        </li>
        <li>
            Uso do <code>$this</code> para acesso às propriedades
            dentro do objeto.
        </li>
    </ul>
<?php
// Importando a Classe
require_once "src/Cliente.php";
$clienteA = new Cliente("Jhonatan", "jhonatan.vini132@gmail.com");
$clienteB = new Cliente("Julia", "juliazmedeiros@gmail.com");

$clienteA->telefones = ["11 97217-0371"];
$clienteB->telefones = ["11 98161-9872"];
?>

<pre><?=var_dump($clienteA, $clienteB)?></pre>
</body>
</html>