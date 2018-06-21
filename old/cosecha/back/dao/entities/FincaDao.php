<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Proletarios del mundo ¡Uníos!  \\

include_once realpath('../..').'\dao\interfaz\IFincaDao.php';
include_once realpath('../..').'\dto\Finca.php';
include_once realpath('../..').'\dto\Administrador.php';

class FincaDao implements IFincaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Finca en la base de datos.
     * @param finca objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($finca){
      $idFinca=$finca->getIdFinca();
$nombre=$finca->getNombre();
$dueÃ±o=$finca->getDueÃ±o();
$aDMINISTRADOR_id_ADMINISTRADOR=$finca->getADMINISTRADOR_id_ADMINISTRADOR()->getId_ADMINISTRADOR();

      try {
          $sql= "INSERT INTO `finca`( `idFinca`, `nombre`, `dueÃ±o`, `ADMINISTRADOR_id_ADMINISTRADOR`)"
          ."VALUES ('$idFinca','$nombre','$dueÃ±o','$aDMINISTRADOR_id_ADMINISTRADOR')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Finca en la base de datos.
     * @param finca objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($finca){
      $idFinca=$finca->getIdFinca();

      try {
          $sql= "SELECT `idFinca`, `nombre`, `dueÃ±o`, `ADMINISTRADOR_id_ADMINISTRADOR`"
          ."FROM `finca`"
          ."WHERE `idFinca`='$idFinca'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $finca->setIdFinca($data[$i]['idFinca']);
          $finca->setNombre($data[$i]['nombre']);
          $finca->setDueÃ±o($data[$i]['dueÃ±o']);
           $administrador = new Administrador();
           $administrador->setId_ADMINISTRADOR($data[$i]['ADMINISTRADOR_id_ADMINISTRADOR']);
           $finca->setADMINISTRADOR_id_ADMINISTRADOR($administrador);

          }
      return $finca;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Finca en la base de datos.
     * @param finca objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($finca){
      $idFinca=$finca->getIdFinca();
$nombre=$finca->getNombre();
$dueÃ±o=$finca->getDueÃ±o();
$aDMINISTRADOR_id_ADMINISTRADOR=$finca->getADMINISTRADOR_id_ADMINISTRADOR()->getId_ADMINISTRADOR();

      try {
          $sql= "UPDATE `finca` SET`idFinca`='$idFinca' ,`nombre`='$nombre' ,`dueÃ±o`='$dueÃ±o' ,`ADMINISTRADOR_id_ADMINISTRADOR`='$aDMINISTRADOR_id_ADMINISTRADOR' WHERE `idFinca`='$idFinca'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Finca en la base de datos.
     * @param finca objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($finca){
      $idFinca=$finca->getIdFinca();

      try {
          $sql ="DELETE FROM `finca` WHERE `idFinca`='$idFinca'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Finca en la base de datos.
     * @return ArrayList<Finca> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idFinca`, `nombre`, `dueÃ±o`, `ADMINISTRADOR_id_ADMINISTRADOR`"
          ."FROM `finca`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $finca= new Finca();
          $finca->setIdFinca($data[$i]['idFinca']);
          $finca->setNombre($data[$i]['nombre']);
          $finca->setDueÃ±o($data[$i]['dueÃ±o']);
           $administrador = new Administrador();
           $administrador->setId_ADMINISTRADOR($data[$i]['ADMINISTRADOR_id_ADMINISTRADOR']);
           $finca->setADMINISTRADOR_id_ADMINISTRADOR($administrador);

          array_push($lista,$finca);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

  public function listByAdmin($id){
      $lista = array();
      try {
          $sql ="SELECT `idFinca`, `nombre`, `dueÃ±o`, `ADMINISTRADOR_id_ADMINISTRADOR`"
          ."FROM `finca`"
          ."WHERE ADMINISTRADOR_id_ADMINISTRADOR=$id";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $finca= new Finca();
          $finca->setIdFinca($data[$i]['idFinca']);
          $finca->setNombre($data[$i]['nombre']);
          $finca->setDueÃ±o($data[$i]['dueÃ±o']);
           $administrador = new Administrador();
           $administrador->setId_ADMINISTRADOR($data[$i]['ADMINISTRADOR_id_ADMINISTRADOR']);
           $finca->setADMINISTRADOR_id_ADMINISTRADOR($administrador);

          array_push($lista,$finca);
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