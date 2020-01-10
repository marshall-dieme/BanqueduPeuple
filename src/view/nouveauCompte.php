<?php
    require_once '../model/compteModel.php';
    include_once 'topBar.php';
?>
<form action="addAccount" method="post" id="accountForm">
    <br>
    <h3>Création d'un Compte</h3>
    <hr>
    <div class="row">
        
        <div class="input-field col s7">
            <i class="material-icons prefix">monetization_on</i>
            <input type="number" name="solde" id="" class="validate" autocomplete="off" required>
            <label for="solde">Solde</label>
        </div>
        <br>
    </div>
       
    <h3>Informations Client</h3>
    <hr>
    <div class="row">
        <div class="input-field col s7">
            <i class="material-icons prefix">contacts</i>
            <input type="text" name="cni" id="" class="validate" autocomplete="off" required>
            <label for="cni">CNI</label>
        </div>
    </div>
    <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">person</i>
                <input type="text" name="prenom" id="" class="validate" autocomplete="off" required>
                <label for="prenom">Prénom</label>
            </div>
            <div class="input-field col s5">
                <input type="text" name="nom" id="" class="validate" autocomplete="off" required>
                <label for="nom">Nom</label>
            </div>
    </div>
    <div class="row">
        <div class="input-field col s7">
            <i class="material-icons prefix">location_on</i>
            <input type="text" name="adresse" id="" class="validate" autocomplete="off" required>
            <label for="adresse">Adresse</label>
        </div>
        <div class="input-field col s7">
            <i class="material-icons prefix">mail</i>
            <input name="mail" type="email" class="validate" pattern="[a-z0-9._%+-]+@[a-z]+\.[a-z]{2,}$" required>
            <label for="mail">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right">exemple@exemple.com</span>
        </div>
        <div class="input-field col s7">
            <i class="material-icons prefix">phone</i>
            <input type="tel" name="tel" id="" class="validate" autocomplete="off" required>
            <label for="tel">Telephone</label>
        </div>
    </div>
    <div class="row">
        <div class="col s8"></div>
        <div class="col s4">
            <button type="reset" class="btn waves-effect waves-light red">Annuler</button>
            <span>&nbsp;</span>
            <button type="submit" class="btn waves-effect waves-light" name="addAccount">Valider</button>
        </div>
    </div>

</form>