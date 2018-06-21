<?php
/*
              -------Creado por-------
             /(x.x )/ Anarchy /( x.x)/
              ------------------------
 */

//    Damos paso a la anarquía...  //

include_once realpath('../..').'/dao/interfaz/IIngredienteDao.php';
include_once realpath('../..').'/dto/Ingrediente.php';

class IngredienteDao implements IIngredienteDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Ingrediente en la base de datos.
     * @param ingrediente objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($ingrediente){
      $idIngrediente=$ingrediente->getIdIngrediente();
$componente=$ingrediente->getComponente();

      try {
          $sql= "INSERT INTO `ingrediente`( `idIngrediente`, `componente`)"
          ."VALUES ('$idIngrediente','$componente')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Ingrediente en la base de datos.
     * @param ingrediente objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($ingrediente){
      $idIngrediente=$ingrediente->getIdIngrediente();

      try {
          $sql= "SELECT `idIngrediente`, `componente`"
          ."FROM `ingrediente`"
          ."WHERE `idIngrediente`='$idIngrediente'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $ingrediente->setIdIngrediente($data[$i]['idIngrediente']);
          $ingrediente->setComponente($data[$i]['componente']);

          }
      return $ingrediente;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Ingrediente en la base de datos.
     * @param ingrediente objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($ingrediente){
      $idIngrediente=$ingrediente->getIdIngrediente();
$componente=$ingrediente->getComponente();

      try {
          $sql= "UPDATE `ingrediente` SET`idIngrediente`='$idIngrediente' ,`componente`='$componente' WHERE `idIngrediente`='$idIngrediente'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Ingrediente en la base de datos.
     * @param ingrediente objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($ingrediente){
      $idIngrediente=$ingrediente->getIdIngrediente();

      try {
          $sql ="DELETE FROM `ingrediente` WHERE `idIngrediente`='$idIngrediente'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Ingrediente en la base de datos.
     * @return ArrayList<Ingrediente> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idIngrediente`, `componente`"
          ."FROM `ingrediente`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $ingrediente= new Ingrediente();
          $ingrediente->setIdIngrediente($data[$i]['idIngrediente']);
          $ingrediente->setComponente($data[$i]['componente']);

          array_push($lista,$ingrediente);
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