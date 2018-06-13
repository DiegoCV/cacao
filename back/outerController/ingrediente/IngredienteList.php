<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Hecho en sólo 6 días  \\
include_once realpath('../../innerController/IngredienteController.php');

$list=IngredienteController::listAll();
$rta="";
foreach ($list as $obj => $Ingrediente) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Ingrediente->getidIngrediente()."</td>\n";
	$rta.="<td>".$Ingrediente->getcomponente()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!