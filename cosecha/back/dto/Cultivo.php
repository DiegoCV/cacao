<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Cuando eres Ingeniero en sistemas, pero tu vocación siempre fueron los memes  \\


class Cultivo {

  private $idCULTIVO;
  private $SECTOR_idSECTOR;
  private $CULTIVO_FECHASIEMBRA;

    /**
     * Constructor de Cultivo
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idCULTIVO
     * @return idCULTIVO
     */
  public function getIdCULTIVO(){
      return $this->idCULTIVO;
  }

    /**
     * Modifica el valor correspondiente a idCULTIVO
     * @param idCULTIVO
     */
  public function setIdCULTIVO($idCULTIVO){
      $this->idCULTIVO = $idCULTIVO;
  }
    /**
     * Devuelve el valor correspondiente a SECTOR_idSECTOR
     * @return SECTOR_idSECTOR
     */
  public function getSECTOR_idSECTOR(){
      return $this->SECTOR_idSECTOR;
  }

    /**
     * Modifica el valor correspondiente a SECTOR_idSECTOR
     * @param SECTOR_idSECTOR
     */
  public function setSECTOR_idSECTOR($sECTOR_idSECTOR){
      $this->SECTOR_idSECTOR = $sECTOR_idSECTOR;
  }
    /**
     * Devuelve el valor correspondiente a CULTIVO_FECHASIEMBRA
     * @return CULTIVO_FECHASIEMBRA
     */
  public function getCULTIVO_FECHASIEMBRA(){
      return $this->CULTIVO_FECHASIEMBRA;
  }

    /**
     * Modifica el valor correspondiente a CULTIVO_FECHASIEMBRA
     * @param CULTIVO_FECHASIEMBRA
     */
  public function setCULTIVO_FECHASIEMBRA($cULTIVO_FECHASIEMBRA){
      $this->CULTIVO_FECHASIEMBRA = $cULTIVO_FECHASIEMBRA;
  }


}
//That´s all folks!