<?php
    require_once('connexion.php');
     // recuperation des données du formulaire

    if(!empty($_post['nom'] && $_post['email'] && $_post['tel'] && $_post['message'])){
        $nom = $_post['nom'];
        $email = $_post['email'];
        $tel = $_post['tel'];
        $message = $_post['message'];
        
        //fonction pour ajouter une données en base de données 

        function create($nom, $email, $tel, $message){
            $sql = "INSERT INTO MESSAGESUSER(ID, nom, email, tel, messages) VALUES ($nom, $email, $tel, $message)";

            if($con -> query($sql) === TRUE){

            }
        }
    }
   

?>
