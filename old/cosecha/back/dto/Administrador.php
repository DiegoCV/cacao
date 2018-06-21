<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es una frase de prueba ¿Quieres ver la de verdad? ( ?~ ?? ?°)  \\


class Administrador {

  private $id_ADMINISTRADOR;
  private $ADMINISTRADOR_NOMBRE;
  private $ADMINISTRADOR_APELLIDO;
  private $ADMINISTRADOR_USER;
  private $ADMINISTRADOR_PASS;

    /**
     * Constructor de Administrador
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a id_ADMINISTRADOR
     * @return id_ADMINISTRADOR
     */
  public function getId_ADMINISTRADOR(){
      return $this->id_ADMINISTRADOR;
  }

    /**
     * Modifica el valor correspondiente a id_ADMINISTRADOR
     * @param id_ADMINISTRADOR
     */
  public function setId_ADMINISTRADOR($id_ADMINISTRADOR){
      $this->id_ADMINISTRADOR = $id_ADMINISTRADOR;
  }
    /**
     * Devuelve el valor correspondiente a ADMINISTRADOR_NOMBRE
     * @return ADMINISTRADOR_NOMBRE
     */
  public function getADMINISTRADOR_NOMBRE(){
      return $this->ADMINISTRADOR_NOMBRE;
  }

    /**
     * Modifica el valor correspondiente a ADMINISTRADOR_NOMBRE
     * @param ADMINISTRADOR_NOMBRE
     */
  public function setADMINISTRADOR_NOMBRE($aDMINISTRADOR_NOMBRE){
      $this->ADMINISTRADOR_NOMBRE = $aDMINISTRADOR_NOMBRE;
  }
    /**
     * Devuelve el valor correspondiente a ADMINISTRADOR_APELLIDO
     * @return ADMINISTRADOR_APELLIDO
     */
  public function getADMINISTRADOR_APELLIDO(){
      return $this->ADMINISTRADOR_APELLIDO;
  }

    /**
     * Modifica el valor correspondiente a ADMINISTRADOR_APELLIDO
     * @param ADMINISTRADOR_APELLIDO
     */
  public function setADMINISTRADOR_APELLIDO($aDMINISTRADOR_APELLIDO){
      $this->ADMINISTRADOR_APELLIDO = $aDMINISTRADOR_APELLIDO;
  }
    /**
     * Devuelve el valor correspondiente a ADMINISTRADOR_USER
     * @return ADMINISTRADOR_USER
     */
  public function getADMINISTRADOR_USER(){
      return $this->ADMINISTRADOR_USER;
  }

    /**
     * Modifica el valor correspondiente a ADMINISTRADOR_USER
     * @param ADMINISTRADOR_USER
     */
  public function setADMINISTRADOR_USER($aDMINISTRADOR_USER){
      $this->ADMINISTRADOR_USER = $aDMINISTRADOR_USER;
  }
    /**
     * Devuelve el valor correspondiente a ADMINISTRADOR_PASS
     * @return ADMINISTRADOR_PASS
     */
  public function getADMINISTRADOR_PASS(){
      return $this->ADMINISTRADOR_PASS;
  }

    /**
     * Modifica el valor correspondiente a ADMINISTRADOR_PASS
     * @param ADMINISTRADOR_PASS
     */
  public function setADMINISTRADOR_PASS($aDMINISTRADOR_PASS){
      $this->ADMINISTRADOR_PASS = $aDMINISTRADOR_PASS;
  }


}
//That´s all folks!