<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ojitos de luz de luna  \\
include_once realpath('../../innerController/CacaoteroController.php');

$idCacaotero = null;
$cargo = $_POST['cargo'];
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$contrasena = null;


if(retornarCacaotero()==null){
	CacaoteroController::insert($idCacaotero,  $cargo,  $cedula,  $nombre,  $contrasena);
}


function retornarCacaotero(){
	global $cedula;
	$lista=CacaoteroController::listAll();
	foreach ($lista as $key => $value) {
		if($value->getCedula()==$cedula){
			return $value;
			break;
		}
	}
	return null;

}


echo '<script language="javascript">window.location="../../../front/registrar-cacaotero.html"</script>';

//That´s all folks!