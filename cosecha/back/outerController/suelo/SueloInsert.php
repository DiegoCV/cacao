<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Antes que me hubiera apasionado por mujer alguna, jugué mi corazón al azar y me lo ganó la Violencia.  \\
include_once realpath('../../innerController/SueloController.php');

$idSuelo = $_POST['idSuelo'];
$hectarea = $_POST['hectarea'];
$estado = $_POST['estado'];
$descripcion = $_POST['descripcion'];
$Finca_idFinca = $_POST['idFinca'];
$finca= new Finca();
$finca->setIdFinca($Finca_idFinca);
$pH = $_POST['pH'];
$carbonoOrganico = $_POST['carbonoOrganico'];
$materiaOrganico = $_POST['materiaOrganico'];
$potasio = $_POST['potasio'];
$calcio = $_POST['calcio'];
$magnesio = $_POST['magnesio'];
$sodio = $_POST['sodio'];
$boro = $_POST['boro'];
$fosforo = $_POST['fosforo'];
$nitrogeno = $_POST['nitrogeno'];
$azufre = $_POST['azufre'];
SueloController::insert($idSuelo, $hectarea, $estado, $descripcion, $finca, $pH, $carbonoOrganico, $materiaOrganico, $potasio, $calcio, $magnesio, $sodio, $boro, $fosforo, $nitrogeno, $azufre);
echo "true";

//That´s all folks!