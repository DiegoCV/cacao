<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ya no la quiero, es cierto, pero tal vez la quiero. Es tan corto el amor, y es tan largo el olvido.  \\
include_once realpath('../../innerController/FincaController.php');

$idFinca = $_POST['idFinca'];
$nombre = $_POST['nombre'];
$dueño = $_POST['dueño'];
$Administrador_id_ADMINISTRADOR = $_POST['ADMINISTRADOR_id_ADMINISTRADOR'];
$administrador= new Administrador();
$administrador->setId_ADMINISTRADOR($Administrador_id_ADMINISTRADOR);
FincaController::insert($idFinca, $nombre, $dueño, $administrador);
echo "true";

//That�s all folks!