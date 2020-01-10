<?php
    session_start();

    require_once '../model/operationModel.php';
    require_once '../model/compteModel.php';

    if (isset($_GET['id'])) {
        # code...
        $id = $_GET['id'];
        $result = supprimerOper($id);
        if($result == 1){
            echo "OK";
        }else {
            echo "NON";
        }
    }

    if (isset($_GET['typeOp'])) {
        # code...
        extract($_GET);
        
        
        $result = "";
        switch ($typeOp) {
            case 'Depot':
                $retour = getCompteId($numCompte);
                $idCompte = $retour[0];
                $request = Depot($montant, $typeOp, $idCompte);
                if ($request > 0) {
                    $result = "OK";
                }
                break;
            case 'Retrait':
                $retour = getCompteId($numCompte);
                $idCompte = $retour[0];
                $bloque = getEtatCompte($numCompte);
                if($bloque[0] == 0){
                    $solde = getSolde($numCompte);
                   if ($montant+1000 < $solde[0]) {
                        $request = Retrait($montant, $typeOp, $idCompte);
                        if ($request > 0) {
                        $result = "OK";
                   }else {
                       $result = "Vous ne pouvez retirer un montant supérieur à votre solde";
                   }
                }
                }else {
                    echo "Le Compte est bloqué...Impossible d'effectuer un Retrait";
                }
                break;
            case 'Virement':
                $retour = getCompteId($numSender);
                $idCompte = $retour[0];
                $request = Retrait($montant, $typeOp, $idCompte);
                if($request > 0){
                    $retour = getCompteId($numReceiver);
                    $idCompte = $retour[0];
                    $request = Depot($montant, $typeOp, $idCompte);
                    if ($request > 0) {
                        $result = "OK";
                    }
                }
                break;
            case 'Emprunt':
                $retour = getCompteId($numCompte);
                $idCompte = $retour[0];
                $request = Emprunt($montant, $typeOp, $idCompte);
                if ($request > 0) {
                    $result = "OK";
                }
                break;
            case 'Remboursement':
                $retour = getCompteId($numCompte);
                $idCompte = $retour[0];
                $request = Remboursement($montant, $typeOp, $idCompte);
                if ($request > 0) {
                    $result = "OK";
                }
                break;
            
            default:
                # code...
                break;
        }

        echo $result;
    }


    if (isset($_GET['idCompte']) && !empty($_GET['idCompte'])) {
        $idCompte = $_GET['idCompte'];

        $operations = findOper($idCompte);
        print_r(json_encode($operations));
    }