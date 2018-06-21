<?php
/*
              -------Creado por-------
             /(x.x )/ Anarchy /( x.x)/
              ------------------------
 */

//    Me pagan USD 10,000 por cada frase que invento. 20,000 por las más tontas  //

require_once realpath("../..").'/innerController/GlobalController.php';
require_once realpath("../..").'/dao/interfaz/IFactoryDao.php';
require_once realpath("../..").'/dto/Suelo.php';
require_once realpath("../..").'/dao/interfaz/ISueloDao.php';
require_once realpath("../..").'/dto/Finca.php';

class SueloController {

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
   * Crea un objeto Suelo a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idSuelo
   * @param hectarea
   * @param estado
   * @param descripcion
   * @param idFinca
   * @param pH
   * @param carbonoOrganico
   * @param materiaOrganico
   * @param potasio
   * @param calcio
   * @param magnesio
   * @param sodio
   * @param boro
   * @param fosforo
   * @param nitrogeno
   * @param azufre
   */
  public static function insert( $idSuelo,  $hectarea,  $estado,  $descripcion,  $idFinca,  $pH,  $carbonoOrganico,  $materiaOrganico,  $potasio,  $calcio,  $magnesio,  $sodio,  $boro,  $fosforo,  $nitrogeno,  $azufre){
      $suelo = new Suelo();
      $suelo->setIdSuelo($idSuelo); 
      $suelo->setHectarea($hectarea); 
      $suelo->setEstado($estado); 
      $suelo->setDescripcion($descripcion); 
      $suelo->setIdFinca($idFinca); 
      $suelo->setPH($pH); 
      $suelo->setCarbonoOrganico($carbonoOrganico); 
      $suelo->setMateriaOrganico($materiaOrganico); 
      $suelo->setPotasio($potasio); 
      $suelo->setCalcio($calcio); 
      $suelo->setMagnesio($magnesio); 
      $suelo->setSodio($sodio); 
      $suelo->setBoro($boro); 
      $suelo->setFosforo($fosforo); 
      $suelo->setNitrogeno($nitrogeno); 
      $suelo->setAzufre($azufre); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $sueloDao =$FactoryDao->getsueloDao(self::getDataBaseDefault());
     $rtn = $sueloDao->insert($suelo);
     $sueloDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Suelo de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idSuelo
   * @return El objeto en base de datos o Null
   */
  public static function select($idSuelo){
      $suelo = new Suelo();
      $suelo->setIdSuelo($idSuelo); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $sueloDao =$FactoryDao->getsueloDao(self::getDataBaseDefault());
     $result = $sueloDao->select($suelo);
     $sueloDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Suelo  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idSuelo
   * @param hectarea
   * @param estado
   * @param descripcion
   * @param idFinca
   * @param pH
   * @param carbonoOrganico
   * @param materiaOrganico
   * @param potasio
   * @param calcio
   * @param magnesio
   * @param sodio
   * @param boro
   * @param fosforo
   * @param nitrogeno
   * @param azufre
   */
  public static function update($idSuelo, $hectarea, $estado, $descripcion, $idFinca, $pH, $carbonoOrganico, $materiaOrganico, $potasio, $calcio, $magnesio, $sodio, $boro, $fosforo, $nitrogeno, $azufre){
      $suelo = self::select($idSuelo);
      $suelo->setHectarea($hectarea); 
      $suelo->setEstado($estado); 
      $suelo->setDescripcion($descripcion); 
      $suelo->setIdFinca($idFinca); 
      $suelo->setPH($pH); 
      $suelo->setCarbonoOrganico($carbonoOrganico); 
      $suelo->setMateriaOrganico($materiaOrganico); 
      $suelo->setPotasio($potasio); 
      $suelo->setCalcio($calcio); 
      $suelo->setMagnesio($magnesio); 
      $suelo->setSodio($sodio); 
      $suelo->setBoro($boro); 
      $suelo->setFosforo($fosforo); 
      $suelo->setNitrogeno($nitrogeno); 
      $suelo->setAzufre($azufre); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $sueloDao =$FactoryDao->getsueloDao(self::getDataBaseDefault());
     $sueloDao->update($suelo);
     $sueloDao->close();
  }

  /**
   * Elimina un objeto Suelo de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idSuelo
   */
  public static function delete($idSuelo){
      $suelo = new Suelo();
      $suelo->setIdSuelo($idSuelo); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $sueloDao =$FactoryDao->getsueloDao(self::getDataBaseDefault());
     $sueloDao->delete($suelo);
     $sueloDao->close();
  }

  /**
   * Lista todos los objetos Suelo de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Suelo en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $sueloDao =$FactoryDao->getsueloDao(self::getDataBaseDefault());
     $result = $sueloDao->listAll();
     $sueloDao->close();
     return $result;
  }


}
//That´s all folks!