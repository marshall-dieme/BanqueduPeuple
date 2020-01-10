<?php
    session_start();
    require_once '../model/compteModel.php';
    require_once '../model/clientModel.php';

    
    if (isset($_POST['addAccount'])) {
        # code...
        extract($_POST);
        
        $idClient = addClient($cni, $nom, $prenom, $adresse, $mail, $tel);
        $result = addAccount($solde, $idClient);
        
        
       header('location:compte');
    }

    if (isset($_GET['numCompte'])) {
        # code...
        $numero = $_GET['numCompte'];
        

        $compte = findCompte($numero);

        if ($compte != NULL) {
            # code...
            print_r(json_encode($compte));

        } else {
            # code...
            echo "Aucun compte correspondant";
        }
        
    }

    if (isset($_GET['idBlock'])) {
        extract($_GET);
        $result = blockAccount($idBlock);

        echo $result;
    }


    if (isset($_GET['idSupp'])) {
        extract($_GET);
        $result = deleteAccount($idSupp);

        echo $result;
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $compte = findCompteById($id);
        print_r(json_encode($compte));
    }

    if (isset($_GET['solde']) && !empty($_GET['solde'])) {
        extract($_GET);

        $idClient = getClientId($tel);
        $result = addAccount($solde, $idClient[0]);
        echo $result;
    }

    