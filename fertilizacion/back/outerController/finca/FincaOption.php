<?php

include_once realpath('../../innerController/FincaController.php');


$list=FincaController::listAll();
$rta="";
foreach ($list as $obj => $finca) {	
	$rta.='<option value="'.$finca->getIdFinca().'">'.$finca->getIdFinca().'</option>';
}
echo $rta;

