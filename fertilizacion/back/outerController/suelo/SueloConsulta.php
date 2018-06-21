<?php


include_once realpath('../../innerController/SueloController.php'); 
include_once realpath('../../innerController/FertilizanteController.php'); 
include_once realpath('../../innerController/FertilizacionController.php');

$idSuelo=$_POST['sSuelo'];

$suelo=SueloController::select($idSuelo);

$cadena="";
$cadena.="Hectarea: ".$suelo->getHectarea()."\n";
$cadena.="Estado: ".$suelo->getEstado()."\n";
$cadena.="Descripcion: ".$suelo->getDescripcion()."\n";
$cadena.="Ph: ".$suelo->getPH()."\n";
$cadena.="Carbono Organico: ".$suelo->getCarbonoOrganico()."\n";
$cadena.="Materia Organica: ".$suelo->getMateriaOrganico()."\n";
$cadena.="Potasio: ".$suelo->getPotasio()."\n";
$cadena.="Calcio: ".$suelo->getCalcio()."\n";
$cadena.="Magnesio: ".$suelo->getMagnesio()."\n";
$cadena.="Sodio: ".$suelo->getSodio()."\n";
$cadena.="Boro: ".$suelo->getBoro()."\n";
$cadena.="Fosforo: ".$suelo->getFosforo()."\n";
$cadena.="Nitrogeno: ".$suelo->getNitrogeno()."\n";
$cadena.="Azufre: ".$suelo->getAzufre()."\n";
$cadena.="FERTILIZANTES: \n";

$lista=FertilizacionController::listAll();
foreach ($lista as $key => $value) {
	if($value->getIdSuelo()->getIdSuelo()==$idSuelo){
		if(validarFer($value->getIdFertilizante()->getIdFertilizante())<=1){
			$fertilizante=FertilizanteController::select($value->getIdFertilizante()->getIdFertilizante());
			$cadena.=$fertilizante->getNombre()."\n";
		}
		

	}
}


function validarFer($idFer){
	global $lista;
	global $idSuelo;
	$cont=0;
	foreach ($lista as $key => $value) {
		
	if($value->getIdSuelo()->getIdSuelo()==$idSuelo && $value->getIdFertilizante()->getIdFertilizante()==$idFer){
		$cont=$cont+1;
		
	}
}
}

echo $cadena;
