<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Antes que me hubiera apasionado por mujer alguna, jugué mi corazón al azar y me lo ganó la Violencia.  \\
include_once realpath('../../innerController/SueloController.php');
include_once realpath('../../innerController/FincaController.php');

$idSuelo = null;
$hectarea = $_POST['hectareas'];
$estado = null;
$descripcion = $_POST['descripcion'];
$idFinca = $_POST['idFinca'];
$finca= new Finca();
$finca=FincaController::select($idFinca);
print ($finca->getIdFinca());
$pH = null;
$carbonoOrganico = null;
$materiaOrganico = null;
$potasio = null;
$calcio = null;
$magnesio =null;
$sodio = null;
$boro = null;
$fosforo = null;
$nitrogeno = null;
$azufre = null;
SueloController::insert($idSuelo,  $hectarea,  $estado,  $descripcion,  $finca,  $pH,  $carbonoOrganico,  $materiaOrganico,  $potasio,  $calcio,  $magnesio,  $sodio,  $boro,  $fosforo,  $nitrogeno,  $azufre);
echo '<script language="javascript">window.location="../../../front/registrar-suelo.html"</script>';

//That´s all folks!