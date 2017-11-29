<?php

$host_db="localhost";
$dbname="";
$login_db="";
$password_db="";

// ToDo: make new sql 
$sql_qurey = "CREATE TABLE ``.`email` ( `id` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(256) NOT NULL , `date` DATE NOT NULL , `site` VARCHAR(32) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

?>
