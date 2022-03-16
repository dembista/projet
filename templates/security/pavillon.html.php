
  <div class="container mt-5 ">
  <table class="GeneratedTable">
  <thead>
    <tr>
        <th scope="col" class="feter">#</th>
        <th scope="col" class="feter">Numero pavillon</th>
        <th scope="col" class="feter">Nombre Etage</th>
        <th scope="col" class="feter">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($pavillon as $pavillons):?>
    <tr>
      <th scope="row" class="feter"><?=$pavillons->id_pavillon?></th>
      <td class="feter"><?=$pavillons->numero_pavillon?></td>
      <td class="feter"><?=$pavillons->nombre_etage?></td>
      <td class="feter">
            <p> 
                <a id="btn1" class=" btn btn-indigo"  href="#">modifier</a> 
                <a id="btn2" class=" btn btn-gray" href="#">archiver</a>
                <a href="#" id="btn1" class=" btn btn-indigo">filtrer</a>
            </p>
        </td>
    </tr>
<?php endforeach ?>  
  </tbody>
</table>
  </div>
