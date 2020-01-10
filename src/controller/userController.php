<?php
    session_start();
    require_once '../model/userModel.php';

    
    extract($_POST);
    if ((isset($username) && !empty($username) && (isset($password) && !empty($password)))) {
        
            $log = connexionSeeker($username, $password);
            if ($log != null) {
        }
    } else {
        # code...
        echo "Connexion Impossible!";
    }
    
    if (isset($_GET['logout'])) {
        # code...
        session_unset();
        $_SESSION = array();
        header('location:../index.php');
    }
?>