<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...y esta no es la única frase que encontrarás...  \\


interface IFertilizanteDao {

    /**
     * Guarda un objeto Fertilizante en la base de datos.
     * @param fertilizante objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($fertilizante);
    /**
     * Modifica un objeto Fertilizante en la base de datos.
     * @param fertilizante objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($fertilizante);
    /**
     * Elimina un objeto Fertilizante en la base de datos.
     * @param fertilizante objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($fertilizante);
    /**
     * Busca un objeto Fertilizante en la base de datos.
     * @param fertilizante objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($fertilizante);
    /**
     * Lista todos los objetos Fertilizante en la base de datos.
     * @return Array<Fertilizante> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!