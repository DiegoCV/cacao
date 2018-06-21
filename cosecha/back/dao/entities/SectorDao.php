<?php
/*
              -------Creado por-------
             /(x.x )/ Anarchy /( x.x)/
              ------------------------
 */

//    No es una cola ni es una pila, es tu proyecto que no compila  //

include_once realpath('../..').'/dao/interfaz/ISectorDao.php';
include_once realpath('../..').'/dto/Sector.php';
include_once realpath('../..').'/dto/Finca.php';

class SectorDao implements ISectorDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Sector en la base de datos.
     * @param sector objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($sector){
      $idSECTOR=$sector->getIdSECTOR();
$sECTOR_LARGO=$sector->getSECTOR_LARGO();
$sECTOR_ANCHO=$sector->getSECTOR_ANCHO();
$fINCA_idFINCA=$sector->getFINCA_idFINCA()->getIdFinca();

      try {
          $sql= "INSERT INTO `sector`( `idSECTOR`, `SECTOR_LARGO`, `SECTOR_ANCHO`, `FINCA_idFINCA`)"
          ."VALUES ('$idSECTOR','$sECTOR_LARGO','$sECTOR_ANCHO','$fINCA_idFINCA')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Sector en la base de datos.
     * @param sector objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($sector){
      $idSECTOR=$sector->getIdSECTOR();

      try {
          $sql= "SELECT `idSECTOR`, `SECTOR_LARGO`, `SECTOR_ANCHO`, `FINCA_idFINCA`"
          ."FROM `sector`"
          ."WHERE `idSECTOR`='$idSECTOR'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $sector->setIdSECTOR($data[$i]['idSECTOR']);
          $sector->setSECTOR_LARGO($data[$i]['SECTOR_LARGO']);
          $sector->setSECTOR_ANCHO($data[$i]['SECTOR_ANCHO']);
           $finca = new Finca();
           $finca->setIdFinca($data[$i]['FINCA_idFINCA']);
           $sector->setFINCA_idFINCA($finca);

          }
      return $sector;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Sector en la base de datos.
     * @param sector objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($sector){
      $idSECTOR=$sector->getIdSECTOR();
$sECTOR_LARGO=$sector->getSECTOR_LARGO();
$sECTOR_ANCHO=$sector->getSECTOR_ANCHO();
$fINCA_idFINCA=$sector->getFINCA_idFINCA()->getIdFinca();

      try {
          $sql= "UPDATE `sector` SET`idSECTOR`='$idSECTOR' ,`SECTOR_LARGO`='$sECTOR_LARGO' ,`SECTOR_ANCHO`='$sECTOR_ANCHO' ,`FINCA_idFINCA`='$fINCA_idFINCA' WHERE `idSECTOR`='$idSECTOR'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Sector en la base de datos.
     * @param sector objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($sector){
      $idSECTOR=$sector->getIdSECTOR();

      try {
          $sql ="DELETE FROM `sector` WHERE `idSECTOR`='$idSECTOR'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Sector en la base de datos.
     * @return ArrayList<Sector> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idSECTOR`, `SECTOR_LARGO`, `SECTOR_ANCHO`, `FINCA_idFINCA`"
          ."FROM `sector`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $sector= new Sector();
          $sector->setIdSECTOR($data[$i]['idSECTOR']);
          $sector->setSECTOR_LARGO($data[$i]['SECTOR_LARGO']);
          $sector->setSECTOR_ANCHO($data[$i]['SECTOR_ANCHO']);
           $finca = new Finca();
           $finca->setIdFinca($data[$i]['FINCA_idFINCA']);
           $sector->setFINCA_idFINCA($finca);

          array_push($lista,$sector);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

public function SectorOptionByFinca($idfinca){
      $lista = array();
      try {
          $sql ="SELECT `idSECTOR`, `SECTOR_LARGO`, `SECTOR_ANCHO`, `FINCA_idFINCA`, `nombre`
          FROM `sector`
          INNER JOIN `finca` 
          ON (`sector`.`FINCA_idFINCA` = `finca`.`idFinca`)
          WHERE `FINCA_idFINCA` = $idfinca";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $sector= new Sector();
          $sector->setIdSECTOR($data[$i]['idSECTOR']);
          $sector->setSECTOR_LARGO($data[$i]['SECTOR_LARGO']);
          $sector->setSECTOR_ANCHO($data[$i]['SECTOR_ANCHO']);
           $finca = new Finca();
           $finca->setIdFinca($data[$i]['FINCA_idFINCA']);
           $finca->setnombre($data[$i]['nombre']);
           $sector->setFINCA_idFINCA($finca);

          array_push($lista,$sector);
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