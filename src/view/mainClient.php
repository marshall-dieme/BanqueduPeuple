<?php
    require_once '../model/clientModel.php';
    include_once 'topBar.php';
    $clients = getClients();
?>
<br><br><br><br>
<table class="striped highlight centered responsive-table">
    <thead>
        <tr>
            <th>CNI</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Adresse</th>
            <th>E-mail</th>
            <th>Telephone</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
            <?php
                foreach ($clients as $client) {
                    # code...
                    
                    $id = getClientId($client['tel']);
                    
                    echo "<tr>";
                        echo "<td>".$client['cni']."</td>";
                        echo "<td>".$client['nom']."</td>";
                        echo "<td>".$client['prenom']."</td>";
                        echo "<td>".$client['adresse']."</td>";
                        echo "<td>".$client['mail']."</td>";
                        echo "<td>".$client['tel']."</td>";
                        echo "<td><button class='waves-effects waves-light btn supp' id='".$id[0]."' name='ajout'>Ajouter Compte</button></td>";
                    echo "</tr>";
                }
            ?>
    </tbody>
</table>

<div id="AjoutCompte" class="modal">
    <form action="" method="post" id="insert">
        <div class="modal-content" id="infoClient">
            <h5>Infos Client</h5>
            <hr>
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">person</i>
                    <input type="text" name="nom" id="nomA" readonly>
                    
                </div>
                <div class="input-field col s6">
                    <input type="text" name="prenom" id="prenomA" readonly>
                    <label for="prenom"></label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <i class="material-icons prefix">location_on</i>
                    <input type="text" name="adresse" id="adresseA" readonly>
                    
                </div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">mail</i>
                    <input type="text" name="mail" id="mailA" readonly>
                    <label for="mail"></label>
                </div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">phone</i>
                    <input type="tel" name="tel" id="phoneA" readonly>
                    
                </div>
            </div>
            <h5>Infos du Compte</h5>
            <hr>
            <div class="row">
                <div class="col s3"></div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">monetization_on</i>
                    <input type="number" name="solde" id="" autofocus>
                    <label for="solde">Solde</label>
                </div>
                
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn waves-effect waves-light">Creer</button>
        </div>
    </form>
  </div>


  <div id="resultAdd" class="modal">
    <div class="modal-content">
      <h4></h4>
      <p id="resultText">A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>