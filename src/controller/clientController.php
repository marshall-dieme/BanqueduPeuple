<?php
    session_start();
    require_once '../model/clientModel.php';

    if (isset($_GET['id'])) {
        # code...
        $id = $_GET['id'];
        $result = getClientById($id);
        print_r(json_encode($result));
    }
