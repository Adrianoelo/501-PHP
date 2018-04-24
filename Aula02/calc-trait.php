<?php

trait calculadora
{
	public function soma(int $num1, int $num2)
	{
		return $num1 + $num2;
	}

	public function subtrair(int $num1, int $num2)
	{
		return $num1 - $num2;
	}

	public function dividir(int $num1, int $num2)
	{
		return $num1 / $num2;
	}

	public function multiplicar(int $num1, int $num2)
	{
		return $num1 * $num2;
	}
}

class Pessoa
{
	use calculadora;

	public function getIdade()
	{
		return $this->subtrair(2018,1993);
	}
}

$lucas = new Pessoa();
echo $lucas->getIdade();