<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Me ayudas con la tesis?  \\


interface ICosechaDao {

    /**
     * Guarda un objeto Cosecha en la base de datos.
     * @param cosecha objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($cosecha);
    /**
     * Modifica un objeto Cosecha en la base de datos.
     * @param cosecha objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($cosecha);
    /**
     * Elimina un objeto Cosecha en la base de datos.
     * @param cosecha objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($cosecha);
    /**
     * Busca un objeto Cosecha en la base de datos.
     * @param cosecha objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($cosecha);
    /**
     * Lista todos los objetos Cosecha en la base de datos.
     * @return Array<Cosecha> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!