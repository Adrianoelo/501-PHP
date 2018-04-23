<?php

//Classe Conta
//Classe ContaCorrente herda conta
//Classe ContaPoupanca herda conta


class Conta
{
	public $saldo;

	public function sacar(){return 'Sacando';}
	public function depositar(){return 'Depositando';}
	public function verSaldo(){return $this->saldo;}
}

class ContaCorrente extends Conta{}
class ContaPoupanca extends Conta{}

$cc = new ContaCorrente();
$cp = new ContaPoupanca();
echo '<pre>';
var_dump($cp);
var_dump($cp);
echo '<hr>';
echo $cc->sacar();
echo '<br>';
echo $cp->depositar();
