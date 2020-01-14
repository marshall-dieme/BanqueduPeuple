<?php
    require_once '../model/clientModel.php';
	  include_once '../../header.php';
    $clients = getClients();
?>
<div class="card shadow">
  <div class="card-header border-0">
    <h3 class="mb-0">Clients</h3>
  </div>
  <div class="table-responsive">
    <table class="table align-items-center table-flush">
      <thead class="thead-light">
        <tr>
          <th scope="col">N°</th>
          <th scope="col">NOM</th>
          <th scope="col">PRENOM</th>
          <th scope="col">ADRESSE</th>
          <th scope="col">TELEPHONE</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
      <?php
                foreach ($clients as $client) {
                    # code...
                    
                    $id = getClientId($client['tel']);
                    
                    echo "<tr>";
                        echo "<td>".$client['id']."</td>";
                        echo "<td>".$client['nom']."</td>";
                        echo "<td>".$client['prenom']."</td>";
                        echo "<td>".$client['adresse']."</td>";
                        echo "<td>".$client['tel']."</td>";
                        
                    echo "</tr>";
                }
            ?>
      </tbody>
    </table>
  </div>

</div>