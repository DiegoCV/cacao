<?php

include_once realpath('../../innerController/CacaoteroController.php');

$list=CacaoteroController::listAll();
$rta="";
foreach ($list as $obj => $cacaotero) {	
	$rta.='<option value="'.$cacaotero->getIdCacaotero().'">'.$cacaotero->getIdCacaotero().'</option>';
}
echo $rta;