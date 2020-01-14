<?php
    require_once '../model/compteModel.php';
    include_once '../../header.php';
    $comptes = getComptes();
?>


<button class="btn btn-icon btn-3 btn-primary" type="button">
	<a href="nouveauCompte.php" class="text-white">
        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
        
        <span class="btn-inner--text">Nouveau Compte</span>
    </a>    
</button>
<br><br>
<div class="card shadow">
  <div class="card-header border-0">
    <h3 class="mb-0">Comptes</h3>
  </div>
  <div class="table-responsive">
    <table class="table align-items-center table-flush">
      <thead class="thead-light">
        <tr>
          <th scope="col">N°</th>
          <th scope="col">NUMERO</th>
          <th scope="col">SOLDE</th>
          <th scope="col">DATE DE CREATION</th>
          <th scope="col">CLIENT</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
      <?php
            foreach ($comptes as $compte) {
                echo "<tr>";
                    echo "<td>".$compte['id']."</td>";
                    echo "<td>".$compte['numCompte']."</td>";
                    echo "<td>".$compte['solde']."</td>";
                    echo "<td>".$compte['dateCreation']."</td>";
                    echo "<td>".$compte['prenom']." ".$compte['nom']."</td>";
                echo "</tr>";
            }
        ?>
      </tbody>
    </table>
  </div>

</div>