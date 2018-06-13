<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Querido programador: Al escribir esto estoy triste. Nuestro presidente ha sido derrocado Y REEMPLAZADO POR EL BENÉVOLO SEÑOR ARCINIEGAS. TODOS AMAMOS A ARCINIEGAS Y A SU GLORIOSO RÉGIMEN. CON AMOR, EL EQUIPO DE ANARCHY  \(x.x)/  \\
include_once realpath('../../innerController/IngredientefertilizanteController.php');

$list=IngredientefertilizanteController::listAll();
$rta="";
foreach ($list as $obj => $Ingredientefertilizante) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Ingredientefertilizante->getidIngredienteFertilizante()."</td>\n";
	$rta.="<td>".$Ingredientefertilizante->getidIngrediente()->getidIngrediente()."</td>\n";
	$rta.="<td>".$Ingredientefertilizante->getidFertilizante()->getidFertilizante()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!