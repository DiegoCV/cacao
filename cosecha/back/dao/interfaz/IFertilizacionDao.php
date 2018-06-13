<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Alza el puño y ven! ¡En la hoguera hay de beber!  \\


interface IFertilizacionDao {

    /**
     * Guarda un objeto Fertilizacion en la base de datos.
     * @param fertilizacion objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($fertilizacion);
    /**
     * Modifica un objeto Fertilizacion en la base de datos.
     * @param fertilizacion objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($fertilizacion);
    /**
     * Elimina un objeto Fertilizacion en la base de datos.
     * @param fertilizacion objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($fertilizacion);
    /**
     * Busca un objeto Fertilizacion en la base de datos.
     * @param fertilizacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($fertilizacion);
    /**
     * Lista todos los objetos Fertilizacion en la base de datos.
     * @return Array<Fertilizacion> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!