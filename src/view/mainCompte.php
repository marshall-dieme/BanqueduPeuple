<?php
    require_once '../model/compteModel.php';
    include_once 'topBar.php';
    
?>
<br><br>
<a class="waves-effects waves-light btn" href="newCompte"><i class="material-icons left">add</i>Nouveau Compte</a>
<br><br>

<table class="striped highlight centered responsive-table">
    <thead>
        <tr>
            <th>Numero</th>
            <th>Date Création</th>
            <th>Infos Client</th>
            <th>Solde</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody id="afficheCompte">
            <?php
                $comptes = getComptes();
                
                foreach ($comptes as $compte) {
                    # code...
                    
                    echo "<tr>";
                        echo "<td>".$compte['numCompte']."</td>";
                        echo "<td>".$compte['dateCreation']."</td>";
                        echo "<td>".$compte['prenom']." ".$compte['nom']."</td>";
                        echo "<td>".$compte['solde']."</td>";
                        echo "<td>";
                            if ($compte['bloque'] == 0) {
                                echo "<button class='waves-effects waves-light btn blue' idBlock='".$compte['id']."' name='bloquer'>Bloquer</button>";
                            } else {
                                # code...
                                echo "<button class='waves-effects waves-light btn blue' idBlock='".$compte['id']."' name='bloquer'>Debloquer</button>";
                            }
                            
                        echo " 
                            <button class='waves-effects waves-light btn' idDetail='".$compte['id']."' name='detail'>Détails</button>
                            <button class='waves-effects waves-light btn red' idSupp='".$compte['id']."' name='supprimer'>Supprimer</button>
                        </td>";
                    echo "</tr>";
                }
            ?>
    </tbody>
</table>

<div id="modal3" class="modal">
    <div class="modal-content" id="infoClient">
        <h5>Infos Client</h5>
        <hr>
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">person</i>
                <input type="text" name="" id="nom" readonly>
            </div>
            <div class="input-field col s6">
                <input type="text" name="" id="prenom" readonly>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <i class="material-icons prefix">location_on</i>
                <input type="text" name="" id="adresse" readonly>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">mail</i>
                <input type="text" name="" id="mail" readonly>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">phone</i>
                <input type="text" name="" id="phone" readonly>
            </div>
        </div>
        <h5>Infos du Compte</h5>
        <hr>
        <div class="row">
            <div class="col s4"></div>
            <div class="input-field col s4">
                <i class="material-icons prefix">monetization_on</i>
                <input type="text" name="" id="solde">
            </div>
            <div class="col s4"></div>
        </div>
       
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>


<div id="modalCompte" class="modal">
    <div class="modal-content">
      
      <p id="retourCompte"></p>
    </div>
    <div class="modal-footer">
      <button href="#!" class="modal-close waves-effect waves-green btn-flat" name="reload">Ok</button>
    </div>
  </div>



  <div id="modal4" class="modal">
    <div class="modal-content" id="infoClient">
        <h5>Infos Client</h5>
        <hr>
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">person</i>
                <input type="text" name="" id="nomD" readonly>
            </div>
            <div class="input-field col s6">
                <input type="text" name="" id="prenomD" readonly>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <i class="material-icons prefix">location_on</i>
                <input type="text" name="" id="adresseD" readonly>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">mail</i>
                <input type="text" name="" id="mailD" readonly>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">phone</i>
                <input type="text" name="" id="phoneD" readonly>
            </div>
        </div>
        <h5>Infos du Compte</h5>
        <hr>
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">account_balance_wallet</i>
                <input type="text" name="" id="numCompteD" readonly>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">monetization_on</i>
                <input type="text" name="" id="soldeD">
            </div>
            
        </div>
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">event</i>
                <input type="text" name="" id="dateD">
            </div>
           
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>