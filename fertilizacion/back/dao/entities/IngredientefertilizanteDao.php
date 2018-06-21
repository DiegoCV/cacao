<?php
/*
              -------Creado por-------
             /(x.x )/ Anarchy /( x.x)/
              ------------------------
 */

//    Cuando eres Ingeniero en sistemas, pero tu vocación siempre fueron los memes  //

include_once realpath('../..').'/dao/interfaz/IIngredientefertilizanteDao.php';
include_once realpath('../..').'/dto/Ingredientefertilizante.php';
include_once realpath('../..').'/dto/Ingrediente.php';
include_once realpath('../..').'/dto/Fertilizante.php';

class IngredientefertilizanteDao implements IIngredientefertilizanteDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Ingredientefertilizante en la base de datos.
     * @param ingredientefertilizante objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($ingredientefertilizante){
      $idIngredienteFertilizante=$ingredientefertilizante->getIdIngredienteFertilizante();
$idIngrediente=$ingredientefertilizante->getIdIngrediente()->getIdIngrediente();
$idFertilizante=$ingredientefertilizante->getIdFertilizante()->getIdFertilizante();

      try {
          $sql= "INSERT INTO `ingredientefertilizante`( `idIngredienteFertilizante`, `idIngrediente`, `idFertilizante`)"
          ."VALUES ('$idIngredienteFertilizante','$idIngrediente','$idFertilizante')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Ingredientefertilizante en la base de datos.
     * @param ingredientefertilizante objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($ingredientefertilizante){
      $idIngredienteFertilizante=$ingredientefertilizante->getIdIngredienteFertilizante();

      try {
          $sql= "SELECT `idIngredienteFertilizante`, `idIngrediente`, `idFertilizante`"
          ."FROM `ingredientefertilizante`"
          ."WHERE `idIngredienteFertilizante`='$idIngredienteFertilizante'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $ingredientefertilizante->setIdIngredienteFertilizante($data[$i]['idIngredienteFertilizante']);
           $ingrediente = new Ingrediente();
           $ingrediente->setIdIngrediente($data[$i]['idIngrediente']);
           $ingredientefertilizante->setIdIngrediente($ingrediente);
           $fertilizante = new Fertilizante();
           $fertilizante->setIdFertilizante($data[$i]['idFertilizante']);
           $ingredientefertilizante->setIdFertilizante($fertilizante);

          }
      return $ingredientefertilizante;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Ingredientefertilizante en la base de datos.
     * @param ingredientefertilizante objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($ingredientefertilizante){
      $idIngredienteFertilizante=$ingredientefertilizante->getIdIngredienteFertilizante();
$idIngrediente=$ingredientefertilizante->getIdIngrediente()->getIdIngrediente();
$idFertilizante=$ingredientefertilizante->getIdFertilizante()->getIdFertilizante();

      try {
          $sql= "UPDATE `ingredientefertilizante` SET`idIngredienteFertilizante`='$idIngredienteFertilizante' ,`idIngrediente`='$idIngrediente' ,`idFertilizante`='$idFertilizante' WHERE `idIngredienteFertilizante`='$idIngredienteFertilizante'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Ingredientefertilizante en la base de datos.
     * @param ingredientefertilizante objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($ingredientefertilizante){
      $idIngredienteFertilizante=$ingredientefertilizante->getIdIngredienteFertilizante();

      try {
          $sql ="DELETE FROM `ingredientefertilizante` WHERE `idIngredienteFertilizante`='$idIngredienteFertilizante'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Ingredientefertilizante en la base de datos.
     * @return ArrayList<Ingredientefertilizante> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idIngredienteFertilizante`, `idIngrediente`, `idFertilizante`"
          ."FROM `ingredientefertilizante`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $ingredientefertilizante= new Ingredientefertilizante();
          $ingredientefertilizante->setIdIngredienteFertilizante($data[$i]['idIngredienteFertilizante']);
           $ingrediente = new Ingrediente();
           $ingrediente->setIdIngrediente($data[$i]['idIngrediente']);
           $ingredientefertilizante->setIdIngrediente($ingrediente);
           $fertilizante = new Fertilizante();
           $fertilizante->setIdFertilizante($data[$i]['idFertilizante']);
           $ingredientefertilizante->setIdFertilizante($fertilizante);

          array_push($lista,$ingredientefertilizante);
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