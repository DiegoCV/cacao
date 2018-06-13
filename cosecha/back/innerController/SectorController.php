<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ojos de perro azul  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Sector.php';
require_once realpath("../..").'\dao\interfaz\ISectorDao.php';
require_once realpath("../..").'\dto\Finca.php';

class SectorController {

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
   * Crea un objeto Sector a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idSECTOR
   * @param sECTOR_LARGO
   * @param sECTOR_ANCHO
   * @param fINCA_idFINCA
   */
  public static function insert( $idSECTOR,  $sECTOR_LARGO,  $sECTOR_ANCHO,  $fINCA_idFINCA){
      $sector = new Sector();
      $sector->setIdSECTOR($idSECTOR); 
      $sector->setSECTOR_LARGO($sECTOR_LARGO); 
      $sector->setSECTOR_ANCHO($sECTOR_ANCHO); 
      $sector->setFINCA_idFINCA($fINCA_idFINCA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $sectorDao =$FactoryDao->getsectorDao(self::getDataBaseDefault());
     $rtn = $sectorDao->insert($sector);
     $sectorDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Sector de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idSECTOR
   * @return El objeto en base de datos o Null
   */
  public static function select($idSECTOR){
      $sector = new Sector();
      $sector->setIdSECTOR($idSECTOR); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $sectorDao =$FactoryDao->getsectorDao(self::getDataBaseDefault());
     $result = $sectorDao->select($sector);
     $sectorDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Sector  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idSECTOR
   * @param sECTOR_LARGO
   * @param sECTOR_ANCHO
   * @param fINCA_idFINCA
   */
  public static function update($idSECTOR, $sECTOR_LARGO, $sECTOR_ANCHO, $fINCA_idFINCA){
      $sector = self::select($idSECTOR);
      $sector->setSECTOR_LARGO($sECTOR_LARGO); 
      $sector->setSECTOR_ANCHO($sECTOR_ANCHO); 
      $sector->setFINCA_idFINCA($fINCA_idFINCA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $sectorDao =$FactoryDao->getsectorDao(self::getDataBaseDefault());
     $sectorDao->update($sector);
     $sectorDao->close();
  }

  /**
   * Elimina un objeto Sector de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idSECTOR
   */
  public static function delete($idSECTOR){
      $sector = new Sector();
      $sector->setIdSECTOR($idSECTOR); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $sectorDao =$FactoryDao->getsectorDao(self::getDataBaseDefault());
     $sectorDao->delete($sector);
     $sectorDao->close();
  }

  /**
   * Lista todos los objetos Sector de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Sector en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $sectorDao =$FactoryDao->getsectorDao(self::getDataBaseDefault());
     $result = $sectorDao->listAll();
     $sectorDao->close();
     return $result;
  }


}
//That´s all folks!