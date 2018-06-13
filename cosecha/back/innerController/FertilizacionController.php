<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Los animales, asombrados, pasaron su mirada del cerdo al hombre, y del hombre al cerdo; y, nuevamente, del cerdo al hombre; pero ya era imposible distinguir quién era uno y quién era otro.  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Fertilizacion.php';
require_once realpath("../..").'\dao\interfaz\IFertilizacionDao.php';
require_once realpath("../..").'\dto\Suelo.php';
require_once realpath("../..").'\dto\Fertilizante.php';
require_once realpath("../..").'\dto\Cacaotero.php';

class FertilizacionController {

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
   * Crea un objeto Fertilizacion a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idFertilizacion
   * @param fecha
   * @param idSuelo
   * @param idFertilizante
   * @param idCacaotero
   */
  public static function insert( $idFertilizacion,  $fecha,  $idSuelo,  $idFertilizante,  $idCacaotero){
      $fertilizacion = new Fertilizacion();
      $fertilizacion->setIdFertilizacion($idFertilizacion); 
      $fertilizacion->setFecha($fecha); 
      $fertilizacion->setIdSuelo($idSuelo); 
      $fertilizacion->setIdFertilizante($idFertilizante); 
      $fertilizacion->setIdCacaotero($idCacaotero); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fertilizacionDao =$FactoryDao->getfertilizacionDao(self::getDataBaseDefault());
     $rtn = $fertilizacionDao->insert($fertilizacion);
     $fertilizacionDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Fertilizacion de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idFertilizacion
   * @return El objeto en base de datos o Null
   */
  public static function select($idFertilizacion){
      $fertilizacion = new Fertilizacion();
      $fertilizacion->setIdFertilizacion($idFertilizacion); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fertilizacionDao =$FactoryDao->getfertilizacionDao(self::getDataBaseDefault());
     $result = $fertilizacionDao->select($fertilizacion);
     $fertilizacionDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Fertilizacion  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idFertilizacion
   * @param fecha
   * @param idSuelo
   * @param idFertilizante
   * @param idCacaotero
   */
  public static function update($idFertilizacion, $fecha, $idSuelo, $idFertilizante, $idCacaotero){
      $fertilizacion = self::select($idFertilizacion);
      $fertilizacion->setFecha($fecha); 
      $fertilizacion->setIdSuelo($idSuelo); 
      $fertilizacion->setIdFertilizante($idFertilizante); 
      $fertilizacion->setIdCacaotero($idCacaotero); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fertilizacionDao =$FactoryDao->getfertilizacionDao(self::getDataBaseDefault());
     $fertilizacionDao->update($fertilizacion);
     $fertilizacionDao->close();
  }

  /**
   * Elimina un objeto Fertilizacion de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idFertilizacion
   */
  public static function delete($idFertilizacion){
      $fertilizacion = new Fertilizacion();
      $fertilizacion->setIdFertilizacion($idFertilizacion); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fertilizacionDao =$FactoryDao->getfertilizacionDao(self::getDataBaseDefault());
     $fertilizacionDao->delete($fertilizacion);
     $fertilizacionDao->close();
  }

  /**
   * Lista todos los objetos Fertilizacion de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Fertilizacion en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fertilizacionDao =$FactoryDao->getfertilizacionDao(self::getDataBaseDefault());
     $result = $fertilizacionDao->listAll();
     $fertilizacionDao->close();
     return $result;
  }


}
//That´s all folks!