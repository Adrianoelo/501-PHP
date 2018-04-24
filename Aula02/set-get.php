<?php 

class Pessoa
{
	public function __get($atributo)
	{
			echo "<p>Estou tentando acessar o atributo {$atributo}</p>";
	}

	public function __set($atributo,$valor)
	{
			echo "<p>Estou tentando setar o valor {$valor} no atributo {$atributo}</p>";
	}
}

$pessoa = new Pessoa();
$pessoa->nome = 'Adriano';
echo '<br>';
echo $pessoa->nome;
echo '<hr>';
var_dump($pessoa);