<?php
/*
              -------Creado por-------
             /(x.x )/ Anarchy /( x.x)/
              ------------------------
 */

//    Quédate con quien te quiera por tu back-end, no por tu front-end  //

include_once realpath('../..').'/dao/interfaz/IFertilizanteDao.php';
include_once realpath('../..').'/dto/Fertilizante.php';

class FertilizanteDao implements IFertilizanteDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Fertilizante en la base de datos.
     * @param fertilizante objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($fertilizante){
      $idFertilizante=$fertilizante->getIdFertilizante();
$nombre=$fertilizante->getNombre();
$cantidad=$fertilizante->getCantidad();
$tipo=$fertilizante->getTipo();

      try {
          $sql= "INSERT INTO `fertilizante`( `idFertilizante`, `nombre`, `cantidad`, `tipo`)"
          ."VALUES ('$idFertilizante','$nombre','$cantidad','$tipo')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Fertilizante en la base de datos.
     * @param fertilizante objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($fertilizante){
      $idFertilizante=$fertilizante->getIdFertilizante();

      try {
          $sql= "SELECT `idFertilizante`, `nombre`, `cantidad`, `tipo`"
          ."FROM `fertilizante`"
          ."WHERE `idFertilizante`='$idFertilizante'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $fertilizante->setIdFertilizante($data[$i]['idFertilizante']);
          $fertilizante->setNombre($data[$i]['nombre']);
          $fertilizante->setCantidad($data[$i]['cantidad']);
          $fertilizante->setTipo($data[$i]['tipo']);

          }
      return $fertilizante;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Fertilizante en la base de datos.
     * @param fertilizante objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($fertilizante){
      $idFertilizante=$fertilizante->getIdFertilizante();
$nombre=$fertilizante->getNombre();
$cantidad=$fertilizante->getCantidad();
$tipo=$fertilizante->getTipo();

      try {
          $sql= "UPDATE `fertilizante` SET`idFertilizante`='$idFertilizante' ,`nombre`='$nombre' ,`cantidad`='$cantidad' ,`tipo`='$tipo' WHERE `idFertilizante`='$idFertilizante'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Fertilizante en la base de datos.
     * @param fertilizante objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($fertilizante){
      $idFertilizante=$fertilizante->getIdFertilizante();

      try {
          $sql ="DELETE FROM `fertilizante` WHERE `idFertilizante`='$idFertilizante'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Fertilizante en la base de datos.
     * @return ArrayList<Fertilizante> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idFertilizante`, `nombre`, `cantidad`, `tipo`"
          ."FROM `fertilizante`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $fertilizante= new Fertilizante();
          $fertilizante->setIdFertilizante($data[$i]['idFertilizante']);
          $fertilizante->setNombre($data[$i]['nombre']);
          $fertilizante->setCantidad($data[$i]['cantidad']);
          $fertilizante->setTipo($data[$i]['tipo']);

          array_push($lista,$fertilizante);
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