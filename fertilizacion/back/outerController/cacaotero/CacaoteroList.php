<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    gravitaban alrededor del astro de la noche, y por primera vez podía la vista penetrar todos sus misterios.  \\
include_once realpath('../../innerController/CacaoteroController.php');

$list=CacaoteroController::listAll();
$rta="";
$rta.="<tr class="."bg-info text-white"." align="."center>\n";
$rta.="<th>Id  Cacaotero</th>\n";
$rta.="<th>Nombre</th>\n";
$rta.="<th>Cedula</th>\n";
$rta.="<th>Cargo</th>\n";
$rta.="</tr>\n";
                    

foreach ($list as $obj => $Cacaotero) {	
	$rta.="<tr>\n";
	$rta.="<th>".$Cacaotero->getidCacaotero()."</th>\n";
	$rta.="<th>".$Cacaotero->getusuario()."</th>\n";
	$rta.="<th>".$Cacaotero->getcedula()."</th>\n";
	$rta.="<th>".$Cacaotero->getcargo()."</th>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!