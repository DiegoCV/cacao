<?php 


include_once realpath('../../innerController/FertilizanteController.php');
include_once realpath('../../innerController/IngredienteFertilizanteController.php');
include_once realpath('../../innerController/IngredienteController.php');



$idFertilizante=$_POST['idFertilizante'];



$fertilizante=FertilizanteController::select($idFertilizante);
$list=IngredienteFertilizanteController::listAll();

$cadena="";
$cadena.="Nombre: ".$fertilizante->getNombre()."\n";
$cadena.="Tipo: ".$fertilizante->getTipo()."\n";
$cadena.="Componentes: \n";
foreach ($list as $key => $value) {
	if($value->getIdFertilizante()->getIdFertilizante()==$idFertilizante){
		$componente= new Ingrediente();
		$componente=IngredienteController::select($value->getIdIngrediente()->getIdIngrediente());
		$cadena.=$componente->getComponente()."\n";
	}
}
//echo "<script>document.getElementById('exampleTextarea').setText($cadena);</script>";
echo $cadena;
