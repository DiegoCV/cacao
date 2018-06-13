<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Muchos años después, frente al pelotón de fusilamiento, el coronel Aureliano Buendía había de recordar aquella tarde remota en que su padre lo llevó a conocer el hielo.   \\
include_once realpath('../../innerController/AgendaController.php');

$list=AgendaController::listAll();
$rta="";
foreach ($list as $obj => $Agenda) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Agenda->getidAGENDA()."</td>\n";
	$rta.="<td>".$Agenda->getCULTIVO_idCULTIVO()->getidCULTIVO()."</td>\n";
	$rta.="<td>".$Agenda->getAGENDA_COMENTARIO()."</td>\n";
	$rta.="<td>".$Agenda->getAGENDAFECHA_REGISTRO()."</td>\n";
	$rta.="<td>".$Agenda->getAGENDA_TIPO()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!