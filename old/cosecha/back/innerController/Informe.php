<?php
header("Content-disposition: attachment; filename=prueva.csv");
header("Content-type: text/csv");
readfile("C:/xampp/htdocs/cacao/cosecha/back/dao/entities/prueba.csv");
?>