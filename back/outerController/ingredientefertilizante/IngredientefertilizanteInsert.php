<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Yo a tu edad hacía calculadoras en visualBasic  \\
include_once realpath('../../innerController/IngredientefertilizanteController.php');

$idIngredienteFertilizante = $_POST['idIngredienteFertilizante'];
$Ingrediente_idIngrediente = $_POST['idIngrediente'];
$ingrediente= new Ingrediente();
$ingrediente->setIdIngrediente($Ingrediente_idIngrediente);
$Fertilizante_idFertilizante = $_POST['idFertilizante'];
$fertilizante= new Fertilizante();
$fertilizante->setIdFertilizante($Fertilizante_idFertilizante);
IngredientefertilizanteController::insert($idIngredienteFertilizante, $ingrediente, $fertilizante);
echo "true";

//That´s all folks!