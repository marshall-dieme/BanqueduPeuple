<?php
    require_once 'operationModel.php';

    function addClient($nom, $prenom, $adresse, $phone)
    {
        global $bdd;
        $request = "INSERT INTO client VALUES (null, '$nom', '$prenom', '$adresse', '$phone')";

        $bdd->exec($request);
        //RENVOIE LE NOMBRE DE LIGNES AFFECTEES.
        //RENVOIE 0 SI AUCUNE LIGNE N'A ETE INSERE.
        return $bdd->lastInsertId();
        //RENVOIE LE DERNIER IDENTIFIANT ENREGISTRE AU NIVEAU DE LA TABLE SPECIFIEE
    }

    function addAccount($solde, $idClient)
    {
        global $bdd;
        $numero = createNumCompte();
        $date = date('d-M-Y');

        $request = "INSERT INTO compte VALUES (null, '$numero', $solde, '$date', $idClient)";


        $compte = $bdd->exec($request);
        if ($compte > 0) {
            # code...
            return $bdd->lastInsertId();
                 
        }
    }

    function createNumCompte()
    {
        global $bdd;

        $query = "SELECT MAX(id) FROM compte";
        $result = $bdd->query($query)->fetch();
        $maxId = $result[0]+1;
        $numero = "BDP_".date('dmY')."_".$maxId;
        return $numero;
    }

    function getComptes(){
        global $bdd;
        $request = "SELECT compte.id, numCompte, dateCreation, solde, nom, prenom, client.id as idCli FROM compte, client WHERE idClient=client.id";
        return $bdd->query($request)->fetchAll();
    }

    function getIdClients(){
        global $bdd;
        $request = "SELECT DISTINCT idClient FROM compte";
        return $bdd->query($request)->fetchAll();
    }

    function findCompte($numero){
        global $bdd;
        $sql = "SELECT * FROM compte, client WHERE compte.idClient=client.id AND numCompte='$numero'";
        return $bdd->query($sql)->fetch();
    }

    function getCompteId($numero){
        global $bdd;

        $sql = "SELECT idCompte FROM compte WHERE numCompte='$numero'";

        return $bdd->query($sql)->fetch();
    }
    
    function getEtatCompte($numero){
        global $bdd;
        
        $sql = "SELECT blocker FROM compte WHERE numCompte='$numero'";
        
        return $bdd->query($sql)->fetch();
        
    }

    function blockAccount($id){
        global $bdd;
        $test = "SELECT bloque FROM compte WHERE id=$id";
        $result = $bdd->query($test)->fetch();
        if ($result[0] == 0) {
            # code...
            $sql = "UPDATE compte SET bloque = 1 WHERE id=$id";
            return "Bloque ".$bdd->exec($sql);
            
        }else {
            # code...
            $sql = "UPDATE compte SET bloque = 0 WHERE id=$id";
            return "Debloque ".$bdd->exec($sql);
        }
    }


    function deleteAccount($id){
        global $bdd;

        $sql = "DELETE FROM compte WHERE id=$id";

        return $bdd->exec($sql);
    }

    function findCompteById($id){
        global $bdd;
        $sql = "SELECT * FROM compte, client WHERE idClient=client.id AND compte.id=$id";
        return $bdd->query($sql)->fetch();
    }

    function getSolde($numero){
        global $bdd;
        $sql = "SELECT solde FROM compte WHERE numCompte = '$numero'";
        return $bdd->query($sql)->fetch();
    }