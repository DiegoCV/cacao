<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Se buscan memeros profesionales. Contacto: El benévolo señor Arciniegas  \\


class Sector {

  private $idSECTOR;
  private $SECTOR_LARGO;
  private $SECTOR_ANCHO;
  private $FINCA_idFINCA;

    /**
     * Constructor de Sector
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idSECTOR
     * @return idSECTOR
     */
  public function getIdSECTOR(){
      return $this->idSECTOR;
  }

    /**
     * Modifica el valor correspondiente a idSECTOR
     * @param idSECTOR
     */
  public function setIdSECTOR($idSECTOR){
      $this->idSECTOR = $idSECTOR;
  }
    /**
     * Devuelve el valor correspondiente a SECTOR_LARGO
     * @return SECTOR_LARGO
     */
  public function getSECTOR_LARGO(){
      return $this->SECTOR_LARGO;
  }

    /**
     * Modifica el valor correspondiente a SECTOR_LARGO
     * @param SECTOR_LARGO
     */
  public function setSECTOR_LARGO($sECTOR_LARGO){
      $this->SECTOR_LARGO = $sECTOR_LARGO;
  }
    /**
     * Devuelve el valor correspondiente a SECTOR_ANCHO
     * @return SECTOR_ANCHO
     */
  public function getSECTOR_ANCHO(){
      return $this->SECTOR_ANCHO;
  }

    /**
     * Modifica el valor correspondiente a SECTOR_ANCHO
     * @param SECTOR_ANCHO
     */
  public function setSECTOR_ANCHO($sECTOR_ANCHO){
      $this->SECTOR_ANCHO = $sECTOR_ANCHO;
  }
    /**
     * Devuelve el valor correspondiente a FINCA_idFINCA
     * @return FINCA_idFINCA
     */
  public function getFINCA_idFINCA(){
      return $this->FINCA_idFINCA;
  }

    /**
     * Modifica el valor correspondiente a FINCA_idFINCA
     * @param FINCA_idFINCA
     */
  public function setFINCA_idFINCA($fINCA_idFINCA){
      $this->FINCA_idFINCA = $fINCA_idFINCA;
  }


}
//That´s all folks!