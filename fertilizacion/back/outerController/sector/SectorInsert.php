<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Todos los animales son iguales, pero algunos animales son más iguales que otros  \\
include_once realpath('../../innerController/SectorController.php');

$idSECTOR = $_POST['idSECTOR'];
$SECTOR_LARGO = $_POST['SECTOR_LARGO'];
$SECTOR_ANCHO = $_POST['SECTOR_ANCHO'];
$Finca_idFinca = $_POST['FINCA_idFINCA'];
$finca= new Finca();
$finca->setIdFinca($Finca_idFinca);
SectorController::insert($idSECTOR, $SECTOR_LARGO, $SECTOR_ANCHO, $finca);
echo "true";

//That´s all folks!