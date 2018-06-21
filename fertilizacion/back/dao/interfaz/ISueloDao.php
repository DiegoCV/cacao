<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Damos paso a la anarquía...  \\


interface ISueloDao {

    /**
     * Guarda un objeto Suelo en la base de datos.
     * @param suelo objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($suelo);
    /**
     * Modifica un objeto Suelo en la base de datos.
     * @param suelo objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($suelo);
    /**
     * Elimina un objeto Suelo en la base de datos.
     * @param suelo objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($suelo);
    /**
     * Busca un objeto Suelo en la base de datos.
     * @param suelo objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($suelo);
    /**
     * Lista todos los objetos Suelo en la base de datos.
     * @return Array<Suelo> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!