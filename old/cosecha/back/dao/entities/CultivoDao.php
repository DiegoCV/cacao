<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No se fije en el corte de cabello, soy mucho muy rico  \\

include_once realpath('../..').'\dao\interfaz\ICultivoDao.php';
include_once realpath('../..').'\dto\Cultivo.php';
include_once realpath('../..').'\dto\Sector.php';
include_once realpath('../..').'\dto\Finca.php';



class CultivoDao implements ICultivoDao{

private $cn;

    /**
     * Inicializa una �nica conexi�n a la base de datos, que se usar� para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Cultivo en la base de datos.
     * @param cultivo objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($cultivo){
      $idCULTIVO=$cultivo->getIdCULTIVO();
$sECTOR_idSECTOR=$cultivo->getSECTOR_idSECTOR()->getIdSECTOR();
$cULTIVO_FECHASIEMBRA=$cultivo->getCULTIVO_FECHASIEMBRA();

      try {
          $sql= "INSERT INTO `cultivo`( `idCULTIVO`, `SECTOR_idSECTOR`, `CULTIVO_FECHASIEMBRA`)"
          ."VALUES ('$idCULTIVO','$sECTOR_idSECTOR','$cULTIVO_FECHASIEMBRA')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Cultivo en la base de datos.
     * @param cultivo objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($cultivo){
      $idCULTIVO=$cultivo->getIdCULTIVO();

      try {
          $sql= "SELECT `idCULTIVO`, `SECTOR_idSECTOR`, `CULTIVO_FECHASIEMBRA`"
          ."FROM `cultivo`"
          ."WHERE `idCULTIVO`='$idCULTIVO'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $cultivo->setIdCULTIVO($data[$i]['idCULTIVO']);
           $sector = new Sector();
           $sector->setIdSECTOR($data[$i]['SECTOR_idSECTOR']);
           $cultivo->setSECTOR_idSECTOR($sector);
          $cultivo->setCULTIVO_FECHASIEMBRA($data[$i]['CULTIVO_FECHASIEMBRA']);

          }
      return $cultivo;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Cultivo en la base de datos.
     * @param cultivo objeto con la informaci�n a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($cultivo){
      $idCULTIVO=$cultivo->getIdCULTIVO();
$sECTOR_idSECTOR=$cultivo->getSECTOR_idSECTOR()->getIdSECTOR();
$cULTIVO_FECHASIEMBRA=$cultivo->getCULTIVO_FECHASIEMBRA();

      try {
          $sql= "UPDATE `cultivo` SET`idCULTIVO`='$idCULTIVO' ,`SECTOR_idSECTOR`='$sECTOR_idSECTOR' ,`CULTIVO_FECHASIEMBRA`='$cULTIVO_FECHASIEMBRA' WHERE `idCULTIVO`='$idCULTIVO'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Cultivo en la base de datos.
     * @param cultivo objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($cultivo){
      $idCULTIVO=$cultivo->getIdCULTIVO();

      try {
          $sql ="DELETE FROM `cultivo` WHERE `idCULTIVO`='$idCULTIVO'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Cultivo en la base de datos.
     * @return ArrayList<Cultivo> Puede contener los objetos consultados o estar vac�o
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idCULTIVO`, `SECTOR_idSECTOR`, `CULTIVO_FECHASIEMBRA`"
          ."FROM `cultivo`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $cultivo= new Cultivo();
          $cultivo->setIdCULTIVO($data[$i]['idCULTIVO']);
           $sector = new Sector();
           $sector->setIdSECTOR($data[$i]['SECTOR_idSECTOR']);
           $cultivo->setSECTOR_idSECTOR($sector);
          $cultivo->setCULTIVO_FECHASIEMBRA($data[$i]['CULTIVO_FECHASIEMBRA']);

          array_push($lista,$cultivo);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }
   public function CultivosOptionByfinca($idFinca){
      $lista = array();
      try {
          $sql ="SELECT `idCULTIVO`, `SECTOR_idSECTOR`, `CULTIVO_FECHASIEMBRA`, `nombre`
                FROM `cultivo`
                INNER JOIN `sector`
                ON (`cultivo`.`SECTOR_idSECTOR` = `sector`.`idSECTOR`)
                INNER JOIN `finca`
                ON (`sector`.`idSECTOR` = `finca`.`idFinca`)
                WHERE `finca`.`idFinca` = $idFinca";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $cultivo= new Cultivo();
          $cultivo->setIdCULTIVO($data[$i]['idCULTIVO']);
           $sector = new Sector();
           $sector->setIdSECTOR($data[$i]['SECTOR_idSECTOR']);
           $finca = new Finca();
           $finca->setNombre($data[$i]['nombre']);
           $sector->setFINCA_idFINCA($finca);
           $cultivo->setSECTOR_idSECTOR($sector);
          $cultivo->setCULTIVO_FECHASIEMBRA($data[$i]['CULTIVO_FECHASIEMBRA']);

          array_push($lista,$cultivo);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    public function exportarCsv(){
      $lista = array();
      $ruta = __DIR__;
      $ruta = str_replace(chr(92),'/',$ruta);
      try {
          $sql ="(SELECT 'Nombre de la Finca', 'Cantidad de sacos', 'Fecha de recoleccion', 'Fecha de cultivo', 'largo del sector', 'ancho del sector') UNION 
(SELECT `nombre`, `COSECHA_SACOS`,`COSECHAFECHA_REGISTRO`,`CULTIVO_FECHASIEMBRA`,`SECTOR_LARGO`,`SECTOR_ANCHO`  FROM `cosecha` INNER JOIN `cultivo` ON (`cosecha`.`CULTIVO_idCULTIVO` =`cultivo`.`idCULTIVO`) INNER JOIN `sector` ON (`sector`.`idSECTOR` = `cultivo`.`SECTOR_idSECTOR`) INNER JOIN `finca` ON (`finca`.`idFinca` = `sector`.`FINCA_idFINCA`) WHERE`cultivo`.`idCULTIVO` = 1 INTO OUTFILE '".$ruta."/prueba.csv' FIELDS TERMINATED BY ';')";
          $data = $this->ejecutarConsulta2($sql);
            include realpath('../..').'/innerController/Informe.php';
            unlink($ruta.'/prueba.csv');
          
      return $lista;
      } catch (SQLException $e) {         
      return 'true';
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
       public function ejecutarConsulta2($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $sentencia = null;
    }
    /**
     * Cierra la conexi�n actual a la base de datos
     */
  public function close(){
      $cn=null;
  }
}
//That�s all folks!