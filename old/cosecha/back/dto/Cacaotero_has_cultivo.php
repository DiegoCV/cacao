<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Vaya! ¡Al fin harás algo mejor que una calculadora!  \\


class Cacaotero_has_cultivo {

  private $CACAOTERO_idCACAOTERO;
  private $CULTIVO_idCULTIVO;

    /**
     * Constructor de Cacaotero_has_cultivo
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a CACAOTERO_idCACAOTERO
     * @return CACAOTERO_idCACAOTERO
     */
  public function getCACAOTERO_idCACAOTERO(){
      return $this->CACAOTERO_idCACAOTERO;
  }

    /**
     * Modifica el valor correspondiente a CACAOTERO_idCACAOTERO
     * @param CACAOTERO_idCACAOTERO
     */
  public function setCACAOTERO_idCACAOTERO($cACAOTERO_idCACAOTERO){
      $this->CACAOTERO_idCACAOTERO = $cACAOTERO_idCACAOTERO;
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


}
//That´s all folks!