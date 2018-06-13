<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Dispongo de doce horas de adelanto, puedo de decárselas a ella  \\


class Cosecha {

  private $idCOSECHA;
  private $CULTIVO_idCULTIVO;
  private $COSECHA_SACOS;
  private $COSECHAFECHA_REGISTRO;

    /**
     * Constructor de Cosecha
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idCOSECHA
     * @return idCOSECHA
     */
  public function getIdCOSECHA(){
      return $this->idCOSECHA;
  }

    /**
     * Modifica el valor correspondiente a idCOSECHA
     * @param idCOSECHA
     */
  public function setIdCOSECHA($idCOSECHA){
      $this->idCOSECHA = $idCOSECHA;
  }
    /**
     * Devuelve el valor correspondiente a CULTIVO_idCULTIVO
     * @return CULTIVO_idCULTIVO
     */
  public function getCULTIVO_idCULTIVO(){
      return $this->CULTIVO_idCULTIVO;
  }

    /**
     * Modifica el valor correspondiente a CULTIVO_idCULTIVO
     * @param CULTIVO_idCULTIVO
     */
  public function setCULTIVO_idCULTIVO($cULTIVO_idCULTIVO){
      $this->CULTIVO_idCULTIVO = $cULTIVO_idCULTIVO;
  }
    /**
     * Devuelve el valor correspondiente a COSECHA_SACOS
     * @return COSECHA_SACOS
     */
  public function getCOSECHA_SACOS(){
      return $this->COSECHA_SACOS;
  }

    /**
     * Modifica el valor correspondiente a COSECHA_SACOS
     * @param COSECHA_SACOS
     */
  public function setCOSECHA_SACOS($cOSECHA_SACOS){
      $this->COSECHA_SACOS = $cOSECHA_SACOS;
  }
    /**
     * Devuelve el valor correspondiente a COSECHAFECHA_REGISTRO
     * @return COSECHAFECHA_REGISTRO
     */
  public function getCOSECHAFECHA_REGISTRO(){
      return $this->COSECHAFECHA_REGISTRO;
  }

    /**
     * Modifica el valor correspondiente a COSECHAFECHA_REGISTRO
     * @param COSECHAFECHA_REGISTRO
     */
  public function setCOSECHAFECHA_REGISTRO($cOSECHAFECHA_REGISTRO){
      $this->COSECHAFECHA_REGISTRO = $cOSECHAFECHA_REGISTRO;
  }


}
//That´s all folks!