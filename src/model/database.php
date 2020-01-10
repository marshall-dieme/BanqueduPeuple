<?php
    require_once 'login.php';
    try {
        $bdd = new PDO($connect, $login, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,));
    } catch (\PDOException $th) {
        echo $th;
    }

    function countCompte(){
        global $bdd;
        $sql = "SELECT COUNT(*) FROM compte";
        return $bdd->query($sql)->fetch();
    }
    function countClient(){
        global $bdd;
        $sql = "SELECT COUNT(*) FROM client, compte WHERE idClient=client.id";
        return $bdd->query($sql)->fetch();
    }
   
    function SommeCompte(){
        global $bdd;
        $sql = "SELECT SUM(solde) FROM compte";
        return $bdd->query($sql)->fetch();
    }
    