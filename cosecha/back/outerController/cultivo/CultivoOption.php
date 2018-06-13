<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Bastará decir que soy Juan Pablo Castel, el pintor que mató a María Iribarne...  \\
include_once realpath('../../innerController/CultivoController.php');

$list=CultivoController::listAll();
$rta="";
foreach ($list as $obj => $Cultivo) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Cultivo->getidCULTIVO()."</td>\n";
	$rta.="<td>".$Cultivo->getSECTOR_idSECTOR()->getidSECTOR()."</td>\n";
	$rta.="<td>".$Cultivo->getCULTIVO_FECHASIEMBRA()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;