<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo5</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 9 - Namespaces</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Namespaces: agrupamento e organização de recursos (classes, funções, constantes)</li>
        <li>Prevenção de conflitos entre classes de mesmo nome</li>
        <li>Configurar e usar namespaces e alias.</li>
    </ul>

    <?php
    /* Só de fazer o require/importação das classes, já da erro no servidor devido a terem o mesmo nome */

use Fornecedor\Pagamento;
use Prestador\Pagamento as PrestadorPagamento;

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
   $pagamentoFornecedor = new Pagamento;
   $pagamentoPrestador = new PrestadorPagamento;
?>

    <pre><?=var_dump($pagamentoFornecedor)?></pre>
    <pre><?=var_dump($pagamentoPrestador)?></pre>
</body>
</html>