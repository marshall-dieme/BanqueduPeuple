<?php
    require_once '../model/compteModel.php';
    include_once '../../header.php';
?>

<div class="card shadow">
    <div class="card-header border-0">
        <h3 class="mb-0">Nouveau Compte</h3>
        <hr>
    </div>
    <form method="post" action="../controller/compteController.php">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-7">
                <div class="form-group">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-money-coins"></i></span>
                        </div>
                        <input class="form-control" placeholder="Solde" type="text" name="solde" autocomplete="off"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-header border-0">
            <h3 class="mb-0">Infos Clients</h3>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="form-group">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                        </div>
                        <input class="form-control" placeholder="Nom" type="text" name="nom"  autocomplete="off"/>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                        </div>
                        <input class="form-control" placeholder="Prenom" type="text" name="prenom"  autocomplete="off"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-7">
                <div class="form-group">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                        </div>
                        <input class="form-control" placeholder="Adresse" type="text" name="adresse" autocomplete="off" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-tablet-button"></i></span>
                        </div>
                        <input class="form-control" placeholder="Telephone" type="tel" name="tel" autocomplete="off" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-1">
                <button type="submit" class="btn btn-success" name="addAccount">Valider</button>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-1">
                <button type="reset" class="btn btn-danger">Annuler</button>
            </div>
        </div>
    </form>

</div>

