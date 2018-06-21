<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Sabías que hay una vida afuera de tu cuarto?  \\


include_once realpath('../../innerController/FertilizacionController.php');
include_once realpath('../../innerController/CacaoteroController.php');
include_once realpath('../../innerController/FertilizanteController.php');
include_once realpath('../../innerController/SueloController.php');
include_once realpath('../../innerController/IngredienteFertilizanteController.php');
include_once realpath('../../innerController/FincaController.php');
include_once realpath('../../innerController/IngredienteController.php');
/*
$idFertilizacion = $_POST['idFertilizacion'];
$fecha = $_POST['fecha'];
$Suelo_idSuelo = $_POST['idSuelo'];
$suelo= new Suelo();
$suelo->setIdSuelo($Suelo_idSuelo);
$Fertilizante_idFertilizante = $_POST['idFertilizante'];
$fertilizante= new Fertilizante();
$fertilizante->setIdFertilizante($Fertilizante_idFertilizante);
$Cacaotero_idCacaotero = $_POST['idCacaotero'];
$cacaotero= new Cacaotero();
$cacaotero->setIdCacaotero($Cacaotero_idCacaotero);
FertilizacionController::insert($idFertilizacion, $fecha, $suelo, $fertilizante, $cacaotero);
echo "true";*/




$idSuelo=$_POST['sSuelo'];
//$idFinca=$_POST['idFinca'];
$idCacaotero=$_POST['idCacaotero'];
$pH=$_POST['pH'];
$carbonoOrganico=$_POST['carbonoOrganico'];
$materiaOrganica=$_POST['materiaOrganica'];
$potasio=$_POST['potasio'];
$calcio=$_POST['calcio'];
$magnesio=$_POST['magnesio'];
$sodio=$_POST['sodio'];
$boro=$_POST['boro'];
$fosforo=$_POST['fosforo'];
$nitrogeno=$_POST['nitrogeno'];
$azufre=$_POST['azufre'];
$idFertilizacion=null;
$fecha=null;




if($pH<'5' || $carbonoOrganico<'0,15' || $materiaOrganica<'3' || $potasio<'0,15' || $calcio<'3,5' || $magnesio<'1' || $sodio<'0,15' || $boro<'0,15' || $fosforo<'69' || $nitrogeno<'0,15' || $azufre<'0,15' ){
    $estado='No Apto';
    
    if($carbonoOrganico<'0,15'){
            fertilizante('Carbono Organico');
            
    }if($materiaOrganica<'3'){
            fertilizante('Materia Organica');
           
    }if($potasio<'0,15'){
            fertilizante('Potasio');
          
    }if($calcio<'3,5'){
            fertilizante('Calcio');
          
    }if($magnesio<'1'){
            fertilizante('Magnesio');
          
    }if($sodio<'0,15'){
            fertilizante('Sodio');
            
    }if($boro<'0,15'){
            fertilizante('Boro');
            
    }if($fosforo<'69'){
            fertilizante('Fosforo');
          
    }if($nitrogeno<'0,15'){
            fertilizante('Nitrogeno');
           
    }if($azufre<'0,15'){
            fertilizante('Azufre');
          
    }
}else{
   
    $estado='Apto';
    $suelo= SueloController::select($idSuelo);
            $hectarea=$suelo->getHectarea();
            $descripcion=$suelo->getDescripcion();
            $finca= FincaController::select($suelo->getIdFinca()->getIdFinca());
            
            SueloController::update($idSuelo, $hectarea, $estado, $descripcion, $finca, $pH, $carbonoOrganico, $materiaOrganica, $potasio, $calcio, $magnesio, $sodio, $boro, $fosforo, $nitrogeno, $azufre);
}
            
     

function fertilizante($compo){
    global $idSuelo;
    global $idCacaotero;
    global $pH;
    global $carbonoOrganico;
    global $materiaOrganica;
    global $potasio;
    global $calcio;
    global $magnesio;
    global $sodio;
    global $boro;
    global $fosforo;
    global $nitrogeno;
    global $azufre;
    global $idFinca;
    global $idFertilizacion;
    global $estado;
    global $fecha;
    
    $list=IngredientefertilizanteController::listAll();
    foreach ($list as $obj => $value) {
        //print("VAMOS COLOMBIA"."\n");
        $ingrediente=IngredienteController::select($value->getIdIngrediente()->getIdIngrediente());
       
        
        if($ingrediente->getComponente()==$compo){
                $fertilizante= new Fertilizante();
                $fertilizante=FertilizanteController::select($value->getIdFertilizante()->getIdFertilizante());

                $suelo= new Suelo();
                $suelo= SueloController::select($idSuelo);
                
                $cacaotero=new Cacaotero();
                $cacaotero= CacaoteroController::select($idCacaotero);
                
                //}if(verificarFertilizante($fertilizante)==false){
                    FertilizacionController::insert(null, null, $suelo, $fertilizante, $cacaotero);
                //}

                


                 
                
            }
            
            
       
        
    }
    $suelo= SueloController::select($idSuelo);
            $hectarea=$suelo->getHectarea();
            $descripcion=$suelo->getDescripcion();
            $finca= FincaController::select($suelo->getIdFinca()->getIdFinca());
            
            SueloController::update($idSuelo, $hectarea, $estado, $descripcion, $finca, $pH, $carbonoOrganico, $materiaOrganica, $potasio, $calcio, $magnesio, $sodio, $boro, $fosforo, $nitrogeno, $azufre);



}


function verificarFertilizante($fertilizanteL){
        
        $list=FertilizacionController::listAll();
        foreach ($list as $key => $fertil) {
            if($fertil->getIdFertilizante()->getIdFertilizante()==$fertilizanteL->getIdFertilizante()){
                return true;
                break;
            }
        }
        return false;
    }
echo '<script language="javascript">window.location="../../../front/registrar-analisis.html"</script>';

//That´s all folks!