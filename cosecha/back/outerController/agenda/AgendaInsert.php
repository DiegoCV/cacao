<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Me pagan USD 10,000 por cada frase que invento. 20,000 por las más tontas  \\
include_once realpath('../../innerController/AgendaController.php');

$idAGENDA = $_POST['idAGENDA'];
$Cultivo_idCULTIVO = $_POST['CULTIVO_idCULTIVO'];
$cultivo= new Cultivo();
$cultivo->setIdCULTIVO($Cultivo_idCULTIVO);
$AGENDA_COMENTARIO = $_POST['AGENDA_COMENTARIO'];
$AGENDAFECHA_REGISTRO = $_POST['AGENDAFECHA_REGISTRO'];
$AGENDA_TIPO = $_POST['AGENDA_TIPO'];
AgendaController::insert($idAGENDA, $cultivo, $AGENDA_COMENTARIO, $AGENDAFECHA_REGISTRO, $AGENDA_TIPO);
echo "true";

//That´s all folks!