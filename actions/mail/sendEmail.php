<?php

if(isset($_POST['sendMail'])){

    if(!empty($_POST['first_name']) AND !empty($_POST['last_name']) AND !empty($_POST['mail']) AND !empty($_POST['content'])){

        $email_to = "a.hamm@codeur.online";
        $email_subject = "Contact - Portfolio";
    
    }
}