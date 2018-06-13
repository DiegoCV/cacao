<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    El gran hermano te vigila  \\


class Cacaotero {

  private $idCacaotero;
  private $cargo;
  private $cedula;
  private $usuario;
  private $contraseña;

    /**
     * Constructor de Cacaotero
    */
     public function __construct(){}

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
    /**
     * Devuelve el valor correspondiente a cargo
     * @return cargo
     */
  public function getCargo(){
      return $this->cargo;
  }

    /**
     * Modifica el valor correspondiente a cargo
     * @param cargo
     */
  public function setCargo($cargo){
      $this->cargo = $cargo;
  }
    /**
     * Devuelve el valor correspondiente a cedula
     * @return cedula
     */
  public function getCedula(){
      return $this->cedula;
  }

    /**
     * Modifica el valor correspondiente a cedula
     * @param cedula
     */
  public function setCedula($cedula){
      $this->cedula = $cedula;
  }
    /**
     * Devuelve el valor correspondiente a usuario
     * @return usuario
     */
  public function getUsuario(){
      return $this->usuario;
  }

    /**
     * Modifica el valor correspondiente a usuario
     * @param usuario
     */
  public function setUsuario($usuario){
      $this->usuario = $usuario;
  }
    /**
     * Devuelve el valor correspondiente a contraseña
     * @return contraseña
     */
  public function getContraseña(){
      return $this->contraseña;
  }

    /**
     * Modifica el valor correspondiente a contraseña
     * @param contraseña
     */
  public function setContraseña($contraseña){
      $this->contraseña = $contraseña;
  }


}
//That�s all folks!