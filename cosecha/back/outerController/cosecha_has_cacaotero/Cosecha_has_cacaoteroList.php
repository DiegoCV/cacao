<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Don´t call me gringo you f%&ing beanner  \\
include_once realpath('../../innerController/Cosecha_has_cacaoteroController.php');

$list=Cosecha_has_cacaoteroController::listAll();
$rta="";
foreach ($list as $obj => $Cosecha_has_cacaotero) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Cosecha_has_cacaotero->getCOSECHA_idCOSECHA()->getidCOSECHA()."</td>\n";
	$rta.="<td>".$Cosecha_has_cacaotero->getCACAOTERO_idCACAOTERO()->getidCacaotero()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!