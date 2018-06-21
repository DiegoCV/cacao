<?php

include_once realpath('../../innerController/FincaController.php');

session_start();
$id = $_SESSION['ADMIN_ID'];
$list=FincaController::listByAdmin($id);
$rta="";
foreach ($list as $obj => $Finca) {	
	$rta.='<option value="'.$Finca->getidFinca().'">'.$Finca->getnombre().'</option>';
}
echo $rta;

//That´s all folks!