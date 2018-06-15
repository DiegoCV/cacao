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
foreach ($list as $obj => $Cacaotero) {	
	$rta.='<option value="'.$Cacaotero->getidCacaotero().'">'.$Cacaotero->getusuario().'</option>';
}
echo $rta;

//That´s all folks!