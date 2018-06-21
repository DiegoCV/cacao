<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Nuestra empresa cuenta con una división sólo para las frases. Disfrútalas  \\
include_once realpath('../../innerController/FertilizanteController.php');
include_once realpath('../../innerController/IngredientefertilizanteController.php');
include_once realpath('../../innerController/IngredienteController.php');


$idFertilizante = null;
$nombre = $_POST['nombre'];
$cantidad = $_POST['cantidad'];
$tipo = $_POST['tipoCom'];
$componentes=$_POST['componentes'];



if(retornarFertilizante($nombre)==null){
	FertilizanteController::insert($idFertilizante,  $nombre,  $cantidad,  $tipo);
	$fertilizante= new Fertilizante;
	$fertilizante=retornarFertilizante($nombre);


	
	foreach ($componentes as $obj => $componente) {
		$ingrediente= new Ingrediente();
		$ingrediente=retornarIngrediente($componente);
		$idIngredienteFertilizante=null;
		IngredientefertilizanteController::insert($idIngredienteFertilizante,  $ingrediente,  $fertilizante);

	}

}



function retornarIngrediente($componente){
	$lista=IngredienteController::listAll();
	foreach ($lista as $key => $value) {
		if($value->getComponente()==$componente){
			return $value;
			break;
		}
	}
	return null;
}



function retornarFertilizante($nombre){
	
	$lista=FertilizanteController::listAll();
	foreach ($lista as $key => $value) {
		if($value->getNombre()==$nombre){
			return $value;
			break;
		}
	}
	return null;
}

//FertilizanteController::insert($idFertilizante, $nombre, $cantidad, $tipo);
echo '<script language="javascript">window.location="../../../front/registrar-fertilizante.html"</script>';

//That´s all folks!