<?php 

class Metodos{

	public function mandarColor($valor){

		if ($valor==1) {
			return "rojo";	
		}else if ($valor==2) {
			return "negro";
		}else if ($valor==3) {
			return "azul";
			
		}else{

			echo "El valor no se encuentra registrado";
		}

	}


	public function darDeAltaColor($tipocolor){

		return self::mandarColor($tipocolor);

	}

}

//Creando objeto 

$color = new Metodos();

echo $color->darDeAltaColor(3);


 ?>



