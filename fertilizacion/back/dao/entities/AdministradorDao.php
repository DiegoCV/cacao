<?php
/*
              -------Creado por-------
             /(x.x )/ Anarchy /( x.x)/
              ------------------------
 */

//    NEVERMORE  //

include_once realpath('../..').'/dao/interfaz/IAdministradorDao.php';
include_once realpath('../..').'/dto/Administrador.php';

class AdministradorDao implements IAdministradorDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Administrador en la base de datos.
     * @param administrador objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($administrador){
      $id_ADMINISTRADOR=$administrador->getId_ADMINISTRADOR();
$aDMINISTRADOR_NOMBRE=$administrador->getADMINISTRADOR_NOMBRE();
$aDMINISTRADOR_APELLIDO=$administrador->getADMINISTRADOR_APELLIDO();
$aDMINISTRADOR_USER=$administrador->getADMINISTRADOR_USER();
$aDMINISTRADOR_PASS=$administrador->getADMINISTRADOR_PASS();

      try {
          $sql= "INSERT INTO `administrador`( `id_ADMINISTRADOR`, `ADMINISTRADOR_NOMBRE`, `ADMINISTRADOR_APELLIDO`, `ADMINISTRADOR_USER`, `ADMINISTRADOR_PASS`)"
          ."VALUES ('$id_ADMINISTRADOR','$aDMINISTRADOR_NOMBRE','$aDMINISTRADOR_APELLIDO','$aDMINISTRADOR_USER','$aDMINISTRADOR_PASS')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Administrador en la base de datos.
     * @param administrador objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($administrador){
      $id_ADMINISTRADOR=$administrador->getId_ADMINISTRADOR();

      try {
          $sql= "SELECT `id_ADMINISTRADOR`, `ADMINISTRADOR_NOMBRE`, `ADMINISTRADOR_APELLIDO`, `ADMINISTRADOR_USER`, `ADMINISTRADOR_PASS`"
          ."FROM `administrador`"
          ."WHERE `id_ADMINISTRADOR`='$id_ADMINISTRADOR'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $administrador->setId_ADMINISTRADOR($data[$i]['id_ADMINISTRADOR']);
          $administrador->setADMINISTRADOR_NOMBRE($data[$i]['ADMINISTRADOR_NOMBRE']);
          $administrador->setADMINISTRADOR_APELLIDO($data[$i]['ADMINISTRADOR_APELLIDO']);
          $administrador->setADMINISTRADOR_USER($data[$i]['ADMINISTRADOR_USER']);
          $administrador->setADMINISTRADOR_PASS($data[$i]['ADMINISTRADOR_PASS']);

          }
      return $administrador;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Administrador en la base de datos.
     * @param administrador objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($administrador){
      $id_ADMINISTRADOR=$administrador->getId_ADMINISTRADOR();
$aDMINISTRADOR_NOMBRE=$administrador->getADMINISTRADOR_NOMBRE();
$aDMINISTRADOR_APELLIDO=$administrador->getADMINISTRADOR_APELLIDO();
$aDMINISTRADOR_USER=$administrador->getADMINISTRADOR_USER();
$aDMINISTRADOR_PASS=$administrador->getADMINISTRADOR_PASS();

      try {
          $sql= "UPDATE `administrador` SET`id_ADMINISTRADOR`='$id_ADMINISTRADOR' ,`ADMINISTRADOR_NOMBRE`='$aDMINISTRADOR_NOMBRE' ,`ADMINISTRADOR_APELLIDO`='$aDMINISTRADOR_APELLIDO' ,`ADMINISTRADOR_USER`='$aDMINISTRADOR_USER' ,`ADMINISTRADOR_PASS`='$aDMINISTRADOR_PASS' WHERE `id_ADMINISTRADOR`='$id_ADMINISTRADOR'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Administrador en la base de datos.
     * @param administrador objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($administrador){
      $id_ADMINISTRADOR=$administrador->getId_ADMINISTRADOR();

      try {
          $sql ="DELETE FROM `administrador` WHERE `id_ADMINISTRADOR`='$id_ADMINISTRADOR'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Administrador en la base de datos.
     * @return ArrayList<Administrador> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id_ADMINISTRADOR`, `ADMINISTRADOR_NOMBRE`, `ADMINISTRADOR_APELLIDO`, `ADMINISTRADOR_USER`, `ADMINISTRADOR_PASS`"
          ."FROM `administrador`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $administrador= new Administrador();
          $administrador->setId_ADMINISTRADOR($data[$i]['id_ADMINISTRADOR']);
          $administrador->setADMINISTRADOR_NOMBRE($data[$i]['ADMINISTRADOR_NOMBRE']);
          $administrador->setADMINISTRADOR_APELLIDO($data[$i]['ADMINISTRADOR_APELLIDO']);
          $administrador->setADMINISTRADOR_USER($data[$i]['ADMINISTRADOR_USER']);
          $administrador->setADMINISTRADOR_PASS($data[$i]['ADMINISTRADOR_PASS']);

          array_push($lista,$administrador);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Administrador en la base de datos.
     * @param administrador objeto con los atributos de inicio de sesión
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function login($administrador){
      $aDMINISTRADOR_USER=$administrador->getADMINISTRADOR_USER();
$aDMINISTRADOR_PASS=$administrador->getADMINISTRADOR_PASS();

      $administrador = new Administrador();
      try {
          $sql= "SELECT `id_ADMINISTRADOR`, `ADMINISTRADOR_NOMBRE`, `ADMINISTRADOR_APELLIDO`, `ADMINISTRADOR_USER`, `ADMINISTRADOR_PASS`"
          ."FROM `administrador`"
          ."WHERE `ADMINISTRADOR_USER`='$aDMINISTRADOR_USER' AND`ADMINISTRADOR_PASS`='$aDMINISTRADOR_PASS'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $administrador->setId_ADMINISTRADOR($data[$i]['id_ADMINISTRADOR']);
          $administrador->setADMINISTRADOR_NOMBRE($data[$i]['ADMINISTRADOR_NOMBRE']);
          $administrador->setADMINISTRADOR_APELLIDO($data[$i]['ADMINISTRADOR_APELLIDO']);
          $administrador->setADMINISTRADOR_USER($data[$i]['ADMINISTRADOR_USER']);
          $administrador->setADMINISTRADOR_PASS($data[$i]['ADMINISTRADOR_PASS']);

      return $administrador;
          }
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