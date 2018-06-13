<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    -¡UNO! -¡¡ +4 !!  \\


class Ingrediente {

  private $idIngrediente;
  private $componente;

    /**
     * Constructor de Ingrediente
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idIngrediente
     * @return idIngrediente
     */
  public function getIdIngrediente(){
      return $this->idIngrediente;
  }

    /**
     * Modifica el valor correspondiente a idIngrediente
     * @param idIngrediente
     */
  public function setIdIngrediente($idIngrediente){
      $this->idIngrediente = $idIngrediente;
  }
    /**
     * Devuelve el valor correspondiente a componente
     * @return componente
     */
  public function getComponente(){
      return $this->componente;
  }

    /**
     * Modifica el valor correspondiente a componente
     * @param componente
     */
  public function setComponente($componente){
      $this->componente = $componente;
  }


}
//That´s all folks!