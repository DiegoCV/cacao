<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Traigo una pizza para ¿y se la creyó?  \\
include_once realpath('../../innerController/FertilizanteController.php');

$list=FertilizanteController::listAll();
$rta="";
foreach ($list as $obj => $Fertilizante) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Fertilizante->getidFertilizante()."</td>\n";
	$rta.="<td>".$Fertilizante->getnombre()."</td>\n";
	$rta.="<td>".$Fertilizante->getcantidad()."</td>\n";
	$rta.="<td>".$Fertilizante->gettipo()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!