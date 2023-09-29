<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo9</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 9 - Namespaces</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Namespaces: agrupamento e organização de recursos (classes, funções, constantes)</li>
        <li>Prevenção de conflitos entre classes de mesmo nome</li>
        <li>Configurar e usar <code>namespaces</code> e <code>alias</code>.</li>
    </ul>

    <?php
    /* Só de fazer o require/importação das classes, já da erro no servidor devido a terem o mesmo nome */

// use Fornecedor\Pagamento;
// use Prestador\Pagamento as PrestadorPagamento;

    require_once "src/fornecedores/Pagamento.php";
    require_once "src/prestadores/Pagamento.php";

    // Forma 1

   // $pagamentoFornecedor = new Fornecedor\Pagamento;
   // $pagamentoPrestador = new Prestador\Pagamento;

   // Forma 2 de usar classes com namespaces
   // use Fornecedor\Pagamento;
   // use Prestador\Pagamento as PrestadorPagamento; // ALIAS (Apelido)

   // $pagamentoFornecedor = new Pagamento;
   // $pagamentoPrestador = new PrestadorPagamento; // objeto através do alias

   // Forma 3
   // $pagamentoFornecedor = new Pagamento;
   // $pagamentoPrestador = new PrestadorPagamento;

   /* Exercícios:
   - Crie objetos cliente PF, cliente PJ, cliente MEI
   - Coloque alguns dados usando setters
   - Exiba alguns dados no HTML */

   use Clientes\PessoaFisica;
   use Clientes\PessoaJuridica;
   use Clientes\MEI;

   require_once "src/PessoaFisica.php";
   require_once "src/PessoaJuridica.php";
   require_once "src/MEI.php";
   
    $clientePF = new PessoaFisica;
    $clientePJ = new PessoaJuridica;
    $clienteMEI = new MEI;

    $clientePF->setNome("Maisa");
    $clientePF->setCpf("321-123-456-10");
    $clientePF->setIdade("25");
    $clientePF->setEmail("maisa@gmail.com");

    echo "Nome: ".$clientePF->getNome();
    echo "<br>";
    echo "CPF: ".$clientePF->getCpf();
    echo "<br>";
    echo "Idade: ".$clientePF->getIdade();
    echo "<br>";
    echo "Email: ".$clientePF->getEmail();
    echo "<hr>";

    $clientePJ->setNomeFantasia("Barraca do Zé");
    $clientePJ->setCnpj("12.345.678/0001-12");
    $clientePJ->setAnoFundacao("1998");


    echo "Nome: ".$clientePJ->getNomeFantasia();
    echo "<br>";
    echo "Ano de Fundação: ".$clientePJ->getAnoFundacao();
    echo "<br>";
    echo "CNPJ: ".$clientePJ->getCnpj();

    echo "<hr>";

    $clienteMEI->setAreaDeAtuacao("Lojinha");
    echo "Área: ".$clienteMEI->getAreaDeAtuacao()

?>

    <pre><?=var_dump($pagamentoFornecedor)?></pre>
    <pre><?=var_dump($pagamentoPrestador)?></pre>
</body>
</html>