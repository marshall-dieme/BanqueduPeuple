<?php
    require_once '../model/operationModel.php';
?>

<br><br>
<a class="waves-effects waves-light btn" href="?page=newOperation"><i class="material-icons left">add</i>Nouvelle Operation</a>
<br><br>
<table class="striped highlight centered responsive-table">
    <thead>
        <tr>
            <th>NUMERO</th>
            <th>DATE OPERATION</th>
            <th>NUMERO COMPTE</th>
            <th>TYPE</th>
            <th>MONTANT</th>
            <th>RESPONSABLE</th>
            <th>ACTIONS</th>
        </tr>
    </thead>

    <tbody>
            <?php
                
                foreach ($operations as $operation) {
                    # code...
                    echo "<tr>";
                        echo "<td>".$operation['numOp']."</td>";
                        echo "<td>".$operation['dateOper']."</td>";
                        echo "<td>".$operation['numCompte']."</td>";
                        echo "<td>".$operation['typeOp']."</td>";
                        echo "<td>".$operation['montant']."</td>";
                        echo "<td>".$operation['prenomUser']." ".$operation['nomUser']."</td>";
                        echo "<td><button class='waves-effects waves-light btn red' id='".$operation['idOper']."' name='supp'>Supprimer</button></td>";
                    echo "</tr>";
                }
            ?>
    </tbody>
</table>

<div id="supp" class="modal">
    <div class="modal-content">
      <p id="suppriRetour"></p>
      
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
  </div>