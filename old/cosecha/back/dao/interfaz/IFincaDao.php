<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡¡Bienvenido al mundo del mañana!!  \\


interface IFincaDao {

    /**
     * Guarda un objeto Finca en la base de datos.
     * @param finca objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($finca);
    /**
     * Modifica un objeto Finca en la base de datos.
     * @param finca objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($finca);
    /**
     * Elimina un objeto Finca en la base de datos.
     * @param finca objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($finca);
    /**
     * Busca un objeto Finca en la base de datos.
     * @param finca objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($finca);
    /**
     * Lista todos los objetos Finca en la base de datos.
     * @return Array<Finca> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!