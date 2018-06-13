<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    En un lugar de La Mancha, de cuyo nombre no quiero acordarme...  \\
include_once realpath('../../innerController/AdministradorController.php');

$id_ADMINISTRADOR = null;
$ADMINISTRADOR_NOMBRE = $_POST['ADMINISTRADOR_NOMBRE'];
$ADMINISTRADOR_APELLIDO = $_POST['ADMINISTRADOR_APELLIDO'];
$ADMINISTRADOR_USER = $_POST['ADMINISTRADOR_USER'];
$ADMINISTRADOR_PASS = $_POST['ADMINISTRADOR_PASS'];
AdministradorController::insert($id_ADMINISTRADOR, $ADMINISTRADOR_NOMBRE, $ADMINISTRADOR_APELLIDO, $ADMINISTRADOR_USER, $ADMINISTRADOR_PASS);
echo "true";

//That´s all folks!