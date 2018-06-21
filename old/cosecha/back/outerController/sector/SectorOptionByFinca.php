<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Mi satisfacción es hacerte un poco más vago  \\
include_once realpath('../../innerController/SectorController.php');
session_start();
$list=SectorController::SectorOptionByFinca($_SESSION['finca']);
$rta="";
$cont = 1;
foreach ($list as $obj => $Sector) {	
	$rta.='<option value="'.$Sector->getidSECTOR().'">'.$Sector->getFINCA_idFINCA()->getnombre().' - Sector: '.$cont.'</option>';
	$cont++;
}
echo $rta;

//That´s all folks!
