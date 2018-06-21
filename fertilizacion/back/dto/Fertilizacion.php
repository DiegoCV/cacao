<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Puedes sugerirnos frases nuevas, se nos están acabando ( u.u)  \\


class Fertilizacion {

  private $idFertilizacion;
  private $fecha;
  private $idSuelo;
  private $idFertilizante;
  private $idCacaotero;

    /**
     * Constructor de Fertilizacion
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idFertilizacion
     * @return idFertilizacion
     */
  public function getIdFertilizacion(){
      return $this->idFertilizacion;
  }

    /**
     * Modifica el valor correspondiente a idFertilizacion
     * @param idFertilizacion
     */
  public function setIdFertilizacion($idFertilizacion){
      $this->idFertilizacion = $idFertilizacion;
  }
    /**
     * Devuelve el valor correspondiente a fecha
     * @return fecha
     */
  public function getFecha(){
      return $this->fecha;
  }

    /**
     * Modifica el valor correspondiente a fecha
     * @param fecha
     */
  public function setFecha($fecha){
      $this->fecha = $fecha;
  }
    /**
     * Devuelve el valor correspondiente a idSuelo
     * @return idSuelo
     */
  public function getIdSuelo(){
      return $this->idSuelo;
  }

    /**
     * Modifica el valor correspondiente a idSuelo
     * @param idSuelo
     */
  public function setIdSuelo($idSuelo){
      $this->idSuelo = $idSuelo;
  }
    /**
     * Devuelve el valor correspondiente a idFertilizante
     * @return idFertilizante
     */
  public function getIdFertilizante(){
      return $this->idFertilizante;
  }

    /**
     * Modifica el valor correspondiente a idFertilizante
     * @param idFertilizante
     */
  public function setIdFertilizante($idFertilizante){
      $this->idFertilizante = $idFertilizante;
  }
    /**
     * Devuelve el valor correspondiente a idCacaotero
     * @return idCacaotero
     */
  public function getIdCacaotero(){
      return $this->idCacaotero;
  }

    /**
     * Modifica el valor correspondiente a idCacaotero
     * @param idCacaotero
     */
  public function setIdCacaotero($idCacaotero){
      $this->idCacaotero = $idCacaotero;
  }


}
//That´s all folks!