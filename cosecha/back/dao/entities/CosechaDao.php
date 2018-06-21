<?php
/*
              -------Creado por-------
             /(x.x )/ Anarchy /( x.x)/
              ------------------------
 */

//    ¿Y si mejor estudias comunicación?  //

include_once realpath('../..').'/dao/interfaz/ICosechaDao.php';
include_once realpath('../..').'/dto/Cosecha.php';
include_once realpath('../..').'/dto/Cultivo.php';

class CosechaDao implements ICosechaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Cosecha en la base de datos.
     * @param cosecha objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($cosecha){
      $idCOSECHA=$cosecha->getIdCOSECHA();
$cULTIVO_idCULTIVO=$cosecha->getCULTIVO_idCULTIVO()->getIdCULTIVO();
$cOSECHA_SACOS=$cosecha->getCOSECHA_SACOS();
$cOSECHAFECHA_REGISTRO=$cosecha->getCOSECHAFECHA_REGISTRO();

      try {
          $sql= "INSERT INTO `cosecha`( `idCOSECHA`, `CULTIVO_idCULTIVO`, `COSECHA_SACOS`, `COSECHAFECHA_REGISTRO`)"
          ."VALUES ('$idCOSECHA','$cULTIVO_idCULTIVO','$cOSECHA_SACOS','$cOSECHAFECHA_REGISTRO')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Cosecha en la base de datos.
     * @param cosecha objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($cosecha){
      $idCOSECHA=$cosecha->getIdCOSECHA();

      try {
          $sql= "SELECT `idCOSECHA`, `CULTIVO_idCULTIVO`, `COSECHA_SACOS`, `COSECHAFECHA_REGISTRO`"
          ."FROM `cosecha`"
          ."WHERE `idCOSECHA`='$idCOSECHA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $cosecha->setIdCOSECHA($data[$i]['idCOSECHA']);
           $cultivo = new Cultivo();
           $cultivo->setIdCULTIVO($data[$i]['CULTIVO_idCULTIVO']);
           $cosecha->setCULTIVO_idCULTIVO($cultivo);
          $cosecha->setCOSECHA_SACOS($data[$i]['COSECHA_SACOS']);
          $cosecha->setCOSECHAFECHA_REGISTRO($data[$i]['COSECHAFECHA_REGISTRO']);

          }
      return $cosecha;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Cosecha en la base de datos.
     * @param cosecha objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($cosecha){
      $idCOSECHA=$cosecha->getIdCOSECHA();
$cULTIVO_idCULTIVO=$cosecha->getCULTIVO_idCULTIVO()->getIdCULTIVO();
$cOSECHA_SACOS=$cosecha->getCOSECHA_SACOS();
$cOSECHAFECHA_REGISTRO=$cosecha->getCOSECHAFECHA_REGISTRO();

      try {
          $sql= "UPDATE `cosecha` SET`idCOSECHA`='$idCOSECHA' ,`CULTIVO_idCULTIVO`='$cULTIVO_idCULTIVO' ,`COSECHA_SACOS`='$cOSECHA_SACOS' ,`COSECHAFECHA_REGISTRO`='$cOSECHAFECHA_REGISTRO' WHERE `idCOSECHA`='$idCOSECHA'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Cosecha en la base de datos.
     * @param cosecha objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($cosecha){
      $idCOSECHA=$cosecha->getIdCOSECHA();

      try {
          $sql ="DELETE FROM `cosecha` WHERE `idCOSECHA`='$idCOSECHA'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Cosecha en la base de datos.
     * @return ArrayList<Cosecha> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idCOSECHA`, `CULTIVO_idCULTIVO`, `COSECHA_SACOS`, `COSECHAFECHA_REGISTRO`"
          ."FROM `cosecha`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $cosecha= new Cosecha();
          $cosecha->setIdCOSECHA($data[$i]['idCOSECHA']);
           $cultivo = new Cultivo();
           $cultivo->setIdCULTIVO($data[$i]['CULTIVO_idCULTIVO']);
           $cosecha->setCULTIVO_idCULTIVO($cultivo);
          $cosecha->setCOSECHA_SACOS($data[$i]['COSECHA_SACOS']);
          $cosecha->setCOSECHAFECHA_REGISTRO($data[$i]['COSECHAFECHA_REGISTRO']);

          array_push($lista,$cosecha);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

   public function CosechaListByFinca($idfinca){
      $lista = array();
      try {
          $sql ="SELECT * FROM `cosecha` INNER JOIN `cultivo` ON (`cosecha`.`CULTIVO_idCULTIVO` = `cultivo`.`idCULTIVO`)
INNER JOIN `sector` ON (`cultivo`.`SECTOR_idSECTOR` = `sector`.`idSECTOR`) INNER JOIN `finca` ON(`sector`.`FINCA_idFINCA` = `finca`.`idFinca`) WHERE `finca`.`idFinca` = $idfinca";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $cosecha= new Cosecha();
          $cosecha->setIdCOSECHA($data[$i]['idCOSECHA']);
           $cultivo = new Cultivo();
           $cultivo->setIdCULTIVO($data[$i]['CULTIVO_idCULTIVO']);
           $cosecha->setCULTIVO_idCULTIVO($cultivo);
          $cosecha->setCOSECHA_SACOS($data[$i]['COSECHA_SACOS']);
          $cosecha->setCOSECHAFECHA_REGISTRO($data[$i]['COSECHAFECHA_REGISTRO']);

          array_push($lista,$cosecha);
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