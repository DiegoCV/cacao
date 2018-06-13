<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Recuerda, cuando enciendas la molotov, debes arrojarla  \\


interface ICacaoteroDao {

    /**
     * Guarda un objeto Cacaotero en la base de datos.
     * @param cacaotero objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($cacaotero);
    /**
     * Modifica un objeto Cacaotero en la base de datos.
     * @param cacaotero objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($cacaotero);
    /**
     * Elimina un objeto Cacaotero en la base de datos.
     * @param cacaotero objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($cacaotero);
    /**
     * Busca un objeto Cacaotero en la base de datos.
     * @param cacaotero objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($cacaotero);
    /**
     * Lista todos los objetos Cacaotero en la base de datos.
     * @return Array<Cacaotero> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!