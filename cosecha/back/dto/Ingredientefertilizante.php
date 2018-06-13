<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Has escuchado hablar del grandioso señor Arciniegas?  \\


class Ingredientefertilizante {

  private $idIngredienteFertilizante;
  private $idIngrediente;
  private $idFertilizante;

    /**
     * Constructor de Ingredientefertilizante
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idIngredienteFertilizante
     * @return idIngredienteFertilizante
     */
  public function getIdIngredienteFertilizante(){
      return $this->idIngredienteFertilizante;
  }

    /**
     * Modifica el valor correspondiente a idIngredienteFertilizante
     * @param idIngredienteFertilizante
     */
  public function setIdIngredienteFertilizante($idIngredienteFertilizante){
      $this->idIngredienteFertilizante = $idIngredienteFertilizante;
  }
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


}
//That´s all folks!