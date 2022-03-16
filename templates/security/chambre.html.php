
  <div class="container mt-5 ">
  <table class="GeneratedTable">
  <thead>
    <tr>
      <th scope="col" class="feter">#</th>
      <th scope="col" class="feter">Numero chambre</th>
      <th scope="col" class="feter">Numero etage</th>
      <th scope="col" class="feter">Type chambre</th>
      <th scope="col" class="feter">Action</th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($chambre as $chambres):?>
    <tr>
      <th scope="row" class="feter"><?=$chambres->id_chambre?></th>
      <td class="feter"><?=$chambres->numero_chambre?></td>
      <td class="feter"><?=$chambres->numero_etage?></td>
      <td class="feter"><?=$chambres->type_chambre?></td>
      <td class="feter">
            <p> 
                <a id="btn1" class=" btn btn-indigo"  href="<?=WEBROOT."chambre/editChambre/$chambres->id_chambre"?>">modifier</a> 
                <a id="btn2" class=" btn btn-gray" href="<?=WEBROOT."chambre/deleteChambre/$chambres->id_chambre"?>">archiver</a>
                <a href="<?=WEBROOT."etudiant/filtre/$chambres->id_chambre"?>"></a>
            </p>
        </td>
    </tr>
<?php endforeach ?>
  </tbody>
</table>
  </div>
