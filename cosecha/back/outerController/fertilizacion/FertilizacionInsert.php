<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Sabías que hay una vida afuera de tu cuarto?  \\
include_once realpath('../../innerController/FertilizacionController.php');

$idFertilizacion = $_POST['idFertilizacion'];
$fecha = $_POST['fecha'];
$Suelo_idSuelo = $_POST['idSuelo'];
$suelo= new Suelo();
$suelo->setIdSuelo($Suelo_idSuelo);
$Fertilizante_idFertilizante = $_POST['idFertilizante'];
$fertilizante= new Fertilizante();
$fertilizante->setIdFertilizante($Fertilizante_idFertilizante);
$Cacaotero_idCacaotero = $_POST['idCacaotero'];
$cacaotero= new Cacaotero();
$cacaotero->setIdCacaotero($Cacaotero_idCacaotero);
FertilizacionController::insert($idFertilizacion, $fecha, $suelo, $fertilizante, $cacaotero);
echo "true";

//That´s all folks!