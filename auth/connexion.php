<?php
//paramettre de connexion
    $serveur='localhost';
    $dbname ='tchouperDB';
    $user ='root';
    $motdepasse ='';


    //chaine de connexion 
     $con = new mysqli($serveur, $user,  $motdepasse, $dbname);
     
?>