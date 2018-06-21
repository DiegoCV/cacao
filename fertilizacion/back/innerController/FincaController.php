<?php
/*
              -------Creado por-------
             /(x.x )/ Anarchy /( x.x)/
              ------------------------
 */

//    Don´t call me gringo you f%&ing beanner  //

require_once realpath("../..").'/innerController/GlobalController.php';
require_once realpath("../..").'/dao/interfaz/IFactoryDao.php';
require_once realpath("../..").'/dto/Finca.php';
require_once realpath("../..").'/dao/interfaz/IFincaDao.php';
require_once realpath("../..").'/dto/Administrador.php';

class FincaController {

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
   * Crea un objeto Finca a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idFinca
   * @param nombre
   * @param dueÃ±o
   * @param aDMINISTRADOR_id_ADMINISTRADOR
   */
  public static function insert( $idFinca,  $nombre,  $dueÃ±o,  $aDMINISTRADOR_id_ADMINISTRADOR){
      $finca = new Finca();
      $finca->setIdFinca($idFinca); 
      $finca->setNombre($nombre); 
      $finca->setDueÃ±o($dueÃ±o); 
      $finca->setADMINISTRADOR_id_ADMINISTRADOR($aDMINISTRADOR_id_ADMINISTRADOR); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fincaDao =$FactoryDao->getfincaDao(self::getDataBaseDefault());
     $rtn = $fincaDao->insert($finca);
     $fincaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Finca de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idFinca
   * @return El objeto en base de datos o Null
   */
  public static function select($idFinca){
      $finca = new Finca();
      $finca->setIdFinca($idFinca); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fincaDao =$FactoryDao->getfincaDao(self::getDataBaseDefault());
     $result = $fincaDao->select($finca);
     $fincaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Finca  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idFinca
   * @param nombre
   * @param dueÃ±o
   * @param aDMINISTRADOR_id_ADMINISTRADOR
   */
  public static function update($idFinca, $nombre, $dueÃ±o, $aDMINISTRADOR_id_ADMINISTRADOR){
      $finca = self::select($idFinca);
      $finca->setNombre($nombre); 
      $finca->setDueÃ±o($dueÃ±o); 
      $finca->setADMINISTRADOR_id_ADMINISTRADOR($aDMINISTRADOR_id_ADMINISTRADOR); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fincaDao =$FactoryDao->getfincaDao(self::getDataBaseDefault());
     $fincaDao->update($finca);
     $fincaDao->close();
  }

  /**
   * Elimina un objeto Finca de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idFinca
   */
  public static function delete($idFinca){
      $finca = new Finca();
      $finca->setIdFinca($idFinca); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fincaDao =$FactoryDao->getfincaDao(self::getDataBaseDefault());
     $fincaDao->delete($finca);
     $fincaDao->close();
  }

  /**
   * Lista todos los objetos Finca de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Finca en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fincaDao =$FactoryDao->getfincaDao(self::getDataBaseDefault());
     $result = $fincaDao->listAll();
     $fincaDao->close();
     return $result;
  }


  public static function listByAdmin($id){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fincaDao =$FactoryDao->getfincaDao(self::getDataBaseDefault());
     $result = $fincaDao->listByAdmin($id);
     $fincaDao->close();
     return $result;
  }

}
//That´s all folks!