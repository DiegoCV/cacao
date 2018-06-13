<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es una frase de prueba ¿Quieres ver la de verdad? ( ?~ ?? ?°)  \\

include_once realpath('../..').'\dao\interfaz\ICosecha_has_cacaoteroDao.php';
include_once realpath('../..').'\dto\Cosecha_has_cacaotero.php';
include_once realpath('../..').'\dto\Cosecha.php';
include_once realpath('../..').'\dto\Cacaotero.php';

class Cosecha_has_cacaoteroDao implements ICosecha_has_cacaoteroDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Cosecha_has_cacaotero en la base de datos.
     * @param cosecha_has_cacaotero objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($cosecha_has_cacaotero){
      $cOSECHA_idCOSECHA=$cosecha_has_cacaotero->getCOSECHA_idCOSECHA()->getIdCOSECHA();
$cACAOTERO_idCACAOTERO=$cosecha_has_cacaotero->getCACAOTERO_idCACAOTERO()->getIdCacaotero();

      try {
          $sql= "INSERT INTO `cosecha_has_cacaotero`( `COSECHA_idCOSECHA`, `CACAOTERO_idCACAOTERO`)"
          ."VALUES ('$cOSECHA_idCOSECHA','$cACAOTERO_idCACAOTERO')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Cosecha_has_cacaotero en la base de datos.
     * @param cosecha_has_cacaotero objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($cosecha_has_cacaotero){
      $cOSECHA_idCOSECHA=$cosecha_has_cacaotero->getCOSECHA_idCOSECHA()->getIdCOSECHA();
$cACAOTERO_idCACAOTERO=$cosecha_has_cacaotero->getCACAOTERO_idCACAOTERO()->getIdCacaotero();

      try {
          $sql= "SELECT `COSECHA_idCOSECHA`, `CACAOTERO_idCACAOTERO`"
          ."FROM `cosecha_has_cacaotero`"
          ."WHERE `COSECHA_idCOSECHA`='$cOSECHA_idCOSECHA' AND`CACAOTERO_idCACAOTERO`='$cACAOTERO_idCACAOTERO'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $cosecha = new Cosecha();
           $cosecha->setIdCOSECHA($data[$i]['COSECHA_idCOSECHA']);
           $cosecha_has_cacaotero->setCOSECHA_idCOSECHA($cosecha);
           $cacaotero = new Cacaotero();
           $cacaotero->setIdCacaotero($data[$i]['CACAOTERO_idCACAOTERO']);
           $cosecha_has_cacaotero->setCACAOTERO_idCACAOTERO($cacaotero);

          }
      return $cosecha_has_cacaotero;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Cosecha_has_cacaotero en la base de datos.
     * @param cosecha_has_cacaotero objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($cosecha_has_cacaotero){
      $cOSECHA_idCOSECHA=$cosecha_has_cacaotero->getCOSECHA_idCOSECHA()->getIdCOSECHA();
$cACAOTERO_idCACAOTERO=$cosecha_has_cacaotero->getCACAOTERO_idCACAOTERO()->getIdCacaotero();

      try {
          $sql= "UPDATE `cosecha_has_cacaotero` SET`COSECHA_idCOSECHA`='$cOSECHA_idCOSECHA' ,`CACAOTERO_idCACAOTERO`='$cACAOTERO_idCACAOTERO' WHERE `COSECHA_idCOSECHA`='$cOSECHA_idCOSECHA' ,`CACAOTERO_idCACAOTERO`='$cACAOTERO_idCACAOTERO'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Cosecha_has_cacaotero en la base de datos.
     * @param cosecha_has_cacaotero objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($cosecha_has_cacaotero){
      $cOSECHA_idCOSECHA=$cosecha_has_cacaotero->getCOSECHA_idCOSECHA()->getIdCOSECHA();
$cACAOTERO_idCACAOTERO=$cosecha_has_cacaotero->getCACAOTERO_idCACAOTERO()->getIdCacaotero();

      try {
          $sql ="DELETE FROM `cosecha_has_cacaotero` WHERE `COSECHA_idCOSECHA`='$cOSECHA_idCOSECHA' AND`CACAOTERO_idCACAOTERO`='$cACAOTERO_idCACAOTERO'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Cosecha_has_cacaotero en la base de datos.
     * @return ArrayList<Cosecha_has_cacaotero> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `COSECHA_idCOSECHA`, `CACAOTERO_idCACAOTERO`"
          ."FROM `cosecha_has_cacaotero`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $cosecha_has_cacaotero= new Cosecha_has_cacaotero();
           $cosecha = new Cosecha();
           $cosecha->setIdCOSECHA($data[$i]['COSECHA_idCOSECHA']);
           $cosecha_has_cacaotero->setCOSECHA_idCOSECHA($cosecha);
           $cacaotero = new Cacaotero();
           $cacaotero->setIdCacaotero($data[$i]['CACAOTERO_idCACAOTERO']);
           $cosecha_has_cacaotero->setCACAOTERO_idCACAOTERO($cacaotero);

          array_push($lista,$cosecha_has_cacaotero);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Cosecha_has_cacaotero en la base de datos.
     * @param cosecha_has_cacaotero objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Cosecha_has_cacaotero> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByCOSECHA_idCOSECHA($cosecha_has_cacaotero){
      $lista = array();
      $cOSECHA_idCOSECHA=$cosecha_has_cacaotero->getCOSECHA_idCOSECHA()->getIdCOSECHA();

      try {
          $sql ="SELECT `COSECHA_idCOSECHA`, `CACAOTERO_idCACAOTERO`"
          ."FROM `cosecha_has_cacaotero`"
          ."WHERE `COSECHA_idCOSECHA`='$cOSECHA_idCOSECHA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $cosecha = new Cosecha();
           $cosecha->setIdCOSECHA($data[$i]['COSECHA_idCOSECHA']);
           $cosecha_has_cacaotero->setCOSECHA_idCOSECHA($cosecha);
           $cacaotero = new Cacaotero();
           $cacaotero->setIdCacaotero($data[$i]['CACAOTERO_idCACAOTERO']);
           $cosecha_has_cacaotero->setCACAOTERO_idCACAOTERO($cacaotero);

          array_push($lista,$cosecha_has_cacaotero);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Cosecha_has_cacaotero en la base de datos.
     * @param cosecha_has_cacaotero objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Cosecha_has_cacaotero> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByCACAOTERO_idCACAOTERO($cosecha_has_cacaotero){
      $lista = array();
      $cACAOTERO_idCACAOTERO=$cosecha_has_cacaotero->getCACAOTERO_idCACAOTERO()->getIdCacaotero();

      try {
          $sql ="SELECT `COSECHA_idCOSECHA`, `CACAOTERO_idCACAOTERO`"
          ."FROM `cosecha_has_cacaotero`"
          ."WHERE `CACAOTERO_idCACAOTERO`='$cACAOTERO_idCACAOTERO'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $cosecha = new Cosecha();
           $cosecha->setIdCOSECHA($data[$i]['COSECHA_idCOSECHA']);
           $cosecha_has_cacaotero->setCOSECHA_idCOSECHA($cosecha);
           $cacaotero = new Cacaotero();
           $cacaotero->setIdCacaotero($data[$i]['CACAOTERO_idCACAOTERO']);
           $cosecha_has_cacaotero->setCACAOTERO_idCACAOTERO($cacaotero);

          array_push($lista,$cosecha_has_cacaotero);
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