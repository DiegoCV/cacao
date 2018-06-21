<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Damos paso a la anarquía...  \\
include_once realpath('../../innerController/FertilizacionController.php');

$list=FertilizacionController::listAll();
$rta="";
foreach ($list as $obj => $Fertilizacion) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Fertilizacion->getidFertilizacion()."</td>\n";
	$rta.="<td>".$Fertilizacion->getfecha()."</td>\n";
	$rta.="<td>".$Fertilizacion->getidSuelo()->getidSuelo()."</td>\n";
	$rta.="<td>".$Fertilizacion->getidFertilizante()->getidFertilizante()."</td>\n";
	$rta.="<td>".$Fertilizacion->getidCacaotero()->getidCacaotero()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!