<?php

use App\Core\Session;
$arrErrors=[];
if(Session::keyExist("errors")){
    $arrErrors=Session::getSession("errors");
    Session::removeKey("errors");
}
?>
  <div class="container" >
  <form method="post" action="<?=WEBROOT."Inscription/inscription"?>" class="center">
  <?php if(isset($arrErrors['connexion'])): ?>
    <div class="alert alert-danger" role="alert">
       <strong> <?=$arrErrors['connexion']?></strong>
    </div>
   <?php endif ?>
   <div class="form-group">
        <label for="exampleInputEmail1" class="set">NOM</label>
        <input type="text" name="login" class="form-control ctrl" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <?php if(isset($arrErrors['login'])): ?>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['login']?></small>
        <?php endif ?>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="set">PRENOM</label>
        <input type="text" name="login" class="form-control ctrl" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <?php if(isset($arrErrors['login'])): ?>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['login']?></small>
        <?php endif ?>
    </div>
  <div class="form-group">
        <label for="exampleInputEmail1" class="set">Email address</label>
        <input type="text" name="login" class="form-control ctrl" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <?php if(isset($arrErrors['login'])): ?>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['login']?></small>
        <?php endif ?>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1" class="set">Password</label>
        <input type="password" name="password"  class="form-control ctrl" id="exampleInputPassword1" placeholder="Password">
        <?php if(isset($arrErrors['password'])): ?>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['password']?></small>
        <?php endif ?>
    </div>
   <div>
      <button type="submit" class="btn">Submit</button>
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