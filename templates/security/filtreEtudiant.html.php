<body class="body2">
<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="28.1%">
              <col width="22.6%">
              <col width="30.8%">
              <col width="18.5%">
            </colgroup>
            <thead class="u-black u-table-header u-table-header-1">
            <tr>
            
          </tr>
            </thead>
            <tbody class="u-table-alt-palette-1-light-3 u-table-body">
           
            </tbody>
          </table>
        </div>
      </div>


      <!-- CSS Code: Place this code in the document's head (between the 'head' tags) -->
<style>

</style>

<!-- HTML Code: Place this code in the document's body (between the 'body' tags) where the table should appear -->
<div class="container mt-5">
<table class="GeneratedTable">
  <thead>
    <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Login</th>
            <th scope="col">Numero de chambre</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($etu as $etus ):?>
  <tr>
        <td> <?=$etus->nom?></td>
        <td><?=$etus->prenom?></td>
        <td><?=$etus->login?></td>
        <td><?=$etus->numero_chambre?></td>

  </tr>
  
<?php endforeach ?> 
  </tbody>
</table>
</div>