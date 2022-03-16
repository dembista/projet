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
            <th scope="col" class="feter">#</th>
            <th scope="col" class="feter">Nom</th>
            <th scope="col" class="feter">Prenom</th>
            <th scope="col" class="feter">Login</th>
            <th scope="col" class="feter">Role</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($users as $user):?>
                <tr>
                    <th scope="row" class="feter"><?=$user->id_user?></th>
                    <td class="feter"><?=$user->nom?></td>
                    <td class="feter"><?=$user->prenom?></td>
                    <td class="feter"><?=$user->login?></td>
                    <td class="feter"><?=$user->role?></td>
                </tr>
            <?php endforeach ?> 
  </tbody>
</table>
</div>

<!-- Codes by Quackit.com -->

