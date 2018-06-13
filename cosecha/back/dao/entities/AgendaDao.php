<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Hey ¿cómo se llama tu café internet?  \\

include_once realpath('../..').'\dao\interfaz\IAgendaDao.php';
include_once realpath('../..').'\dto\Agenda.php';
include_once realpath('../..').'\dto\Cultivo.php';

class AgendaDao implements IAgendaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Agenda en la base de datos.
     * @param agenda objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($agenda){
      $idAGENDA=$agenda->getIdAGENDA();
$cULTIVO_idCULTIVO=$agenda->getCULTIVO_idCULTIVO()->getIdCULTIVO();
$aGENDA_COMENTARIO=$agenda->getAGENDA_COMENTARIO();
$aGENDAFECHA_REGISTRO=$agenda->getAGENDAFECHA_REGISTRO();
$aGENDA_TIPO=$agenda->getAGENDA_TIPO();

      try {
          $sql= "INSERT INTO `agenda`( `idAGENDA`, `CULTIVO_idCULTIVO`, `AGENDA_COMENTARIO`, `AGENDAFECHA_REGISTRO`, `AGENDA_TIPO`)"
          ."VALUES ('$idAGENDA','$cULTIVO_idCULTIVO','$aGENDA_COMENTARIO','$aGENDAFECHA_REGISTRO','$aGENDA_TIPO')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Agenda en la base de datos.
     * @param agenda objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($agenda){
      $idAGENDA=$agenda->getIdAGENDA();

      try {
          $sql= "SELECT `idAGENDA`, `CULTIVO_idCULTIVO`, `AGENDA_COMENTARIO`, `AGENDAFECHA_REGISTRO`, `AGENDA_TIPO`"
          ."FROM `agenda`"
          ."WHERE `idAGENDA`='$idAGENDA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $agenda->setIdAGENDA($data[$i]['idAGENDA']);
           $cultivo = new Cultivo();
           $cultivo->setIdCULTIVO($data[$i]['CULTIVO_idCULTIVO']);
           $agenda->setCULTIVO_idCULTIVO($cultivo);
          $agenda->setAGENDA_COMENTARIO($data[$i]['AGENDA_COMENTARIO']);
          $agenda->setAGENDAFECHA_REGISTRO($data[$i]['AGENDAFECHA_REGISTRO']);
          $agenda->setAGENDA_TIPO($data[$i]['AGENDA_TIPO']);

          }
      return $agenda;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Agenda en la base de datos.
     * @param agenda objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($agenda){
      $idAGENDA=$agenda->getIdAGENDA();
$cULTIVO_idCULTIVO=$agenda->getCULTIVO_idCULTIVO()->getIdCULTIVO();
$aGENDA_COMENTARIO=$agenda->getAGENDA_COMENTARIO();
$aGENDAFECHA_REGISTRO=$agenda->getAGENDAFECHA_REGISTRO();
$aGENDA_TIPO=$agenda->getAGENDA_TIPO();

      try {
          $sql= "UPDATE `agenda` SET`idAGENDA`='$idAGENDA' ,`CULTIVO_idCULTIVO`='$cULTIVO_idCULTIVO' ,`AGENDA_COMENTARIO`='$aGENDA_COMENTARIO' ,`AGENDAFECHA_REGISTRO`='$aGENDAFECHA_REGISTRO' ,`AGENDA_TIPO`='$aGENDA_TIPO' WHERE `idAGENDA`='$idAGENDA'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Agenda en la base de datos.
     * @param agenda objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($agenda){
      $idAGENDA=$agenda->getIdAGENDA();

      try {
          $sql ="DELETE FROM `agenda` WHERE `idAGENDA`='$idAGENDA'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Agenda en la base de datos.
     * @return ArrayList<Agenda> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idAGENDA`, `CULTIVO_idCULTIVO`, `AGENDA_COMENTARIO`, `AGENDAFECHA_REGISTRO`, `AGENDA_TIPO`"
          ."FROM `agenda`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $agenda= new Agenda();
          $agenda->setIdAGENDA($data[$i]['idAGENDA']);
           $cultivo = new Cultivo();
           $cultivo->setIdCULTIVO($data[$i]['CULTIVO_idCULTIVO']);
           $agenda->setCULTIVO_idCULTIVO($cultivo);
          $agenda->setAGENDA_COMENTARIO($data[$i]['AGENDA_COMENTARIO']);
          $agenda->setAGENDAFECHA_REGISTRO($data[$i]['AGENDAFECHA_REGISTRO']);
          $agenda->setAGENDA_TIPO($data[$i]['AGENDA_TIPO']);

          array_push($lista,$agenda);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

      public function insertarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $sentencia = null;
          return $this->cn->lastInsertId();
    }
      public function ejecutarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $data = $sentencia->fetchAll();
          $sentencia = null;
          return $data;
    }
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close(){
      $cn=null;
  }
}
//That´s all folks!