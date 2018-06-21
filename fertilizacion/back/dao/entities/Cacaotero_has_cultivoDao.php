<?php
/*
              -------Creado por-------
             /(x.x )/ Anarchy /( x.x)/
              ------------------------
 */

//    Lolita, luz de mi vida, fuego de mis entrañas. Pecado mío, alma mía.  //

include_once realpath('../..').'/dao/interfaz/ICacaotero_has_cultivoDao.php';
include_once realpath('../..').'/dto/Cacaotero_has_cultivo.php';
include_once realpath('../..').'/dto/Cacaotero.php';
include_once realpath('../..').'/dto/Cultivo.php';

class Cacaotero_has_cultivoDao implements ICacaotero_has_cultivoDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Cacaotero_has_cultivo en la base de datos.
     * @param cacaotero_has_cultivo objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($cacaotero_has_cultivo){
      $cACAOTERO_idCACAOTERO=$cacaotero_has_cultivo->getCACAOTERO_idCACAOTERO()->getIdCacaotero();
$cULTIVO_idCULTIVO=$cacaotero_has_cultivo->getCULTIVO_idCULTIVO()->getIdCULTIVO();

      try {
          $sql= "INSERT INTO `cacaotero_has_cultivo`( `CACAOTERO_idCACAOTERO`, `CULTIVO_idCULTIVO`)"
          ."VALUES ('$cACAOTERO_idCACAOTERO','$cULTIVO_idCULTIVO')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Cacaotero_has_cultivo en la base de datos.
     * @param cacaotero_has_cultivo objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($cacaotero_has_cultivo){
      $cACAOTERO_idCACAOTERO=$cacaotero_has_cultivo->getCACAOTERO_idCACAOTERO()->getIdCacaotero();
$cULTIVO_idCULTIVO=$cacaotero_has_cultivo->getCULTIVO_idCULTIVO()->getIdCULTIVO();

      try {
          $sql= "SELECT `CACAOTERO_idCACAOTERO`, `CULTIVO_idCULTIVO`"
          ."FROM `cacaotero_has_cultivo`"
          ."WHERE `CACAOTERO_idCACAOTERO`='$cACAOTERO_idCACAOTERO' AND`CULTIVO_idCULTIVO`='$cULTIVO_idCULTIVO'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $cacaotero = new Cacaotero();
           $cacaotero->setIdCacaotero($data[$i]['CACAOTERO_idCACAOTERO']);
           $cacaotero_has_cultivo->setCACAOTERO_idCACAOTERO($cacaotero);
           $cultivo = new Cultivo();
           $cultivo->setIdCULTIVO($data[$i]['CULTIVO_idCULTIVO']);
           $cacaotero_has_cultivo->setCULTIVO_idCULTIVO($cultivo);

          }
      return $cacaotero_has_cultivo;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Cacaotero_has_cultivo en la base de datos.
     * @param cacaotero_has_cultivo objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($cacaotero_has_cultivo){
      $cACAOTERO_idCACAOTERO=$cacaotero_has_cultivo->getCACAOTERO_idCACAOTERO()->getIdCacaotero();
$cULTIVO_idCULTIVO=$cacaotero_has_cultivo->getCULTIVO_idCULTIVO()->getIdCULTIVO();

      try {
          $sql= "UPDATE `cacaotero_has_cultivo` SET`CACAOTERO_idCACAOTERO`='$cACAOTERO_idCACAOTERO' ,`CULTIVO_idCULTIVO`='$cULTIVO_idCULTIVO' WHERE `CACAOTERO_idCACAOTERO`='$cACAOTERO_idCACAOTERO' ,`CULTIVO_idCULTIVO`='$cULTIVO_idCULTIVO'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Cacaotero_has_cultivo en la base de datos.
     * @param cacaotero_has_cultivo objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($cacaotero_has_cultivo){
      $cACAOTERO_idCACAOTERO=$cacaotero_has_cultivo->getCACAOTERO_idCACAOTERO()->getIdCacaotero();
$cULTIVO_idCULTIVO=$cacaotero_has_cultivo->getCULTIVO_idCULTIVO()->getIdCULTIVO();

      try {
          $sql ="DELETE FROM `cacaotero_has_cultivo` WHERE `CACAOTERO_idCACAOTERO`='$cACAOTERO_idCACAOTERO' AND`CULTIVO_idCULTIVO`='$cULTIVO_idCULTIVO'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Cacaotero_has_cultivo en la base de datos.
     * @return ArrayList<Cacaotero_has_cultivo> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `CACAOTERO_idCACAOTERO`, `CULTIVO_idCULTIVO`"
          ."FROM `cacaotero_has_cultivo`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $cacaotero_has_cultivo= new Cacaotero_has_cultivo();
           $cacaotero = new Cacaotero();
           $cacaotero->setIdCacaotero($data[$i]['CACAOTERO_idCACAOTERO']);
           $cacaotero_has_cultivo->setCACAOTERO_idCACAOTERO($cacaotero);
           $cultivo = new Cultivo();
           $cultivo->setIdCULTIVO($data[$i]['CULTIVO_idCULTIVO']);
           $cacaotero_has_cultivo->setCULTIVO_idCULTIVO($cultivo);

          array_push($lista,$cacaotero_has_cultivo);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Cacaotero_has_cultivo en la base de datos.
     * @param cacaotero_has_cultivo objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Cacaotero_has_cultivo> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByCACAOTERO_idCACAOTERO($cacaotero_has_cultivo){
      $lista = array();
      $cACAOTERO_idCACAOTERO=$cacaotero_has_cultivo->getCACAOTERO_idCACAOTERO()->getIdCacaotero();

      try {
          $sql ="SELECT `CACAOTERO_idCACAOTERO`, `CULTIVO_idCULTIVO`"
          ."FROM `cacaotero_has_cultivo`"
          ."WHERE `CACAOTERO_idCACAOTERO`='$cACAOTERO_idCACAOTERO'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $cacaotero = new Cacaotero();
           $cacaotero->setIdCacaotero($data[$i]['CACAOTERO_idCACAOTERO']);
           $cacaotero_has_cultivo->setCACAOTERO_idCACAOTERO($cacaotero);
           $cultivo = new Cultivo();
           $cultivo->setIdCULTIVO($data[$i]['CULTIVO_idCULTIVO']);
           $cacaotero_has_cultivo->setCULTIVO_idCULTIVO($cultivo);

          array_push($lista,$cacaotero_has_cultivo);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Cacaotero_has_cultivo en la base de datos.
     * @param cacaotero_has_cultivo objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Cacaotero_has_cultivo> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByCULTIVO_idCULTIVO($cacaotero_has_cultivo){
      $lista = array();
      $cULTIVO_idCULTIVO=$cacaotero_has_cultivo->getCULTIVO_idCULTIVO()->getIdCULTIVO();

      try {
          $sql ="SELECT `CACAOTERO_idCACAOTERO`, `CULTIVO_idCULTIVO`"
          ."FROM `cacaotero_has_cultivo`"
          ."WHERE `CULTIVO_idCULTIVO`='$cULTIVO_idCULTIVO'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $cacaotero = new Cacaotero();
           $cacaotero->setIdCacaotero($data[$i]['CACAOTERO_idCACAOTERO']);
           $cacaotero_has_cultivo->setCACAOTERO_idCACAOTERO($cacaotero);
           $cultivo = new Cultivo();
           $cultivo->setIdCULTIVO($data[$i]['CULTIVO_idCULTIVO']);
           $cacaotero_has_cultivo->setCULTIVO_idCULTIVO($cultivo);

          array_push($lista,$cacaotero_has_cultivo);
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