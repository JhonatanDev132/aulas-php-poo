<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo5</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 5 - Herança</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Herança(Super Classe e Sub Classe)</li>
        <li>Métodos/prpriedades protegidos (acessíveis apenas pela classe em que foram definidos e pelas subcalsses)</li>
        <li>Classe Abstrata</li>
        <li>Classe Final</li>
    </ul>


    <?php
    require_once "src/PessoaFisica.php";
    require_once "src/PessoaJuridica.php";
    $clientePF = new PessoaFisica;

    $clientePF->setNome("Fulano");
    $clientePF->setIdade(25);
    $clientePF->setCpf("123.456.789-00");
    $clientePF->setEmail("fulano@gmail.com");

    $clientePJ = new PessoaJuridica;
    $clientePJ->setNome(" Beltrano");
    $clientePJ->setEmail("beltrano@gmail.com");
    $clientePJ->setNomeFantasia("Casa Da Torta");
    $clientePJ->setAnoFundacao(1998);
    $clientePJ->setCnpj("12.123.123/0001-XX")

    
    ?>


    <?php
    require_once "src/Cliente.php";
    $clienteGenerico = new Cliente;
    ?>
    <pre><?=var_dump($clienteGenerico)?></pre>
    
</body>
</html>