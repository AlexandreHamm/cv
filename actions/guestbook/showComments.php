<?php

require('actions/database.php');

$showGb = $db->prepare('SELECT name, comment FROM guestbook');
$showGb->execute(array());