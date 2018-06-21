<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Sabías que hay una vida afuera de tu cuarto?  \\
include_once realpath('../../innerController/SueloController.php');

$list=SueloController::listAll();
$rta="";
foreach ($list as $obj => $Suelo) {	
	$rta.='<option value="'.$Suelo->getidSuelo().'">'.$Suelo->getidSuelo().'</option>';
}
echo $rta;

