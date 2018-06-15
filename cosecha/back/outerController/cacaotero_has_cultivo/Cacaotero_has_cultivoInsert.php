<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Has escuchado hablar del grandioso señor Arciniegas?  \\
include_once realpath('../../innerController/Cacaotero_has_cultivoController.php');

$Cacaotero_idCacaotero = $_POST['cacaotero'];
$cacaotero= new Cacaotero();
$cacaotero->setIdCacaotero($Cacaotero_idCacaotero);
$Cultivo_idCULTIVO = $_POST['cultivo'];
$cultivo= new Cultivo();
$cultivo->setIdCULTIVO($Cultivo_idCULTIVO);
Cacaotero_has_cultivoController::insert($cacaotero, $cultivo);
echo "true";

//That´s all folks!