<?php

include_once realpath('../../innerController/FertilizanteController.php');

$list=FertilizanteController::listAll();
$rta="";
foreach ($list as $obj => $fertilizante) {	
	$rta.='<option value="'.$fertilizante->getidFertilizante().'">'.$fertilizante->getidFertilizante().'</option>';
}
echo $rta;