<?php

use App\Core\Session;
$arrErrors=[];
if(Session::keyExist("errors")){
    $arrErrors=Session::getSession("errors");
    Session::removeKey("errors");
}
?>
<body class="body1">
  <div class="login-box" id="ch">
  <form method="post" action="<?=WEBROOT."chambre/addChambre"?>" class="center">
  <input type="hidden" name="id_chambre" value="<?=isset($chambres[0]->id_chambre)?$chambres[0]->id_chambre:'' ?>">
  <?php if(isset($arrErrors['connexion'])): ?>
    <div class="alert alert-danger" role="alert">
       <strong> <?=$arrErrors['connexion']?></strong>
    </div>
   <?php endif ?>
   <div class="form-group">
        <label for="exampleInputEmail1" class="set">Numero chambre</label>
        <input type="text" name="numero_chambre" class="form-control ctrl" id="exampleInputEmail1" value="<?=isset($chambres[0]->id_chambre)?$chambres[0]->numero_chambre:'' ?>">
        <?php if(isset($arrErrors['numero_chambre'])): ?>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['numero_chambre']?></small>
        <?php endif ?>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="set">Numero etage</label>
        <input type="text" name="numero_etage" class="form-control ctrl" id="exampleInputEmail1" value="<?=isset($chambres[0]->id_chambre)?$chambres[0]->numero_etage:'' ?>">
        <?php if(isset($arrErrors['numero_etage'])): ?>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['numero_etage']?></small>
        <?php endif ?>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="set">Type chambre</label>
        <input type="text" name="type_chambre" class="form-control ctrl" id="exampleInputEmail1" value="<?=isset($chambres[0]->id_chambre)?$chambres[0]->type_chambre:'' ?>">
        <?php if(isset($arrErrors['type_chambre'])): ?>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['type_chambre']?></small>
        <?php endif ?>
    </div>
    <div class="form-group">
        <!-- <label for="exampleInputEmail1" class="set">Pavillon</label>
        <select name="id_pavillon" id="">
          <option value="<?=isset($chambres[0]->id_chambre)?$chambres [0]->id_pavillon:"" ?>"><?=isset($chambres[0]->id_pavillon)?$chambres[0]->numero_pavillon:"" ?></option>
        <?php foreach($pavillon as $pavillons): ?>
        <option value="<?=$pavillons->id_pavillon ?>"><?=$pavillons->numero_pavillon ?></option>
        <?php endforeach; ?>
        </select> -->
        <?php if(isset($arrErrors['type_chambre'])): ?>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['type_chambre']?></small>
        <?php endif ?>
    </div> 
  <!--  -->
   <div>
   <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button type="submit">Submit</button>
          </a>
   </div>
</form>
  </div>
  <style>
.container{
    background-color: green;
    width: 350px;

    height: auto;

    position: absolute;

    left: 50%;

    top: 50%;

    transform: translate(-50%, -50%);

    -webkit-transform: translate(-50%, -50%);
}
.set{
  color: white;
}
.btn{
  background-color: #FAE423;
}
.est{
  color: white;
  text-decoration: underline;
}
.ctrl{
  border-radius: 20px;
}
  </style>

 <script>

 </script>