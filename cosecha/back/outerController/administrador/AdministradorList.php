<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es una frase no referenciada  \\
include_once realpath('../../innerController/AdministradorController.php');

$list=AdministradorController::listAll();
$rta="";
foreach ($list as $obj => $Administrador) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Administrador->getid_ADMINISTRADOR()."</td>\n";
	$rta.="<td>".$Administrador->getADMINISTRADOR_NOMBRE()."</td>\n";
	$rta.="<td>".$Administrador->getADMINISTRADOR_APELLIDO()."</td>\n";
	$rta.="<td>".$Administrador->getADMINISTRADOR_USER()."</td>\n";
	$rta.="<td>".$Administrador->getADMINISTRADOR_PASS()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!