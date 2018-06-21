<?php
/*
              -------Creado por-------
             /(x.x )/ Anarchy /( x.x)/
              ------------------------
 */

//    ¿No es más sencillo hacer todo en el Main?  //

require_once realpath("../..").'/innerController/GlobalController.php';
require_once realpath("../..").'/dao/interfaz/IFactoryDao.php';
require_once realpath("../..").'/dto/Ingrediente.php';
require_once realpath("../..").'/dao/interfaz/IIngredienteDao.php';

class IngredienteController {

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
   * Crea un objeto Ingrediente a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idIngrediente
   * @param componente
   */
  public static function insert( $idIngrediente,  $componente){
      $ingrediente = new Ingrediente();
      $ingrediente->setIdIngrediente($idIngrediente); 
      $ingrediente->setComponente($componente); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ingredienteDao =$FactoryDao->getingredienteDao(self::getDataBaseDefault());
     $rtn = $ingredienteDao->insert($ingrediente);
     $ingredienteDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Ingrediente de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idIngrediente
   * @return El objeto en base de datos o Null
   */
  public static function select($idIngrediente){
      $ingrediente = new Ingrediente();
      $ingrediente->setIdIngrediente($idIngrediente); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ingredienteDao =$FactoryDao->getingredienteDao(self::getDataBaseDefault());
     $result = $ingredienteDao->select($ingrediente);
     $ingredienteDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Ingrediente  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idIngrediente
   * @param componente
   */
  public static function update($idIngrediente, $componente){
      $ingrediente = self::select($idIngrediente);
      $ingrediente->setComponente($componente); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ingredienteDao =$FactoryDao->getingredienteDao(self::getDataBaseDefault());
     $ingredienteDao->update($ingrediente);
     $ingredienteDao->close();
  }

  /**
   * Elimina un objeto Ingrediente de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idIngrediente
   */
  public static function delete($idIngrediente){
      $ingrediente = new Ingrediente();
      $ingrediente->setIdIngrediente($idIngrediente); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ingredienteDao =$FactoryDao->getingredienteDao(self::getDataBaseDefault());
     $ingredienteDao->delete($ingrediente);
     $ingredienteDao->close();
  }

  /**
   * Lista todos los objetos Ingrediente de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Ingrediente en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ingredienteDao =$FactoryDao->getingredienteDao(self::getDataBaseDefault());
     $result = $ingredienteDao->listAll();
     $ingredienteDao->close();
     return $result;
  }


}
//That´s all folks!