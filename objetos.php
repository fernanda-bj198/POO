<?php 

class MyClass{

	//Propiedades

	public $resultado=0;

	//Metodos

	public function suma ($var1, $var2){

		$this->resultado = $var1 + $var2;

		return $this->resultado;

	}

}
//Crear una instancia/objeto de la clase MyClass

$miObjeto = new MyClass();

echo $miObjeto->suma(100,1000);

?>



