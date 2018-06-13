<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ya no la quiero, es cierto, pero tal vez la quiero. Es tan corto el amor, y es tan largo el olvido.  \\
include_once realpath('../../innerController/CosechaController.php');

$list=CosechaController::listAll();
$rta="";
foreach ($list as $obj => $Cosecha) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Cosecha->getidCOSECHA()."</td>\n";
	$rta.="<td>".$Cosecha->getCULTIVO_idCULTIVO()->getidCULTIVO()."</td>\n";
	$rta.="<td>".$Cosecha->getCOSECHA_SACOS()."</td>\n";
	$rta.="<td>".$Cosecha->getCOSECHAFECHA_REGISTRO()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!