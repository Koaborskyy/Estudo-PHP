<?php


Class ContaBancaria{

    public $banco;
    private $nomeTitular;
    public $nomeAgencia;
    public $numeroConta;
    public $saldo;

    public function exibirTitular(): array{
        return [
        'nomeTitular'=> $this->nomeTitular,
        ];
    }

}


$conta = new ContaBancaria();

var_dump($conta->exibirTitular());