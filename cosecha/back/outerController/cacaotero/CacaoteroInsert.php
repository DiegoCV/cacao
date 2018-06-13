<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ojitos de luz de luna  \\
include_once realpath('../../innerController/CacaoteroController.php');

$idCacaotero = $_POST['idCacaotero'];
$cargo = $_POST['cargo'];
$cedula = $_POST['cedula'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
CacaoteroController::insert($idCacaotero, $cargo, $cedula, $usuario, $contraseña);
echo "true";

//That�s all folks!