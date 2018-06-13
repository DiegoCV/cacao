<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Nuestra empresa cuenta con una división sólo para las frases. Disfrútalas  \\
include_once realpath('../../innerController/FertilizanteController.php');

$idFertilizante = $_POST['idFertilizante'];
$nombre = $_POST['nombre'];
$cantidad = $_POST['cantidad'];
$tipo = $_POST['tipo'];
FertilizanteController::insert($idFertilizante, $nombre, $cantidad, $tipo);
echo "true";

//That´s all folks!