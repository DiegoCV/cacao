<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Hey øcÛmo se llama tu cafÈ internet?  \\
include_once realpath('../../innerController/FincaController.php');

$list=FincaController::listAll();
$rta="";
foreach ($list as $obj => $Finca) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Finca->getidFinca()."</td>\n";
	$rta.="<td>".$Finca->getnombre()."</td>\n";
	$rta.="<td>".$Finca->getdue√±o()."</td>\n";
	$rta.="<td>".$Finca->getADMINISTRADOR_id_ADMINISTRADOR()->getid_ADMINISTRADOR()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That¥s all folks!