<?php

//Classe Conta
//Atributos
//saldo, numero conta
//Métodos
//sacar, depositar, verSaldo
//Instanciar a classe e atribuir valores aos atribudos
//Manipular os valores usando os métodos criados
//Mostrar na tela a seguinte mensagem
//Saldo atual da conta 'x' e 'y';

class Conta
{
	public $saldo;
	public $numeroConta;

	public function sacar(int $saque)
	{
		if ($saque <= $this->verSaldo()) {
			$this->saldo -= $saque;
		} else {
			echo 'Saldo Indisponivel';
		}
	}
	public function depositar(int $deposito)
	{	
		$this->saldo += $deposito;
	}
	public function verSaldo()
	{
		return $this->saldo;
	}
	public function numeroConta(string $numero)
	{
		return $this-> $numero;
	}
}

echo '<pre>';
$contaBancaria = new Conta();
$contaBancaria->depositar(500);
$contaBancaria->sacar(100);
$contaBancaria->depositar(320);
$contaBancaria->numeroConta(32145-3);
echo 'Saldo atual da conta:' . $contaBancaria->numeroConta . 'é: ' . $contaBancaria->verSaldo();
