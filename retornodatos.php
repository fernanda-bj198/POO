<?php 

class retornoDatos{

	//Retorno de una cadena 

	public function retornaString($edad){

		if ($edad > 18 ) {

			return "Eres mayor de edad";

		}else{

			return "No eres mayor de edad";
		}

	}


	//Retorno de un entero

	public function retornaEntero($valor){

		if ($valor > 0) {
			return 1;
		}else{
			return 0;
		}

	}


	//Retorno de un arreglo 

	public function retornaArreglo($ciclos){

		$datos = array();

		for ($i=0; $i < $ciclos ; $i++) { 

			$datos[$i] = $i;

		}

		return $datos;
	}

	//Retorno de un objeto JSON

	public function retornaJson (){

		$edad = array(
			"Peter"=>"35",
			"Ben"=>"37",
			"Joe"=>"43");

		return json_encode($edad);
	}

}

//Creando un objeto 

$cadena = new retornoDatos();
//echo $cadena->retornaString(10);
//echo "<br>";
//echo $cadena->retornaEntero(1);
var_dump($cadena->retornaArreglo(3));
//var_dump($cadena->retornaJson());

?>







