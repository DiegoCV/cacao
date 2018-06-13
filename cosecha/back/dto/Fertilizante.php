<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Querido programador: Al escribir esto estoy triste. Nuestro presidente ha sido derrocado Y REEMPLAZADO POR EL BENÉVOLO SEÑOR ARCINIEGAS. TODOS AMAMOS A ARCINIEGAS Y A SU GLORIOSO RÉGIMEN. CON AMOR, EL EQUIPO DE ANARCHY  \(x.x)/  \\


class Fertilizante {

  private $idFertilizante;
  private $nombre;
  private $cantidad;
  private $tipo;

    /**
     * Constructor de Fertilizante
    */
     public function __construct(){}

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
     * Devuelve el valor correspondiente a cantidad
     * @return cantidad
     */
  public function getCantidad(){
      return $this->cantidad;
  }

    /**
     * Modifica el valor correspondiente a cantidad
     * @param cantidad
     */
  public function setCantidad($cantidad){
      $this->cantidad = $cantidad;
  }
    /**
     * Devuelve el valor correspondiente a tipo
     * @return tipo
     */
  public function getTipo(){
      return $this->tipo;
  }

    /**
     * Modifica el valor correspondiente a tipo
     * @param tipo
     */
  public function setTipo($tipo){
      $this->tipo = $tipo;
  }


}
//That´s all folks!