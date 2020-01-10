<?php
    require_once 'database.php';

    function connexionSeeker($login, $pass)
    {
        global $bdd;
        
        $query = "SELECT * FROM utilisateur WHERE login='$login' AND password='$pass'";

        return $bdd->query($query)->fetch();
    }
