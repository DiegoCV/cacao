<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Bastará decir que soy Juan Pablo Castel, el pintor que mató a María Iribarne...  \\
include_once realpath('../../innerController/CultivoController.php');
session_start();
$list=CultivoController::CultivosOptionByfinca($_SESSION['finca']);
$rta="";
$cont = 1;
foreach ($list as $obj => $Cultivo) {	
	$rta.='<option value = "'.$Cultivo->getidCULTIVO().'">'.$Cultivo->getSECTOR_idSECTOR()->getFINCA_idFINCA()->getnombre().' Cultivo n° '.$cont.'</option>';
	$cont++;
}
echo $rta;

//That´s all folks!