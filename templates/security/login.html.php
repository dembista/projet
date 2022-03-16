<?php

use App\Core\Session;
$arrErrors=[];
if(Session::keyExist("errors")){
    $arrErrors=Session::getSession("errors");
    Session::removeKey("errors");
}
?>
<body class="body1">
<div class="login-box">
        <h2>Login</h2>
        <form action="<?=WEBROOT."security/seConnecter"?>" method="post">
          <?php if(isset($arrErrors['connexion'])): ?>
            <div class="alert alert-danger" role="alert">
              <strong> <?=$arrErrors['connexion']?></strong>
            </div>
          <?php endif ?>
          <div class="">
          <label class="text">login</label><br/><br/>
            <input type="text" name="login"><br/><br/>
            <?php if(isset($arrErrors['login'])): ?><br/>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['login']?></small>
        <?php endif ?>
          </div>
          <div class="">
          <label class="text">Password</label><br/><br/>
            <input type="password" name="password" required=""><br/><br/>
            <?php if(isset($arrErrors['password'])): ?>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['password']?></small>
        <?php endif ?>
          </div>
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button type="submit">Submit</button>
          </a>
        </form>
      </div>


      <style>
       
      </style>