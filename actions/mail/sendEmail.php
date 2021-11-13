<?php

if(isset($_POST['sendMail'])){

    if(!empty($_POST['first_name']) AND !empty($_POST['last_name']) AND !empty($_POST['mail']) AND !empty($_POST['content'])){

        $email_to = "a.hamm@codeur.online";
        $email_subject = "Contact - Portfolio";

        $mail = 'Nom: '+$_POST['last_name']+' Prenom: '+$_POST['first_name']+' Email: '+$_POST['mail']+'<br><br>'+$_POST['content']+'';
        $retour = mail(
            'a.hamm@codeur.online', 
            'Un utilisateur vous a contacté via le formulaire de contact', 
            $mail,
            'From : portfolio'
        );
    
    }
}