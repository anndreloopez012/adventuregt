<?php

    $servidor="mysql:bdname=".BD.";host=".SERVIDOR;

    try{

        $pdo= new PDO($servidor,USUARIO,PASSWORD,
            array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
        );

        echo "<script> alert('conectados...')</script>";
    }catch(PDOException $e){  
        echo "<script> alert('...ERROR...')</script>";
      }
?>