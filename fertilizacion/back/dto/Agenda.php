<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No te olvides de quitar mis comentarios  \\


class Agenda {

  private $idAGENDA;
  private $CULTIVO_idCULTIVO;
  private $AGENDA_COMENTARIO;
  private $AGENDAFECHA_REGISTRO;
  private $AGENDA_TIPO;

    /**
     * Constructor de Agenda
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idAGENDA
     * @return idAGENDA
     */
  public function getIdAGENDA(){
      return $this->idAGENDA;
  }

    /**
     * Modifica el valor correspondiente a idAGENDA
     * @param idAGENDA
     */
  public function setIdAGENDA($idAGENDA){
      $this->idAGENDA = $idAGENDA;
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
     * Devuelve el valor correspondiente a AGENDA_COMENTARIO
     * @return AGENDA_COMENTARIO
     */
  public function getAGENDA_COMENTARIO(){
      return $this->AGENDA_COMENTARIO;
  }

    /**
     * Modifica el valor correspondiente a AGENDA_COMENTARIO
     * @param AGENDA_COMENTARIO
     */
  public function setAGENDA_COMENTARIO($aGENDA_COMENTARIO){
      $this->AGENDA_COMENTARIO = $aGENDA_COMENTARIO;
  }
    /**
     * Devuelve el valor correspondiente a AGENDAFECHA_REGISTRO
     * @return AGENDAFECHA_REGISTRO
     */
  public function getAGENDAFECHA_REGISTRO(){
      return $this->AGENDAFECHA_REGISTRO;
  }

    /**
     * Modifica el valor correspondiente a AGENDAFECHA_REGISTRO
     * @param AGENDAFECHA_REGISTRO
     */
  public function setAGENDAFECHA_REGISTRO($aGENDAFECHA_REGISTRO){
      $this->AGENDAFECHA_REGISTRO = $aGENDAFECHA_REGISTRO;
  }
    /**
     * Devuelve el valor correspondiente a AGENDA_TIPO
     * @return AGENDA_TIPO
     */
  public function getAGENDA_TIPO(){
      return $this->AGENDA_TIPO;
  }

    /**
     * Modifica el valor correspondiente a AGENDA_TIPO
     * @param AGENDA_TIPO
     */
  public function setAGENDA_TIPO($aGENDA_TIPO){
      $this->AGENDA_TIPO = $aGENDA_TIPO;
  }


}
//That´s all folks!