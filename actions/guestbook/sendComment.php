<?php

require('actions/database.php');

if(isset($_POST['sendCom'])){

    if(!empty($_POST['name']) AND !empty($_POST['comment'])){

        $send = $db->prepare('INSERT INTO guestbook ( name, comment ) VALUES ( ?, ? )');
        
        $send->execute(array($_POST['name'], $_POST['comment']));

        $new = 'Il y a un nouveau message dans le livre d\'or sur le portfolio';
        $retour = mail('a.hamm@codeur.online', 'Nouveau message sur le livre d\'or', $new, 'From : Alex H. Portfolio');
        
    }

}