<?php

class Restful_Controller
{
	public $baseName = 'restful';  //meghatározni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router által továbbított paramétereket kapja
	{
		$beleptetModel = new Restful_Model;  //az osztályhoz tartozó modell
		//a modellben belépteti a felhasználót
		$retData = $beleptetModel->get_data($vars);
		
		//betöltjük a nézetet
		$view = new View_Loader($this->baseName.'_main');
		
	}
}

?>