<?php

// Classe Carro
// Atributos cor, marca,velocidade,marcha

//Métodos
//acelerar - aumenta a velocidade
//freiar - diminui a velocidade
//trocarMarcha - recebe uma marcha e altera o atributo
//verVelocidade - retornar a velocidade atual
//verMarcha - retorna a marcha atual
//Instanciar dois objetos
//Manipular eles, usando os metodos criados

/**
* 
*/
class Carro
{
	public $cor;
	public $marca;
	public $velocidade;
	public $marcha;

	public function acelerar()
		{
			$this->velocidade +=10;
		}

	public function freiar()
		{
			$this->velocidade -=10;
		}
	public function trocarMarcha(int $novaMarcha)
		{
			$this->marcha = $novaMarcha;
		}
	public function verVelocidade()
		{
			return $this->velocidade;
		}
	public function verMarcha()
		{
			return $this->marcha;
		}
}

echo '<pre>';

$Fusca = new Carro();
$Fusca->cor = 'Preto';
$Fusca->marca = 'Volkswagen';
var_dump($Fusca);
echo '<hr>';
$Fusca->acelerar();
$Fusca->acelerar();
$Fusca->acelerar();
var_dump($Fusca);
echo '<hr>';
$Fusca->trocarMarcha(3);
var_dump($Fusca);
echo '<hr>';
$Fusca->freiar();
echo 'Velocidade Atual:' . $Fusca->verVelocidade();
echo '<br>';
echo 'Marcha Atual: ' . $Fusca->verMarcha();


