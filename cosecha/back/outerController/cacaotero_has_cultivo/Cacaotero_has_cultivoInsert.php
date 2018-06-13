<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Has escuchado hablar del grandioso señor Arciniegas?  \\
include_once realpath('../../innerController/Cacaotero_has_cultivoController.php');

$Cacaotero_idCacaotero = $_POST['CACAOTERO_idCACAOTERO'];
$cacaotero= new Cacaotero();
$cacaotero->setIdCacaotero($Cacaotero_idCacaotero);
$Cultivo_idCULTIVO = $_POST['CULTIVO_idCULTIVO'];
$cultivo= new Cultivo();
$cultivo->setIdCULTIVO($Cultivo_idCULTIVO);
Cacaotero_has_cultivoController::insert($cacaotero, $cultivo);
echo "true";

//That´s all folks!