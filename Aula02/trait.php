<?php

trait log
{
		public function escreverkig($msg)
		{
			echo "Log da {$msg}";
		}
}

class x
{
	use Log;
}

class Y extends x
{	
	public function save()
	{
		$this->escreverLog("Trait");
	}	
}

$Sy = new Y();
$Sy->save();
echo $Sy;