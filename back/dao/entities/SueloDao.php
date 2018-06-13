<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No te olvides de quitar mis comentarios  \\

include_once realpath('../..').'\dao\interfaz\ISueloDao.php';
include_once realpath('../..').'\dto\Suelo.php';
include_once realpath('../..').'\dto\Finca.php';

class SueloDao implements ISueloDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Suelo en la base de datos.
     * @param suelo objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($suelo){
      $idSuelo=$suelo->getIdSuelo();
$hectarea=$suelo->getHectarea();
$estado=$suelo->getEstado();
$descripcion=$suelo->getDescripcion();
$idFinca=$suelo->getIdFinca()->getIdFinca();
$pH=$suelo->getPH();
$carbonoOrganico=$suelo->getCarbonoOrganico();
$materiaOrganico=$suelo->getMateriaOrganico();
$potasio=$suelo->getPotasio();
$calcio=$suelo->getCalcio();
$magnesio=$suelo->getMagnesio();
$sodio=$suelo->getSodio();
$boro=$suelo->getBoro();
$fosforo=$suelo->getFosforo();
$nitrogeno=$suelo->getNitrogeno();
$azufre=$suelo->getAzufre();

      try {
          $sql= "INSERT INTO `suelo`( `idSuelo`, `hectarea`, `estado`, `descripcion`, `idFinca`, `pH`, `carbonoOrganico`, `materiaOrganico`, `potasio`, `calcio`, `magnesio`, `sodio`, `boro`, `fosforo`, `nitrogeno`, `azufre`)"
          ."VALUES ('$idSuelo','$hectarea','$estado','$descripcion','$idFinca','$pH','$carbonoOrganico','$materiaOrganico','$potasio','$calcio','$magnesio','$sodio','$boro','$fosforo','$nitrogeno','$azufre')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Suelo en la base de datos.
     * @param suelo objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($suelo){
      $idSuelo=$suelo->getIdSuelo();

      try {
          $sql= "SELECT `idSuelo`, `hectarea`, `estado`, `descripcion`, `idFinca`, `pH`, `carbonoOrganico`, `materiaOrganico`, `potasio`, `calcio`, `magnesio`, `sodio`, `boro`, `fosforo`, `nitrogeno`, `azufre`"
          ."FROM `suelo`"
          ."WHERE `idSuelo`='$idSuelo'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $suelo->setIdSuelo($data[$i]['idSuelo']);
          $suelo->setHectarea($data[$i]['hectarea']);
          $suelo->setEstado($data[$i]['estado']);
          $suelo->setDescripcion($data[$i]['descripcion']);
           $finca = new Finca();
           $finca->setIdFinca($data[$i]['idFinca']);
           $suelo->setIdFinca($finca);
          $suelo->setPH($data[$i]['pH']);
          $suelo->setCarbonoOrganico($data[$i]['carbonoOrganico']);
          $suelo->setMateriaOrganico($data[$i]['materiaOrganico']);
          $suelo->setPotasio($data[$i]['potasio']);
          $suelo->setCalcio($data[$i]['calcio']);
          $suelo->setMagnesio($data[$i]['magnesio']);
          $suelo->setSodio($data[$i]['sodio']);
          $suelo->setBoro($data[$i]['boro']);
          $suelo->setFosforo($data[$i]['fosforo']);
          $suelo->setNitrogeno($data[$i]['nitrogeno']);
          $suelo->setAzufre($data[$i]['azufre']);

          }
      return $suelo;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Suelo en la base de datos.
     * @param suelo objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($suelo){
      $idSuelo=$suelo->getIdSuelo();
$hectarea=$suelo->getHectarea();
$estado=$suelo->getEstado();
$descripcion=$suelo->getDescripcion();
$idFinca=$suelo->getIdFinca()->getIdFinca();
$pH=$suelo->getPH();
$carbonoOrganico=$suelo->getCarbonoOrganico();
$materiaOrganico=$suelo->getMateriaOrganico();
$potasio=$suelo->getPotasio();
$calcio=$suelo->getCalcio();
$magnesio=$suelo->getMagnesio();
$sodio=$suelo->getSodio();
$boro=$suelo->getBoro();
$fosforo=$suelo->getFosforo();
$nitrogeno=$suelo->getNitrogeno();
$azufre=$suelo->getAzufre();

      try {
          $sql= "UPDATE `suelo` SET`idSuelo`='$idSuelo' ,`hectarea`='$hectarea' ,`estado`='$estado' ,`descripcion`='$descripcion' ,`idFinca`='$idFinca' ,`pH`='$pH' ,`carbonoOrganico`='$carbonoOrganico' ,`materiaOrganico`='$materiaOrganico' ,`potasio`='$potasio' ,`calcio`='$calcio' ,`magnesio`='$magnesio' ,`sodio`='$sodio' ,`boro`='$boro' ,`fosforo`='$fosforo' ,`nitrogeno`='$nitrogeno' ,`azufre`='$azufre' WHERE `idSuelo`='$idSuelo'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Suelo en la base de datos.
     * @param suelo objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($suelo){
      $idSuelo=$suelo->getIdSuelo();

      try {
          $sql ="DELETE FROM `suelo` WHERE `idSuelo`='$idSuelo'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Suelo en la base de datos.
     * @return ArrayList<Suelo> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idSuelo`, `hectarea`, `estado`, `descripcion`, `idFinca`, `pH`, `carbonoOrganico`, `materiaOrganico`, `potasio`, `calcio`, `magnesio`, `sodio`, `boro`, `fosforo`, `nitrogeno`, `azufre`"
          ."FROM `suelo`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $suelo= new Suelo();
          $suelo->setIdSuelo($data[$i]['idSuelo']);
          $suelo->setHectarea($data[$i]['hectarea']);
          $suelo->setEstado($data[$i]['estado']);
          $suelo->setDescripcion($data[$i]['descripcion']);
           $finca = new Finca();
           $finca->setIdFinca($data[$i]['idFinca']);
           $suelo->setIdFinca($finca);
          $suelo->setPH($data[$i]['pH']);
          $suelo->setCarbonoOrganico($data[$i]['carbonoOrganico']);
          $suelo->setMateriaOrganico($data[$i]['materiaOrganico']);
          $suelo->setPotasio($data[$i]['potasio']);
          $suelo->setCalcio($data[$i]['calcio']);
          $suelo->setMagnesio($data[$i]['magnesio']);
          $suelo->setSodio($data[$i]['sodio']);
          $suelo->setBoro($data[$i]['boro']);
          $suelo->setFosforo($data[$i]['fosforo']);
          $suelo->setNitrogeno($data[$i]['nitrogeno']);
          $suelo->setAzufre($data[$i]['azufre']);

          array_push($lista,$suelo);
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