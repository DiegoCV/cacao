<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Mi satisfacción es hacerte un poco más vago  \\
include_once realpath('../../innerController/SectorController.php');

$list=SectorController::listAll();
$rta="";
foreach ($list as $obj => $Sector) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Sector->getidSECTOR()."</td>\n";
	$rta.="<td>".$Sector->getSECTOR_LARGO()."</td>\n";
	$rta.="<td>".$Sector->getSECTOR_ANCHO()."</td>\n";
	$rta.="<td>".$Sector->getFINCA_idFINCA()->getidFinca()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!