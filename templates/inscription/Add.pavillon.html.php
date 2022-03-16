<?php

use App\Core\Session;
$arrErrors=[];
if(Session::keyExist("errors")){
    $arrErrors=Session::getSession("errors");
    Session::removeKey("errors");
}
?>
<body class="body1">
  <div class="login-box" id="pv">
  <form method="post" action="<?=WEBROOT."pavillon/addPavillon"?>" class="center">
  <?php if(isset($arrErrors['connexion'])): ?>
    <div class="alert alert-danger" role="alert">
       <strong> <?=$arrErrors['connexion']?></strong>
    </div>
   <?php endif ?>
   <div class="form-group">
        <label for="exampleInputEmail1" class="set">Numero pavillon</label>
        <input type="text" name="numero_pavillon" class="form-control ctrl" id="exampleInputEmail1">
        <?php if(isset($arrErrors['numero_pavillon'])): ?>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['numero_pavillon']?></small>
        <?php endif ?>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="set">Nombre etage</label>
        <input type="text" name="nombre_etage" class="form-control ctrl" id="exampleInputEmail1" >
        <?php if(isset($arrErrors['nombre_etage'])): ?>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['nombre_etage']?></small>
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