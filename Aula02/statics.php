<?php

class Caneta
{
	public static $tamanho=10;
	private $cor;

	public function __contruct(string $cor)
	{
		$this->cor = $cor;
	}

	public function getCor()
	{
		return $this->cor;
	}
	public function getTamanho()
	{
		return self::$tamanho;
	}
}

echo '<pre>';
echo Caneta::$tamanho;
$azul = new Caneta('azul');
var_dump(caneta);