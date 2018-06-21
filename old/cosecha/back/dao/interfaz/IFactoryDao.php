<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Alguna vez Anarchy se llamó Molotov ( u.u) *Nostalgia  \\

include_once realpath('../..').'\dao\entities\AdministradorDao.php';
include_once realpath('../..').'\dao\entities\AgendaDao.php';
include_once realpath('../..').'\dao\entities\CacaoteroDao.php';
include_once realpath('../..').'\dao\entities\Cacaotero_has_cultivoDao.php';
include_once realpath('../..').'\dao\entities\CosechaDao.php';
include_once realpath('../..').'\dao\entities\Cosecha_has_cacaoteroDao.php';
include_once realpath('../..').'\dao\entities\CultivoDao.php';
include_once realpath('../..').'\dao\entities\FertilizacionDao.php';
include_once realpath('../..').'\dao\entities\FertilizanteDao.php';
include_once realpath('../..').'\dao\entities\FincaDao.php';
include_once realpath('../..').'\dao\entities\IngredienteDao.php';
include_once realpath('../..').'\dao\entities\IngredientefertilizanteDao.php';
include_once realpath('../..').'\dao\entities\SectorDao.php';
include_once realpath('../..').'\dao\entities\SueloDao.php';


interface IFactoryDao {
	
     /**
     * Devuelve una instancia de AdministradorDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de AdministradorDao
     */
     public function getAdministradorDao($dbName);
     /**
     * Devuelve una instancia de AgendaDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de AgendaDao
     */
     public function getAgendaDao($dbName);
     /**
     * Devuelve una instancia de CacaoteroDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CacaoteroDao
     */
     public function getCacaoteroDao($dbName);
     /**
     * Devuelve una instancia de Cacaotero_has_cultivoDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Cacaotero_has_cultivoDao
     */
     public function getCacaotero_has_cultivoDao($dbName);
     /**
     * Devuelve una instancia de CosechaDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CosechaDao
     */
     public function getCosechaDao($dbName);
     /**
     * Devuelve una instancia de Cosecha_has_cacaoteroDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Cosecha_has_cacaoteroDao
     */
     public function getCosecha_has_cacaoteroDao($dbName);
     /**
     * Devuelve una instancia de CultivoDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CultivoDao
     */
     public function getCultivoDao($dbName);
     /**
     * Devuelve una instancia de FertilizacionDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de FertilizacionDao
     */
     public function getFertilizacionDao($dbName);
     /**
     * Devuelve una instancia de FertilizanteDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de FertilizanteDao
     */
     public function getFertilizanteDao($dbName);
     /**
     * Devuelve una instancia de FincaDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de FincaDao
     */
     public function getFincaDao($dbName);
     /**
     * Devuelve una instancia de IngredienteDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de IngredienteDao
     */
     public function getIngredienteDao($dbName);
     /**
     * Devuelve una instancia de IngredientefertilizanteDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de IngredientefertilizanteDao
     */
     public function getIngredientefertilizanteDao($dbName);
     /**
     * Devuelve una instancia de SectorDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de SectorDao
     */
     public function getSectorDao($dbName);
     /**
     * Devuelve una instancia de SueloDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de SueloDao
     */
     public function getSueloDao($dbName);

}
//That´s all folks!