<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ya no la quiero, es cierto, pero tal vez la quiero. Es tan corto el amor, y es tan largo el olvido.  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Agenda.php';
require_once realpath("../..").'\dao\interfaz\IAgendaDao.php';
require_once realpath("../..").'\dto\Cultivo.php';

class AgendaController {

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
   * Crea un objeto Agenda a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idAGENDA
   * @param cULTIVO_idCULTIVO
   * @param aGENDA_COMENTARIO
   * @param aGENDAFECHA_REGISTRO
   * @param aGENDA_TIPO
   */
  public static function insert( $idAGENDA,  $cULTIVO_idCULTIVO,  $aGENDA_COMENTARIO,  $aGENDAFECHA_REGISTRO,  $aGENDA_TIPO){
      $agenda = new Agenda();
      $agenda->setIdAGENDA($idAGENDA); 
      $agenda->setCULTIVO_idCULTIVO($cULTIVO_idCULTIVO); 
      $agenda->setAGENDA_COMENTARIO($aGENDA_COMENTARIO); 
      $agenda->setAGENDAFECHA_REGISTRO($aGENDAFECHA_REGISTRO); 
      $agenda->setAGENDA_TIPO($aGENDA_TIPO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $agendaDao =$FactoryDao->getagendaDao(self::getDataBaseDefault());
     $rtn = $agendaDao->insert($agenda);
     $agendaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Agenda de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idAGENDA
   * @return El objeto en base de datos o Null
   */
  public static function select($idAGENDA){
      $agenda = new Agenda();
      $agenda->setIdAGENDA($idAGENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $agendaDao =$FactoryDao->getagendaDao(self::getDataBaseDefault());
     $result = $agendaDao->select($agenda);
     $agendaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Agenda  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idAGENDA
   * @param cULTIVO_idCULTIVO
   * @param aGENDA_COMENTARIO
   * @param aGENDAFECHA_REGISTRO
   * @param aGENDA_TIPO
   */
  public static function update($idAGENDA, $cULTIVO_idCULTIVO, $aGENDA_COMENTARIO, $aGENDAFECHA_REGISTRO, $aGENDA_TIPO){
      $agenda = self::select($idAGENDA);
      $agenda->setCULTIVO_idCULTIVO($cULTIVO_idCULTIVO); 
      $agenda->setAGENDA_COMENTARIO($aGENDA_COMENTARIO); 
      $agenda->setAGENDAFECHA_REGISTRO($aGENDAFECHA_REGISTRO); 
      $agenda->setAGENDA_TIPO($aGENDA_TIPO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $agendaDao =$FactoryDao->getagendaDao(self::getDataBaseDefault());
     $agendaDao->update($agenda);
     $agendaDao->close();
  }

  /**
   * Elimina un objeto Agenda de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idAGENDA
   */
  public static function delete($idAGENDA){
      $agenda = new Agenda();
      $agenda->setIdAGENDA($idAGENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $agendaDao =$FactoryDao->getagendaDao(self::getDataBaseDefault());
     $agendaDao->delete($agenda);
     $agendaDao->close();
  }

  /**
   * Lista todos los objetos Agenda de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Agenda en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $agendaDao =$FactoryDao->getagendaDao(self::getDataBaseDefault());
     $result = $agendaDao->listAll();
     $agendaDao->close();
     return $result;
  }


}
//That´s all folks!