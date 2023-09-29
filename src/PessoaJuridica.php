<?php
namespace Clientes;
require_once "Cliente.php";

class PessoaJuridica{

    private int $anoFundacao;
    private string $cnpj;
    private string $nomeFantasia;

    public function __construct()
    {
        /* Acessando o método setter PROTEGIDO (existente em Cliente) */
    
    }

    // ----------------------------------------------------------------
    public function getAnoFundacao(): int
    {
        return $this->anoFundacao;
    }

    
    public function setAnoFundacao(int $anoFundacao): void
    {
        $this->anoFundacao = $anoFundacao;
    }

    // --------------------------------------------------------------------
    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    
    public function setCnpj(string $cnpj): void
    {
        $this->cnpj = $cnpj;
    }

   //   ----------------------------------------------------------------
    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }

    
    public function setNomeFantasia(string $nomeFantasia): void
    {
        $this->nomeFantasia = $nomeFantasia;

    }
}

?>