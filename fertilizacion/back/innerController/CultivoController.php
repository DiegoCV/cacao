<?php
/*
              -------Creado por-------
             /(x.x )/ Anarchy /( x.x)/
              ------------------------
 */

//    ¿En serio? ¿Tantos buenos frameworks y estás usando Anarchy?  //

require_once realpath("../..").'/innerController/GlobalController.php';
require_once realpath("../..").'/dao/interfaz/IFactoryDao.php';
require_once realpath("../..").'/dto/Cultivo.php';
require_once realpath("../..").'/dao/interfaz/ICultivoDao.php';
require_once realpath("../..").'/dto/Sector.php';

class CultivoController {

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
   * Crea un objeto Cultivo a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCULTIVO
   * @param sECTOR_idSECTOR
   * @param cULTIVO_FECHASIEMBRA
   */
  public static function insert( $idCULTIVO,  $sECTOR_idSECTOR,  $cULTIVO_FECHASIEMBRA){
      $cultivo = new Cultivo();
      $cultivo->setIdCULTIVO($idCULTIVO); 
      $cultivo->setSECTOR_idSECTOR($sECTOR_idSECTOR); 
      $cultivo->setCULTIVO_FECHASIEMBRA($cULTIVO_FECHASIEMBRA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cultivoDao =$FactoryDao->getcultivoDao(self::getDataBaseDefault());
     $rtn = $cultivoDao->insert($cultivo);
     $cultivoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Cultivo de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCULTIVO
   * @return El objeto en base de datos o Null
   */
  public static function select($idCULTIVO){
      $cultivo = new Cultivo();
      $cultivo->setIdCULTIVO($idCULTIVO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cultivoDao =$FactoryDao->getcultivoDao(self::getDataBaseDefault());
     $result = $cultivoDao->select($cultivo);
     $cultivoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Cultivo  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCULTIVO
   * @param sECTOR_idSECTOR
   * @param cULTIVO_FECHASIEMBRA
   */
  public static function update($idCULTIVO, $sECTOR_idSECTOR, $cULTIVO_FECHASIEMBRA){
      $cultivo = self::select($idCULTIVO);
      $cultivo->setSECTOR_idSECTOR($sECTOR_idSECTOR); 
      $cultivo->setCULTIVO_FECHASIEMBRA($cULTIVO_FECHASIEMBRA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cultivoDao =$FactoryDao->getcultivoDao(self::getDataBaseDefault());
     $cultivoDao->update($cultivo);
     $cultivoDao->close();
  }

  /**
   * Elimina un objeto Cultivo de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCULTIVO
   */
  public static function delete($idCULTIVO){
      $cultivo = new Cultivo();
      $cultivo->setIdCULTIVO($idCULTIVO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cultivoDao =$FactoryDao->getcultivoDao(self::getDataBaseDefault());
     $cultivoDao->delete($cultivo);
     $cultivoDao->close();
  }

  /**
   * Lista todos los objetos Cultivo de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Cultivo en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cultivoDao =$FactoryDao->getcultivoDao(self::getDataBaseDefault());
     $result = $cultivoDao->listAll();
     $cultivoDao->close();
     return $result;
  }


}
//That´s all folks!