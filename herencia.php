<?php 
class ClasePadre{

	public function metodoPadre(){

		return "Hola desde el padre";

	}

	public function metodo1(){

		return "Este es método padre";

	}

}

class ClaseHijo extends ClasePadre{

	public function metodoHijo(){

		//return parent::metodo1();

		return self::metodoPadre();

	}

	public function metodo1(){

		return "Este es método hijo";

	}

	public function metodoPadre(){

		return "Hola desde el hijo";

	}

}

//Creando un objeto 

//$obj = new ClaseHijo();
//echo $obj->metodoPadre();

//instancia rápida o de doble puntuación

echo ClaseHijo::metodoHijo(); 

?>




