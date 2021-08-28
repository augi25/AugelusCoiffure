<?php

require_once 'config.php';

if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
    $name = $_POST['nom'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['message'];

    $insert = $bdd->prepare('INSERT INTO messages(nom,email,sujet,msg) VALUES (:nom,:email,:sujet,:msg)');
    $insert -> execute(array(
        'nom' => $name,
        'email' => $email,
        'sujet' =>$subject,
        'msg' =>$msg
    ));
    echo'OK';   
}

?>