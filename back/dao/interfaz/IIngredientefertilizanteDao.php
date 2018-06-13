<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Bueno ¿y ahora qué?  \\


interface IIngredientefertilizanteDao {

    /**
     * Guarda un objeto Ingredientefertilizante en la base de datos.
     * @param ingredientefertilizante objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($ingredientefertilizante);
    /**
     * Modifica un objeto Ingredientefertilizante en la base de datos.
     * @param ingredientefertilizante objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($ingredientefertilizante);
    /**
     * Elimina un objeto Ingredientefertilizante en la base de datos.
     * @param ingredientefertilizante objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($ingredientefertilizante);
    /**
     * Busca un objeto Ingredientefertilizante en la base de datos.
     * @param ingredientefertilizante objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($ingredientefertilizante);
    /**
     * Lista todos los objetos Ingredientefertilizante en la base de datos.
     * @return Array<Ingredientefertilizante> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!