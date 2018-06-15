<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */
 
//    Damos paso a la anarquía...  \\
include_once realpath('../../innerController/AdministradorController.php');

$finca = $_POST['finca'];

setcookie("finca","$finca");
session_start();
$_SESSION['finca']=$finca;
echo '<script language="javascript">window.location="../../../front/index.html"</script>';

