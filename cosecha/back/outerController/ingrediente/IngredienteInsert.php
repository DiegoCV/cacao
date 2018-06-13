<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es una frase de prueba ¿Quieres ver la de verdad? ( ?~ ?? ?°)  \\
include_once realpath('../../innerController/IngredienteController.php');

$idIngrediente = $_POST['idIngrediente'];
$componente = $_POST['componente'];
IngredienteController::insert($idIngrediente, $componente);
echo "true";

//That´s all folks!