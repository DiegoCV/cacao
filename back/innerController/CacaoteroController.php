<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ahora con 25% menos groserías  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Cacaotero.php';
require_once realpath("../..").'\dao\interfaz\ICacaoteroDao.php';

class CacaoteroController {

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
   * Crea un objeto Cacaotero a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCacaotero
   * @param cargo
   * @param cedula
   * @param usuario
   * @param contraseÃ±a
   */
  public static function insert( $idCacaotero,  $cargo,  $cedula,  $usuario,  $contraseÃ±a){
      $cacaotero = new Cacaotero();
      $cacaotero->setIdCacaotero($idCacaotero); 
      $cacaotero->setCargo($cargo); 
      $cacaotero->setCedula($cedula); 
      $cacaotero->setUsuario($usuario); 
      $cacaotero->setContraseÃ±a($contraseÃ±a); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cacaoteroDao =$FactoryDao->getcacaoteroDao(self::getDataBaseDefault());
     $rtn = $cacaoteroDao->insert($cacaotero);
     $cacaoteroDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Cacaotero de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCacaotero
   * @return El objeto en base de datos o Null
   */
  public static function select($idCacaotero){
      $cacaotero = new Cacaotero();
      $cacaotero->setIdCacaotero($idCacaotero); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cacaoteroDao =$FactoryDao->getcacaoteroDao(self::getDataBaseDefault());
     $result = $cacaoteroDao->select($cacaotero);
     $cacaoteroDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Cacaotero  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCacaotero
   * @param cargo
   * @param cedula
   * @param usuario
   * @param contraseÃ±a
   */
  public static function update($idCacaotero, $cargo, $cedula, $usuario, $contraseÃ±a){
      $cacaotero = self::select($idCacaotero);
      $cacaotero->setCargo($cargo); 
      $cacaotero->setCedula($cedula); 
      $cacaotero->setUsuario($usuario); 
      $cacaotero->setContraseÃ±a($contraseÃ±a); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cacaoteroDao =$FactoryDao->getcacaoteroDao(self::getDataBaseDefault());
     $cacaoteroDao->update($cacaotero);
     $cacaoteroDao->close();
  }

  /**
   * Elimina un objeto Cacaotero de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCacaotero
   */
  public static function delete($idCacaotero){
      $cacaotero = new Cacaotero();
      $cacaotero->setIdCacaotero($idCacaotero); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cacaoteroDao =$FactoryDao->getcacaoteroDao(self::getDataBaseDefault());
     $cacaoteroDao->delete($cacaotero);
     $cacaoteroDao->close();
  }

  /**
   * Lista todos los objetos Cacaotero de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Cacaotero en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cacaoteroDao =$FactoryDao->getcacaoteroDao(self::getDataBaseDefault());
     $result = $cacaoteroDao->listAll();
     $cacaoteroDao->close();
     return $result;
  }


}
//That´s all folks!