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
	$rta.="<tr>\n";
	$rta.="<td>".$Suelo->getidSuelo()."</td>\n";
	$rta.="<td>".$Suelo->gethectarea()."</td>\n";
	$rta.="<td>".$Suelo->getestado()."</td>\n";
	$rta.="<td>".$Suelo->getdescripcion()."</td>\n";
	$rta.="<td>".$Suelo->getidFinca()->getidFinca()."</td>\n";
	$rta.="<td>".$Suelo->getpH()."</td>\n";
	$rta.="<td>".$Suelo->getcarbonoOrganico()."</td>\n";
	$rta.="<td>".$Suelo->getmateriaOrganico()."</td>\n";
	$rta.="<td>".$Suelo->getpotasio()."</td>\n";
	$rta.="<td>".$Suelo->getcalcio()."</td>\n";
	$rta.="<td>".$Suelo->getmagnesio()."</td>\n";
	$rta.="<td>".$Suelo->getsodio()."</td>\n";
	$rta.="<td>".$Suelo->getboro()."</td>\n";
	$rta.="<td>".$Suelo->getfosforo()."</td>\n";
	$rta.="<td>".$Suelo->getnitrogeno()."</td>\n";
	$rta.="<td>".$Suelo->getazufre()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!