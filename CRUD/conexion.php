<?php 

class Conectar{

	//Propiedades

	private $servidor="localhost";
	private $usuario="root";
	private $password="";
	private $bd="crudpoo";
	

	public function conexion(){

		$conexion=mysqli_connect($this->servidor,$this->usuario,$this->password,$this->bd);

		return $conexion;

	}
}

$obj = new Conectar();

if ($obj->conexion()) {

	echo "Conectado con éxito";
	
}else{

	echo "Error";
}

?>

