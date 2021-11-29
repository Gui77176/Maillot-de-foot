<?php
//connexion à la base de donnée et test de connexion
try{ 
$access=new PDO("mysql:host=localhost;dbname=monoshop;charset=utf8","root","");

$access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(Exception $e)
{
    $e->getMessage();
}

?>