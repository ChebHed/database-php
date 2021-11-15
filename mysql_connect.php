<?php
    require 'indentifiants.php';
   
    
    try{
        //creation de l'objet pdo
        $db=new PDO("mysql:host=$host;dbname=$bdd",$user,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
        
    }catch(PDOException $e){//erreur de connexion
        print"Erreur : ".$e->getMessage();
        die();
    }
 

?>