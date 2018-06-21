<?php
/*
              -------Creado por-------
             /(x.x )/ Anarchy /( x.x)/
              ------------------------
 */

//    Tranquilo, yo tampoco entiendo cómo funciona mi código  //

require_once realpath("../..").'/innerController/GlobalController.php';
require_once realpath("../..").'/dao/interfaz/IFactoryDao.php';
require_once realpath("../..").'/dto/Cacaotero_has_cultivo.php';
require_once realpath("../..").'/dao/interfaz/ICacaotero_has_cultivoDao.php';
require_once realpath("../..").'/dto/Cacaotero.php';
require_once realpath("../..").'/dto/Cultivo.php';

class Cacaotero_has_cultivoController {

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
   * Crea un objeto Cacaotero_has_cultivo a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cACAOTERO_idCACAOTERO
   * @param cULTIVO_idCULTIVO
   */
  public static function insert( $cACAOTERO_idCACAOTERO,  $cULTIVO_idCULTIVO){
      $cacaotero_has_cultivo = new Cacaotero_has_cultivo();
      $cacaotero_has_cultivo->setCACAOTERO_idCACAOTERO($cACAOTERO_idCACAOTERO); 
      $cacaotero_has_cultivo->setCULTIVO_idCULTIVO($cULTIVO_idCULTIVO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cacaotero_has_cultivoDao =$FactoryDao->getcacaotero_has_cultivoDao(self::getDataBaseDefault());
     $rtn = $cacaotero_has_cultivoDao->insert($cacaotero_has_cultivo);
     $cacaotero_has_cultivoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Cacaotero_has_cultivo de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cACAOTERO_idCACAOTERO
   * @param cULTIVO_idCULTIVO
   * @return El objeto en base de datos o Null
   */
  public static function select($cACAOTERO_idCACAOTERO, $cULTIVO_idCULTIVO){
      $cacaotero_has_cultivo = new Cacaotero_has_cultivo();
      $cacaotero_has_cultivo->setCACAOTERO_idCACAOTERO($cACAOTERO_idCACAOTERO); 
      $cacaotero_has_cultivo->setCULTIVO_idCULTIVO($cULTIVO_idCULTIVO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cacaotero_has_cultivoDao =$FactoryDao->getcacaotero_has_cultivoDao(self::getDataBaseDefault());
     $result = $cacaotero_has_cultivoDao->select($cacaotero_has_cultivo);
     $cacaotero_has_cultivoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Cacaotero_has_cultivo  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cACAOTERO_idCACAOTERO
   * @param cULTIVO_idCULTIVO
   */
  public static function update($cACAOTERO_idCACAOTERO, $cULTIVO_idCULTIVO){
      $cacaotero_has_cultivo = self::select($cACAOTERO_idCACAOTERO, $cULTIVO_idCULTIVO);

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cacaotero_has_cultivoDao =$FactoryDao->getcacaotero_has_cultivoDao(self::getDataBaseDefault());
     $cacaotero_has_cultivoDao->update($cacaotero_has_cultivo);
     $cacaotero_has_cultivoDao->close();
  }

  /**
   * Elimina un objeto Cacaotero_has_cultivo de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cACAOTERO_idCACAOTERO
   * @param cULTIVO_idCULTIVO
   */
  public static function delete($cACAOTERO_idCACAOTERO, $cULTIVO_idCULTIVO){
      $cacaotero_has_cultivo = new Cacaotero_has_cultivo();
      $cacaotero_has_cultivo->setCACAOTERO_idCACAOTERO($cACAOTERO_idCACAOTERO); 
      $cacaotero_has_cultivo->setCULTIVO_idCULTIVO($cULTIVO_idCULTIVO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cacaotero_has_cultivoDao =$FactoryDao->getcacaotero_has_cultivoDao(self::getDataBaseDefault());
     $cacaotero_has_cultivoDao->delete($cacaotero_has_cultivo);
     $cacaotero_has_cultivoDao->close();
  }

  /**
   * Lista todos los objetos Cacaotero_has_cultivo de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Cacaotero_has_cultivo en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cacaotero_has_cultivoDao =$FactoryDao->getcacaotero_has_cultivoDao(self::getDataBaseDefault());
     $result = $cacaotero_has_cultivoDao->listAll();
     $cacaotero_has_cultivoDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Cacaotero_has_cultivo de la base de datos a partir de CACAOTERO_idCACAOTERO.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cACAOTERO_idCACAOTERO
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByCACAOTERO_idCACAOTERO($cACAOTERO_idCACAOTERO){
      $cacaotero_has_cultivo = new Cacaotero_has_cultivo();
      $cacaotero_has_cultivo->setCACAOTERO_idCACAOTERO($cACAOTERO_idCACAOTERO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cacaotero_has_cultivoDao =$FactoryDao->getcacaotero_has_cultivoDao(self::getDataBaseDefault());
     $result = $cacaotero_has_cultivoDao->listByCACAOTERO_idCACAOTERO($cacaotero_has_cultivo);
     $cacaotero_has_cultivoDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Cacaotero_has_cultivo de la base de datos a partir de CULTIVO_idCULTIVO.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cULTIVO_idCULTIVO
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByCULTIVO_idCULTIVO($cULTIVO_idCULTIVO){
      $cacaotero_has_cultivo = new Cacaotero_has_cultivo();
      $cacaotero_has_cultivo->setCULTIVO_idCULTIVO($cULTIVO_idCULTIVO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cacaotero_has_cultivoDao =$FactoryDao->getcacaotero_has_cultivoDao(self::getDataBaseDefault());
     $result = $cacaotero_has_cultivoDao->listByCULTIVO_idCULTIVO($cacaotero_has_cultivo);
     $cacaotero_has_cultivoDao->close();
     return $result;
  }


}
//That´s all folks!