<?php
    
    session_start();

    if(isset($_POST['referrer']))
    {
        $_SESSION['referrer'] = $_POST['referrer'];
    }

    if(isset($_SESSION['referrer']))
    {
        echo  $_SESSION['referrer'];
    }
