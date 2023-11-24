<?php

class Ajax_Controller
{
	public $baseName = 'ajax';  //meghatározni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router által továbbított paramétereket kapja
	{
		$beleptetModel = new Ajax_Model;  //az osztályhoz tartozó modell
		
		$retData = $beleptetModel->get_data($vars);
		
		
		$view = new View_Loader($this->baseName.'_main');
		
		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
}

?>