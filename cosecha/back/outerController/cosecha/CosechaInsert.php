<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ojitos de luz de luna  \\
include_once realpath('../../innerController/CosechaController.php');

$idCOSECHA = null;
$Cultivo_idCULTIVO = $_POST['CULTIVO_idCULTIVO'];
$cultivo= new Cultivo();
$cultivo->setIdCULTIVO($Cultivo_idCULTIVO);
$COSECHA_SACOS = $_POST['COSECHA_SACOS'];
$COSECHAFECHA_REGISTRO = $_POST['COSECHAFECHA_REGISTRO'];
CosechaController::insert($idCOSECHA, $cultivo, $COSECHA_SACOS, $COSECHAFECHA_REGISTRO);
echo "true";

//That´s all folks!