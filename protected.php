<?php 

class ClasePadre{

	protected function metodo1(){


		return "método protegido";
	}

	public function mensaje(){


		return ClasePadre::metodo1();
	}

}


class ClaseHija extends ClasePadre{

	public function mostrar(){

		return self::metodo1();
	}

}

//echo ClasePadre::mensaje();
echo ClaseHija::mostrar();


  ?>	


  
