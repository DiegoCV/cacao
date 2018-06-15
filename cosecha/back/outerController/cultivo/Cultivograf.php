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
$datetime2 = new DateTime('now');
foreach ($list as $obj => $Cultivo) {	
	$rta.="<tr>\n";
	$rta.="<td>Cultivo: ".$Cultivo->getidCULTIVO()."</td>\n";
	$rta.="<td>".$Cultivo->getCULTIVO_FECHASIEMBRA()."</td>\n";
	$datetime1 = new DateTime($Cultivo->getCULTIVO_FECHASIEMBRA());
	$interval = $datetime1->diff($datetime2);
	$rta.=' <td>
	            <div class="progress">
	              <div class="progress-bar bg-info" role="progressbar" style="width:'.porcentaje($interval).'%; height:10px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
	            </div>
	        </td>';
	$rta.="</tr>\n";
}


function porcentaje($interval){
	return ($interval->format('%a') * 100) / 20;
}

echo $rta;

//That´s all folks!