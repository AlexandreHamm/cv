<?php

session_start();
    if(!isset($_SESSION['date'])){
        $_SESSION['date'] = date('m_d_y');
    }
    if($_SESSION['date'] != date('m_d_y')){
        session_destroy();
    }