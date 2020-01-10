<?php

    require_once 'compteModel.php';


    function getClients(){
        global $bdd;
        $request = "SELECT DISTINCT client.id, cni, nom, prenom, adresse, mail, tel FROM client, compte WHERE client.id=idClient";

        return $bdd->query($request)->fetchAll();
    }

    function getClientById($id){
        global $bdd;
        $sql = "SELECT * FROM client WHERE id=$id";
        
        return $bdd->query($sql)->fetchAll();
    }

    function getClientId($tel){
        global $bdd;

        $sql = "SELECT id FROM client WHERE tel='$tel'";
        return $bdd->query($sql)->fetch();
    }