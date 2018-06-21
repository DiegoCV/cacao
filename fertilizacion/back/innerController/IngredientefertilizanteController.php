<?php
/*
              -------Creado por-------
             /(x.x )/ Anarchy /( x.x)/
              ------------------------
 */

//    Y pensar que Anarchy está hecho en código espagueti...  //

require_once realpath("../..").'/innerController/GlobalController.php';
require_once realpath("../..").'/dao/interfaz/IFactoryDao.php';
require_once realpath("../..").'/dto/Ingredientefertilizante.php';
require_once realpath("../..").'/dao/interfaz/IIngredientefertilizanteDao.php';
require_once realpath("../..").'/dto/Ingrediente.php';
require_once realpath("../..").'/dto/Fertilizante.php';

class IngredientefertilizanteController {

  /**
   * Para su comodidad, defina aquí el gestor de conexión predilecto para esta entidad
   * @return idGestor Devuelve el identificador del gestor de conexión
   */
  private static function getGestorDefault(){
      return DEFAULT_GESTOR;
  }
  /**
   * Para su comodidad, defina aquí el nombre de base de datos predilecto para esta entidad
   * @return dbName Devuelve el nombre de la base de datos a emplear
   */
  private static function getDataBaseDefault(){
      return DEFAULT_DBNAME;
  }
  /**
   * Crea un objeto Ingredientefertilizante a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idIngredienteFertilizante
   * @param idIngrediente
   * @param idFertilizante
   */
  public static function insert( $idIngredienteFertilizante,  $idIngrediente,  $idFertilizante){
      $ingredientefertilizante = new Ingredientefertilizante();
      $ingredientefertilizante->setIdIngredienteFertilizante($idIngredienteFertilizante); 
      $ingredientefertilizante->setIdIngrediente($idIngrediente); 
      $ingredientefertilizante->setIdFertilizante($idFertilizante); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ingredientefertilizanteDao =$FactoryDao->getingredientefertilizanteDao(self::getDataBaseDefault());
     $rtn = $ingredientefertilizanteDao->insert($ingredientefertilizante);
     $ingredientefertilizanteDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Ingredientefertilizante de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idIngredienteFertilizante
   * @return El objeto en base de datos o Null
   */
  public static function select($idIngredienteFertilizante){
      $ingredientefertilizante = new Ingredientefertilizante();
      $ingredientefertilizante->setIdIngredienteFertilizante($idIngredienteFertilizante); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ingredientefertilizanteDao =$FactoryDao->getingredientefertilizanteDao(self::getDataBaseDefault());
     $result = $ingredientefertilizanteDao->select($ingredientefertilizante);
     $ingredientefertilizanteDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Ingredientefertilizante  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idIngredienteFertilizante
   * @param idIngrediente
   * @param idFertilizante
   */
  public static function update($idIngredienteFertilizante, $idIngrediente, $idFertilizante){
      $ingredientefertilizante = self::select($idIngredienteFertilizante);
      $ingredientefertilizante->setIdIngrediente($idIngrediente); 
      $ingredientefertilizante->setIdFertilizante($idFertilizante); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ingredientefertilizanteDao =$FactoryDao->getingredientefertilizanteDao(self::getDataBaseDefault());
     $ingredientefertilizanteDao->update($ingredientefertilizante);
     $ingredientefertilizanteDao->close();
  }

  /**
   * Elimina un objeto Ingredientefertilizante de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idIngredienteFertilizante
   */
  public static function delete($idIngredienteFertilizante){
      $ingredientefertilizante = new Ingredientefertilizante();
      $ingredientefertilizante->setIdIngredienteFertilizante($idIngredienteFertilizante); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ingredientefertilizanteDao =$FactoryDao->getingredientefertilizanteDao(self::getDataBaseDefault());
     $ingredientefertilizanteDao->delete($ingredientefertilizante);
     $ingredientefertilizanteDao->close();
  }

  /**
   * Lista todos los objetos Ingredientefertilizante de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Ingredientefertilizante en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ingredientefertilizanteDao =$FactoryDao->getingredientefertilizanteDao(self::getDataBaseDefault());
     $result = $ingredientefertilizanteDao->listAll();
     $ingredientefertilizanteDao->close();
     return $result;
  }


}
//That´s all folks!