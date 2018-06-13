<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Dispongo de doce horas de adelanto, puedo de decárselas a ella  \\
include_once realpath('../../innerController/CultivoController.php');

$idCULTIVO = $_POST['idCULTIVO'];
$Sector_idSECTOR = $_POST['SECTOR_idSECTOR'];
$sector= new Sector();
$sector->setIdSECTOR($Sector_idSECTOR);
$CULTIVO_FECHASIEMBRA = $_POST['CULTIVO_FECHASIEMBRA'];
CultivoController::insert($idCULTIVO, $sector, $CULTIVO_FECHASIEMBRA);
echo "true";

//That´s all folks!