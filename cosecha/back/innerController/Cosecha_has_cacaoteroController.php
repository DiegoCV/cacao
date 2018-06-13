<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Se buscan memeros profesionales. Contacto: El benévolo señor Arciniegas  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Cosecha_has_cacaotero.php';
require_once realpath("../..").'\dao\interfaz\ICosecha_has_cacaoteroDao.php';
require_once realpath("../..").'\dto\Cosecha.php';
require_once realpath("../..").'\dto\Cacaotero.php';

class Cosecha_has_cacaoteroController {

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
   * Crea un objeto Cosecha_has_cacaotero a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cOSECHA_idCOSECHA
   * @param cACAOTERO_idCACAOTERO
   */
  public static function insert( $cOSECHA_idCOSECHA,  $cACAOTERO_idCACAOTERO){
      $cosecha_has_cacaotero = new Cosecha_has_cacaotero();
      $cosecha_has_cacaotero->setCOSECHA_idCOSECHA($cOSECHA_idCOSECHA); 
      $cosecha_has_cacaotero->setCACAOTERO_idCACAOTERO($cACAOTERO_idCACAOTERO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cosecha_has_cacaoteroDao =$FactoryDao->getcosecha_has_cacaoteroDao(self::getDataBaseDefault());
     $rtn = $cosecha_has_cacaoteroDao->insert($cosecha_has_cacaotero);
     $cosecha_has_cacaoteroDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Cosecha_has_cacaotero de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cOSECHA_idCOSECHA
   * @param cACAOTERO_idCACAOTERO
   * @return El objeto en base de datos o Null
   */
  public static function select($cOSECHA_idCOSECHA, $cACAOTERO_idCACAOTERO){
      $cosecha_has_cacaotero = new Cosecha_has_cacaotero();
      $cosecha_has_cacaotero->setCOSECHA_idCOSECHA($cOSECHA_idCOSECHA); 
      $cosecha_has_cacaotero->setCACAOTERO_idCACAOTERO($cACAOTERO_idCACAOTERO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cosecha_has_cacaoteroDao =$FactoryDao->getcosecha_has_cacaoteroDao(self::getDataBaseDefault());
     $result = $cosecha_has_cacaoteroDao->select($cosecha_has_cacaotero);
     $cosecha_has_cacaoteroDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Cosecha_has_cacaotero  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cOSECHA_idCOSECHA
   * @param cACAOTERO_idCACAOTERO
   */
  public static function update($cOSECHA_idCOSECHA, $cACAOTERO_idCACAOTERO){
      $cosecha_has_cacaotero = self::select($cOSECHA_idCOSECHA, $cACAOTERO_idCACAOTERO);

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cosecha_has_cacaoteroDao =$FactoryDao->getcosecha_has_cacaoteroDao(self::getDataBaseDefault());
     $cosecha_has_cacaoteroDao->update($cosecha_has_cacaotero);
     $cosecha_has_cacaoteroDao->close();
  }

  /**
   * Elimina un objeto Cosecha_has_cacaotero de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cOSECHA_idCOSECHA
   * @param cACAOTERO_idCACAOTERO
   */
  public static function delete($cOSECHA_idCOSECHA, $cACAOTERO_idCACAOTERO){
      $cosecha_has_cacaotero = new Cosecha_has_cacaotero();
      $cosecha_has_cacaotero->setCOSECHA_idCOSECHA($cOSECHA_idCOSECHA); 
      $cosecha_has_cacaotero->setCACAOTERO_idCACAOTERO($cACAOTERO_idCACAOTERO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cosecha_has_cacaoteroDao =$FactoryDao->getcosecha_has_cacaoteroDao(self::getDataBaseDefault());
     $cosecha_has_cacaoteroDao->delete($cosecha_has_cacaotero);
     $cosecha_has_cacaoteroDao->close();
  }

  /**
   * Lista todos los objetos Cosecha_has_cacaotero de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Cosecha_has_cacaotero en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cosecha_has_cacaoteroDao =$FactoryDao->getcosecha_has_cacaoteroDao(self::getDataBaseDefault());
     $result = $cosecha_has_cacaoteroDao->listAll();
     $cosecha_has_cacaoteroDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Cosecha_has_cacaotero de la base de datos a partir de COSECHA_idCOSECHA.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cOSECHA_idCOSECHA
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByCOSECHA_idCOSECHA($cOSECHA_idCOSECHA){
      $cosecha_has_cacaotero = new Cosecha_has_cacaotero();
      $cosecha_has_cacaotero->setCOSECHA_idCOSECHA($cOSECHA_idCOSECHA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cosecha_has_cacaoteroDao =$FactoryDao->getcosecha_has_cacaoteroDao(self::getDataBaseDefault());
     $result = $cosecha_has_cacaoteroDao->listByCOSECHA_idCOSECHA($cosecha_has_cacaotero);
     $cosecha_has_cacaoteroDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Cosecha_has_cacaotero de la base de datos a partir de CACAOTERO_idCACAOTERO.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cACAOTERO_idCACAOTERO
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByCACAOTERO_idCACAOTERO($cACAOTERO_idCACAOTERO){
      $cosecha_has_cacaotero = new Cosecha_has_cacaotero();
      $cosecha_has_cacaotero->setCACAOTERO_idCACAOTERO($cACAOTERO_idCACAOTERO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cosecha_has_cacaoteroDao =$FactoryDao->getcosecha_has_cacaoteroDao(self::getDataBaseDefault());
     $result = $cosecha_has_cacaoteroDao->listByCACAOTERO_idCACAOTERO($cosecha_has_cacaotero);
     $cosecha_has_cacaoteroDao->close();
     return $result;
  }


}
//That´s all folks!