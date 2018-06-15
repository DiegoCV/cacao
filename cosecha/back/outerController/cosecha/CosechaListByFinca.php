<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ya no la quiero, es cierto, pero tal vez la quiero. Es tan corto el amor, y es tan largo el olvido.  \\
include_once realpath('../../innerController/CosechaController.php');
session_start();
$list=CosechaController::CosechaListByFinca($_SESSION['finca']);
$rta="";
$succe= "table-success";
$info = "table-info";
$cont = 1;
foreach ($list as $obj => $Cosecha) {	
	if($cont % 2 == 0){
		$rta.='<tr  class="$succe">';
	}else{
		$rta.='<tr  class="$info">';
	}
	
	$rta.="<td>".$Cosecha->getidCOSECHA()."</td>\n";
	$rta.="<td>".$Cosecha->getCULTIVO_idCULTIVO()->getidCULTIVO()."</td>\n";
	$rta.="<td>".$Cosecha->getCOSECHA_SACOS()."</td>\n";
	$rta.="<td>".$Cosecha->getCOSECHAFECHA_REGISTRO()."</td>\n";
	$rta.="</tr>\n";
	$cont++;
}
$r = 10;
while ($r >= 0) {
	if($cont % 2 == 0){
		$rta.='<tr  class="$succe">';
	}else{
		$rta.='<tr  class="$info">';
	}
	$rta .= "<td>-</td><td>-</td><td>-</td><td>-</td></tr>";
	$r--;
	$cont++;
}

echo $rta;

//That´s all folks!