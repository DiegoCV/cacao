<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    -¡UNO! -¡¡ +4 !!  \\
include_once realpath('../../innerController/Cosecha_has_cacaoteroController.php');

$Cosecha_idCOSECHA = $_POST['COSECHA_idCOSECHA'];
$cosecha= new Cosecha();
$cosecha->setIdCOSECHA($Cosecha_idCOSECHA);
$Cacaotero_idCacaotero = $_POST['CACAOTERO_idCACAOTERO'];
$cacaotero= new Cacaotero();
$cacaotero->setIdCacaotero($Cacaotero_idCacaotero);
Cosecha_has_cacaoteroController::insert($cosecha, $cacaotero);
echo "true";

//That´s all folks!