<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    gravitaban alrededor del astro de la noche, y por primera vez podÌa la vista penetrar todos sus misterios.  \\
include_once realpath('../../innerController/CacaoteroController.php');

$list=CacaoteroController::listAll();
$rta="";
foreach ($list as $obj => $Cacaotero) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Cacaotero->getidCacaotero()."</td>\n";
	$rta.="<td>".$Cacaotero->getcargo()."</td>\n";
	$rta.="<td>".$Cacaotero->getcedula()."</td>\n";
	$rta.="<td>".$Cacaotero->getusuario()."</td>\n";
	$rta.="<td>".$Cacaotero->getcontrase√±a()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That¥s all folks!