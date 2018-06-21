<?php
/*
              -------Creado por-------
             /(x.x )/ Anarchy /( x.x)/
              ------------------------
 */

//    Quédate con quien te quiera por tu back-end, no por tu front-end  //

include_once realpath('../..').'/dao/interfaz/IFertilizacionDao.php';
include_once realpath('../..').'/dto/Fertilizacion.php';
include_once realpath('../..').'/dto/Suelo.php';
include_once realpath('../..').'/dto/Fertilizante.php';
include_once realpath('../..').'/dto/Cacaotero.php';

class FertilizacionDao implements IFertilizacionDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Fertilizacion en la base de datos.
     * @param fertilizacion objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($fertilizacion){
      $idFertilizacion=$fertilizacion->getIdFertilizacion();
$fecha=$fertilizacion->getFecha();
$idSuelo=$fertilizacion->getIdSuelo()->getIdSuelo();
$idFertilizante=$fertilizacion->getIdFertilizante()->getIdFertilizante();
$idCacaotero=$fertilizacion->getIdCacaotero()->getIdCacaotero();

      try {
          $sql= "INSERT INTO `fertilizacion`( `idFertilizacion`, `fecha`, `idSuelo`, `idFertilizante`, `idCacaotero`)"
          ."VALUES ('$idFertilizacion','$fecha','$idSuelo','$idFertilizante','$idCacaotero')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Fertilizacion en la base de datos.
     * @param fertilizacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($fertilizacion){
      $idFertilizacion=$fertilizacion->getIdFertilizacion();

      try {
          $sql= "SELECT `idFertilizacion`, `fecha`, `idSuelo`, `idFertilizante`, `idCacaotero`"
          ."FROM `fertilizacion`"
          ."WHERE `idFertilizacion`='$idFertilizacion'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $fertilizacion->setIdFertilizacion($data[$i]['idFertilizacion']);
          $fertilizacion->setFecha($data[$i]['fecha']);
           $suelo = new Suelo();
           $suelo->setIdSuelo($data[$i]['idSuelo']);
           $fertilizacion->setIdSuelo($suelo);
           $fertilizante = new Fertilizante();
           $fertilizante->setIdFertilizante($data[$i]['idFertilizante']);
           $fertilizacion->setIdFertilizante($fertilizante);
           $cacaotero = new Cacaotero();
           $cacaotero->setIdCacaotero($data[$i]['idCacaotero']);
           $fertilizacion->setIdCacaotero($cacaotero);

          }
      return $fertilizacion;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Fertilizacion en la base de datos.
     * @param fertilizacion objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($fertilizacion){
      $idFertilizacion=$fertilizacion->getIdFertilizacion();
$fecha=$fertilizacion->getFecha();
$idSuelo=$fertilizacion->getIdSuelo()->getIdSuelo();
$idFertilizante=$fertilizacion->getIdFertilizante()->getIdFertilizante();
$idCacaotero=$fertilizacion->getIdCacaotero()->getIdCacaotero();

      try {
          $sql= "UPDATE `fertilizacion` SET`idFertilizacion`='$idFertilizacion' ,`fecha`='$fecha' ,`idSuelo`='$idSuelo' ,`idFertilizante`='$idFertilizante' ,`idCacaotero`='$idCacaotero' WHERE `idFertilizacion`='$idFertilizacion'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Fertilizacion en la base de datos.
     * @param fertilizacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($fertilizacion){
      $idFertilizacion=$fertilizacion->getIdFertilizacion();

      try {
          $sql ="DELETE FROM `fertilizacion` WHERE `idFertilizacion`='$idFertilizacion'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Fertilizacion en la base de datos.
     * @return ArrayList<Fertilizacion> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idFertilizacion`, `fecha`, `idSuelo`, `idFertilizante`, `idCacaotero`"
          ."FROM `fertilizacion`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $fertilizacion= new Fertilizacion();
          $fertilizacion->setIdFertilizacion($data[$i]['idFertilizacion']);
          $fertilizacion->setFecha($data[$i]['fecha']);
           $suelo = new Suelo();
           $suelo->setIdSuelo($data[$i]['idSuelo']);
           $fertilizacion->setIdSuelo($suelo);
           $fertilizante = new Fertilizante();
           $fertilizante->setIdFertilizante($data[$i]['idFertilizante']);
           $fertilizacion->setIdFertilizante($fertilizante);
           $cacaotero = new Cacaotero();
           $cacaotero->setIdCacaotero($data[$i]['idCacaotero']);
           $fertilizacion->setIdCacaotero($cacaotero);

          array_push($lista,$fertilizacion);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

      public function insertarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $sentencia = null;
          return $this->cn->lastInsertId();
    }
      public function ejecutarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $data = $sentencia->fetchAll();
          $sentencia = null;
          return $data;
    }
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close(){
      $cn=null;
  }
}
//That´s all folks!