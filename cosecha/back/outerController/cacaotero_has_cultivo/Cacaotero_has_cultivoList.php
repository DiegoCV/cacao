<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    El gran hermano te vigila  \\
include_once realpath('../../innerController/Cacaotero_has_cultivoController.php');

$list=Cacaotero_has_cultivoController::listAll();
$rta="";
foreach ($list as $obj => $Cacaotero_has_cultivo) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Cacaotero_has_cultivo->getCACAOTERO_idCACAOTERO()->getidCacaotero()."</td>\n";
	$rta.="<td>".$Cacaotero_has_cultivo->getCULTIVO_idCULTIVO()->getidCULTIVO()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!