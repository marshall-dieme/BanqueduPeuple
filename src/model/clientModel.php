<?php

    require_once 'compteModel.php';


    function getClients(){
        global $bdd;
        $request = "SELECT * FROM client";

        return $bdd->query($request)->fetchAll();
    }

    function getClientById($id){
        global $bdd;
        $sql = "SELECT DISTINCT * FROM client WHERE id=$id";
        
        return $bdd->query($sql)->fetchAll();
    }

    function getClientId($tel){
        global $bdd;

        $sql = "SELECT id FROM client WHERE tel='$tel'";
        return $bdd->query($sql)->fetch();
    }