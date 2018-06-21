<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ya no la quiero, es cierto, pero tal vez la quiero. Es tan corto el amor, y es tan largo el olvido.  \\
include_once realpath('../../innerController/FincaController.php');

$idFinca = null;
$nombre = $_POST['nombre'];
$dueño = $_POST['dueño'];
session_start();
$Administrador_id_ADMINISTRADOR = $_SESSION["ADMIN_ID"];
$administrador= new Administrador();
$administrador->setId_ADMINISTRADOR($Administrador_id_ADMINISTRADOR);
FincaController::insert($idFinca, $nombre, $dueño, $administrador);
echo 'true';

//That�s all folks!