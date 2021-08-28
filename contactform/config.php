<?php
    try {
        //code..
        $bdd= new PDO('mysql:host=localhost;dbname=sendmessage;charset=utf8','root','');
    } catch (Exception $e) {
        //throw $th;
        die('Erreur'.$e->getMessage());

    }

?>