<?php
/*
              -------Creado por-------
             /(x.x )/ Anarchy /( x.x)/
              ------------------------
 */

//    Ella existió sólo en un sueño. Él es un poema que el poeta nunca escribió.  //

include_once realpath('../..').'/dao/interfaz/ICacaoteroDao.php';
include_once realpath('../..').'/dto/Cacaotero.php';

class CacaoteroDao implements ICacaoteroDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Cacaotero en la base de datos.
     * @param cacaotero objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($cacaotero){
      $idCacaotero=$cacaotero->getIdCacaotero();
$cargo=$cacaotero->getCargo();
$cedula=$cacaotero->getCedula();
$usuario=$cacaotero->getUsuario();
$contraseÃ±a=$cacaotero->getContraseÃ±a();

      try {
          $sql= "INSERT INTO `cacaotero`( `idCacaotero`, `cargo`, `cedula`, `usuario`, `contraseÃ±a`)"
          ."VALUES ('$idCacaotero','$cargo','$cedula','$usuario','$contraseÃ±a')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Cacaotero en la base de datos.
     * @param cacaotero objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($cacaotero){
      $idCacaotero=$cacaotero->getIdCacaotero();

      try {
          $sql= "SELECT `idCacaotero`, `cargo`, `cedula`, `usuario`, `contraseÃ±a`"
          ."FROM `cacaotero`"
          ."WHERE `idCacaotero`='$idCacaotero'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $cacaotero->setIdCacaotero($data[$i]['idCacaotero']);
          $cacaotero->setCargo($data[$i]['cargo']);
          $cacaotero->setCedula($data[$i]['cedula']);
          $cacaotero->setUsuario($data[$i]['usuario']);
          $cacaotero->setContraseÃ±a($data[$i]['contraseÃ±a']);

          }
      return $cacaotero;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Cacaotero en la base de datos.
     * @param cacaotero objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($cacaotero){
      $idCacaotero=$cacaotero->getIdCacaotero();
$cargo=$cacaotero->getCargo();
$cedula=$cacaotero->getCedula();
$usuario=$cacaotero->getUsuario();
$contraseÃ±a=$cacaotero->getContraseÃ±a();

      try {
          $sql= "UPDATE `cacaotero` SET`idCacaotero`='$idCacaotero' ,`cargo`='$cargo' ,`cedula`='$cedula' ,`usuario`='$usuario' ,`contraseÃ±a`='$contraseÃ±a' WHERE `idCacaotero`='$idCacaotero'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Cacaotero en la base de datos.
     * @param cacaotero objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($cacaotero){
      $idCacaotero=$cacaotero->getIdCacaotero();

      try {
          $sql ="DELETE FROM `cacaotero` WHERE `idCacaotero`='$idCacaotero'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Cacaotero en la base de datos.
     * @return ArrayList<Cacaotero> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idCacaotero`, `cargo`, `cedula`, `usuario`, `contraseÃ±a`"
          ."FROM `cacaotero`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $cacaotero= new Cacaotero();
          $cacaotero->setIdCacaotero($data[$i]['idCacaotero']);
          $cacaotero->setCargo($data[$i]['cargo']);
          $cacaotero->setCedula($data[$i]['cedula']);
          $cacaotero->setUsuario($data[$i]['usuario']);
          $cacaotero->setContraseÃ±a($data[$i]['contraseÃ±a']);

          array_push($lista,$cacaotero);
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