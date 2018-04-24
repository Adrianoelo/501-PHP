<?php

class Calc
{
	public static function hello()
	{
		return 'Hello';
	}

	public static function soma(int $num1, int $num2)
	{
		return $num1 + $num2;
	}

	public static function subtrair(int $num1, int $num2)
	{
		return $num1 - $num2;
	}

	public static function dividir(int $num1, int $num2)
	{
		return $num1 / $num2;
	}

	public static function multiplicar(int $num1, int $num2)
	{
		return $num1 * $num2;
	}
}


echo Calc::hello();
echo '<br>';
echo Calc::soma(5,5);
echo '<br>';
echo Calc::subtrair(5,5);
echo '<br>';
echo Calc::dividir(5,5);
echo '<br>';
echo Calc::multiplicar(5,5);