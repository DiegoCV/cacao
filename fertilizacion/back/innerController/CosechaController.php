<?php
/*
              -------Creado por-------
             /(x.x )/ Anarchy /( x.x)/
              ------------------------
 */

//    Muchos años después, frente al pelotón de fusilamiento, el coronel Aureliano Buendía había de recordar aquella tarde remota en que su padre lo llevó a conocer el hielo.   //

require_once realpath("../..").'/innerController/GlobalController.php';
require_once realpath("../..").'/dao/interfaz/IFactoryDao.php';
require_once realpath("../..").'/dto/Cosecha.php';
require_once realpath("../..").'/dao/interfaz/ICosechaDao.php';
require_once realpath("../..").'/dto/Cultivo.php';

class CosechaController {

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
   * Crea un objeto Cosecha a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCOSECHA
   * @param cULTIVO_idCULTIVO
   * @param cOSECHA_SACOS
   * @param cOSECHAFECHA_REGISTRO
   */
  public static function insert( $idCOSECHA,  $cULTIVO_idCULTIVO,  $cOSECHA_SACOS,  $cOSECHAFECHA_REGISTRO){
      $cosecha = new Cosecha();
      $cosecha->setIdCOSECHA($idCOSECHA); 
      $cosecha->setCULTIVO_idCULTIVO($cULTIVO_idCULTIVO); 
      $cosecha->setCOSECHA_SACOS($cOSECHA_SACOS); 
      $cosecha->setCOSECHAFECHA_REGISTRO($cOSECHAFECHA_REGISTRO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cosechaDao =$FactoryDao->getcosechaDao(self::getDataBaseDefault());
     $rtn = $cosechaDao->insert($cosecha);
     $cosechaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Cosecha de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCOSECHA
   * @return El objeto en base de datos o Null
   */
  public static function select($idCOSECHA){
      $cosecha = new Cosecha();
      $cosecha->setIdCOSECHA($idCOSECHA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cosechaDao =$FactoryDao->getcosechaDao(self::getDataBaseDefault());
     $result = $cosechaDao->select($cosecha);
     $cosechaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Cosecha  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCOSECHA
   * @param cULTIVO_idCULTIVO
   * @param cOSECHA_SACOS
   * @param cOSECHAFECHA_REGISTRO
   */
  public static function update($idCOSECHA, $cULTIVO_idCULTIVO, $cOSECHA_SACOS, $cOSECHAFECHA_REGISTRO){
      $cosecha = self::select($idCOSECHA);
      $cosecha->setCULTIVO_idCULTIVO($cULTIVO_idCULTIVO); 
      $cosecha->setCOSECHA_SACOS($cOSECHA_SACOS); 
      $cosecha->setCOSECHAFECHA_REGISTRO($cOSECHAFECHA_REGISTRO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cosechaDao =$FactoryDao->getcosechaDao(self::getDataBaseDefault());
     $cosechaDao->update($cosecha);
     $cosechaDao->close();
  }

  /**
   * Elimina un objeto Cosecha de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCOSECHA
   */
  public static function delete($idCOSECHA){
      $cosecha = new Cosecha();
      $cosecha->setIdCOSECHA($idCOSECHA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cosechaDao =$FactoryDao->getcosechaDao(self::getDataBaseDefault());
     $cosechaDao->delete($cosecha);
     $cosechaDao->close();
  }

  /**
   * Lista todos los objetos Cosecha de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Cosecha en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cosechaDao =$FactoryDao->getcosechaDao(self::getDataBaseDefault());
     $result = $cosechaDao->listAll();
     $cosechaDao->close();
     return $result;
  }


}
//That´s all folks!