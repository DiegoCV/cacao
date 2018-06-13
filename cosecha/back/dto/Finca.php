<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    They call me Mr. Espagueti  \\


class Finca {

  private $idFinca;
  private $nombre;
  private $dueño;
  private $ADMINISTRADOR_id_ADMINISTRADOR;

    /**
     * Constructor de Finca
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idFinca
     * @return idFinca
     */
  public function getIdFinca(){
      return $this->idFinca;
  }

    /**
     * Modifica el valor correspondiente a idFinca
     * @param idFinca
     */
  public function setIdFinca($idFinca){
      $this->idFinca = $idFinca;
  }
    /**
     * Devuelve el valor correspondiente a nombre
     * @return nombre
     */
  public function getNombre(){
      return $this->nombre;
  }

    /**
     * Modifica el valor correspondiente a nombre
     * @param nombre
     */
  public function setNombre($nombre){
      $this->nombre = $nombre;
  }
    /**
     * Devuelve el valor correspondiente a dueño
     * @return dueño
     */
  public function getDueño(){
      return $this->dueño;
  }

    /**
     * Modifica el valor correspondiente a dueño
     * @param dueño
     */
  public function setDueño($dueño){
      $this->dueño = $dueño;
  }
    /**
     * Devuelve el valor correspondiente a ADMINISTRADOR_id_ADMINISTRADOR
     * @return ADMINISTRADOR_id_ADMINISTRADOR
     */
  public function getADMINISTRADOR_id_ADMINISTRADOR(){
      return $this->ADMINISTRADOR_id_ADMINISTRADOR;
  }

    /**
     * Modifica el valor correspondiente a ADMINISTRADOR_id_ADMINISTRADOR
     * @param ADMINISTRADOR_id_ADMINISTRADOR
     */
  public function setADMINISTRADOR_id_ADMINISTRADOR($aDMINISTRADOR_id_ADMINISTRADOR){
      $this->ADMINISTRADOR_id_ADMINISTRADOR = $aDMINISTRADOR_id_ADMINISTRADOR;
  }


}
//That�s all folks!