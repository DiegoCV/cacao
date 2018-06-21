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


$rta.="<tr class="."bg-info text-white"." align="."center>\n";
$rta.="<th>Id  Fertilizante</th>\n";
$rta.="<th>Nombre</th>\n";
$rta.="<th>Cantidad</th>\n";
$rta.="<th>Tipo</th>\n";
$rta.="</tr>\n";
foreach ($list as $obj => $Fertilizante) {	
	$rta.="<tr>\n";
	$rta.="<th>".$Fertilizante->getidFertilizante()."</th>\n";
	$rta.="<th>".$Fertilizante->getnombre()."</th>\n";
	$rta.="<th>".$Fertilizante->getcantidad()."</th>\n";
	$rta.="<th>".$Fertilizante->gettipo()."</th>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!