<?php
    require_once 'database.php';

    function Depot($montant, $typeOp, $idCompte)
    {
        global $bdd;
        $numOP = createNumOp();
        $request ="INSERT INTO operation VALUES(null,'$numOP',DATE(NOW()), $montant, '$typeOp', 0, $idCompte)";
        $oper = $bdd->exec($request);
        if ($oper > 0) {
            $req = "UPDATE compte SET solde=solde+$montant WHERE idCompte=$idCompte";
            return $bdd->exec($req);
        }
    }

    function Retrait($montant, $type, $idCompte)
    {
        global $bdd;

        $numero = createNumOp();
        $query = "INSERT INTO operation VALUES (null, '$numero', DATE(NOW()), $montant, '$type', 0, $idCompte)";
        if ($bdd->exec($query) > 0) {
            # code...
            $query = "UPDATE compte SET solde=solde-$montant WHERE idCompte=$idCompte";
            return $bdd->exec($query);
        }
    }

    function Emprunt($montant, $typeOp, $idCompte){
        global $bdd;
        $numOp = createNumOp();
        $date = date('d-M-Y');

        $sql = "INSERT INTO operation VALUES (null, '$numOp', '$date', $montant, '$typeOp', 0, $idCompte)";
        if($bdd->exec($sql) > 0){
            $sql = "UPDATE compte SET solde=solde+$montant, pret=pret+$montant WHERE idCompte=$idCompte";
            return $bdd->exec($sql);
        }

    }

    function Remboursement($montant, $typeOp, $idCompte){
        global $bdd;
        $numOp = createNumOp();
        $date = date('d-M-Y');

        $sql = "INSERT INTO operation VALUES (null, '$numOp', '$date', $montant, '$typeOp', 0, $idCompte)";
        if($bdd->exec($sql) > 0){
            $sql = "UPDATE compte SET pret=pret-$montant WHERE idCompte='$idCompte'";
            return $bdd->exec($sql);
        }

    }

    function createNumOp()
    {
        global $bdd;
        $query = "SELECT MAX(idOper) FROM operation";
        $result = $bdd->query($query)->fetch();
        $maxId = $result[0] + 1;
        $numero = "OP_".date('dmY')."_".$maxId;
        return $numero;
    }

    function getOperation(){
        global $bdd;
        $request = "SELECT * FROM operation, compte, utilisateur WHERE operation.idCompte=compte.idCompte AND etat=0 AND operation.idUser=utilisateur.id AND etatOper=0 ORDER BY numOp DESC";
        return $bdd->query($request);
    }

    function supprimerOper($numero){
        global $bdd;

        $sql = "UPDATE operation SET etatOper=1 WHERE idOper=$numero";
        return $bdd->exec($sql);
    }

    function findOper($idCompte){
        global $bdd;

        $sql = "SELECT * FROM operation, utilisateur WHERE idCompte=$idCompte AND idUser=id";
        return $bdd->query($sql)->fetchAll();
    }

    