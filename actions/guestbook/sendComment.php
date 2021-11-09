<?php

require('actions/database.php');

if(isset($_POST['validate'])){

    if(!empty($_POST['name']) AND !empty($_POST['comment'])){

        $send = $db->prepare('INSERT INTO guestbook ( name, comment ) VALUES ( ?, ? )');
        
        $send->execute(array($_POST['name'], $_POST['comment']));

        
    }

}