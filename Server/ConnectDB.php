<?php

    try{
        $db = new PDO('mysql:host=localhost;dbname=smartbike', 'root', '');
    }catch(PDOException $e){
        print "error".$e->getMessage().'<br>';
        die();
    }

?>