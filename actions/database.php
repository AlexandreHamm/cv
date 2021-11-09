<?php

if(preg_match ('#^/alexandreh.promo-90.codeur.online/#', $_SERVER['REQUEST_URI'])){
    $db = new PDO('mysql:host=localhost;dbname=alexandreh_cv;charset=utf8;', 'alexandreh', 'qCPwobB/1HD+vw==');
}else{
    $db = new PDO('mysql:host=localhost;dbname=cv;charset=utf8;', 'root', '');
}