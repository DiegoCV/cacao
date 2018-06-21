<?php
/*
              -------Creado por-------
             /(x.x )/ Anarchy /( x.x)/
              ------------------------
 */

//    ¡Vaya! ¡Al fin harás algo mejor que una calculadora!  //

require_once realpath("../..").'/innerController/GlobalController.php';
require_once realpath("../..").'/dao/interfaz/IFactoryDao.php';
require_once realpath("../..").'/dto/Fertilizante.php';
require_once realpath("../..").'/dao/interfaz/IFertilizanteDao.php';

class FertilizanteController {

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
   * Crea un objeto Fertilizante a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idFertilizante
   * @param nombre
   * @param cantidad
   * @param tipo
   */
  public static function insert( $idFertilizante,  $nombre,  $cantidad,  $tipo){
      $fertilizante = new Fertilizante();
      $fertilizante->setIdFertilizante($idFertilizante); 
      $fertilizante->setNombre($nombre); 
      $fertilizante->setCantidad($cantidad); 
      $fertilizante->setTipo($tipo); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fertilizanteDao =$FactoryDao->getfertilizanteDao(self::getDataBaseDefault());
     $rtn = $fertilizanteDao->insert($fertilizante);
     $fertilizanteDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Fertilizante de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idFertilizante
   * @return El objeto en base de datos o Null
   */
  public static function select($idFertilizante){
      $fertilizante = new Fertilizante();
      $fertilizante->setIdFertilizante($idFertilizante); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fertilizanteDao =$FactoryDao->getfertilizanteDao(self::getDataBaseDefault());
     $result = $fertilizanteDao->select($fertilizante);
     $fertilizanteDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Fertilizante  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idFertilizante
   * @param nombre
   * @param cantidad
   * @param tipo
   */
  public static function update($idFertilizante, $nombre, $cantidad, $tipo){
      $fertilizante = self::select($idFertilizante);
      $fertilizante->setNombre($nombre); 
      $fertilizante->setCantidad($cantidad); 
      $fertilizante->setTipo($tipo); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fertilizanteDao =$FactoryDao->getfertilizanteDao(self::getDataBaseDefault());
     $fertilizanteDao->update($fertilizante);
     $fertilizanteDao->close();
  }

  /**
   * Elimina un objeto Fertilizante de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idFertilizante
   */
  public static function delete($idFertilizante){
      $fertilizante = new Fertilizante();
      $fertilizante->setIdFertilizante($idFertilizante); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fertilizanteDao =$FactoryDao->getfertilizanteDao(self::getDataBaseDefault());
     $fertilizanteDao->delete($fertilizante);
     $fertilizanteDao->close();
  }

  /**
   * Lista todos los objetos Fertilizante de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Fertilizante en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fertilizanteDao =$FactoryDao->getfertilizanteDao(self::getDataBaseDefault());
     $result = $fertilizanteDao->listAll();
     $fertilizanteDao->close();
     return $result;
  }


}
//That´s all folks!