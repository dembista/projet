<?php

use App\Core\Session;
$arrErrors=[];
if(Session::keyExist("errors")){
    $arrErrors=Session::getSession("errors");
    Session::removeKey("errors");
}
?>
<body class="body1">
<div class="login-box" id="ds">
        <form method="post" action="<?=WEBROOT."etudiant/addEtudiant"?>" id="form">
  <?php if(isset($arrErrors['connexion'])): ?>
    <div class="alert alert-danger" role="alert">
       <strong> <?=$arrErrors['connexion']?></strong>
    </div>
   <?php endif ?>
  <div class="form-group" id="div1">
   <p></p><br/>
        <label for="exampleInputEmail1">Nom</label>
        <input type="text" name="nom" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Entrer votre nom">
        <?php if(isset($arrErrors['nom'])): ?>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['nom']?></small>
        <?php endif ?><br/>
    </div>
    <div class="form-group" id="div2">
        <label for="exampleInputPassword1">Prenom</label>
        <input type="" name="prenom"  class="form-control" id="username" placeholder="Entrer votre Prenom">
        <?php if(isset($arrErrors['prenom'])): ?>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['prenom']?></small>
        <?php endif ?><br/>
    </div>
    <div class="form-group" id="div3">
        <label for="exampleInputPassword1">Email</label>
        <input type="email" name="login"  class="form-control" id="email" placeholder="Entrer votre Email">
        <?php if(isset($arrErrors['login'])): ?>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['login']?></small>
        <?php endif ?><br/>
    </div>
    <div class="form-group" id="div4">
        <label for="exampleInputPassword1">Téléphone</label>
        <input type="tel" name="telephone"  class="form-control" id="telephone" placeholder="Entrer votre numéro Téléphone">
        <?php if(isset($arrErrors['telephone'])): ?>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['telephone']?></small>
        <?php endif ?>
    </div>
    <div class="form-group" id="div5">
        <label for="exampleInputPassword1">Date Naissance</label>
        <input type="date" name="date_naisse"  class="form-control" id="exampleInputPassword1" placeholder="Entrer votre date de naissance">
        <?php if(isset($arrErrors['date_naisse'])): ?>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['date_naisse']?></small>
        <?php endif ?>
    </div>
    <div id="div6">Statut<br/>
            <select id="select" name="type">
                <option value="" >choisir... </option>
                <option value="non_boursier" >Non Boursier</option>
                <option value="boursier">Boursier </option>
            </select>
       
    </div><br/>
      <div id="adresse" class="form-group" id="div7">
        <label  for="">Adresse</label>
        <input type="text"class="form-control" name="adresse" id="input1" aria-describedby="helpId" placeholder="">
        <?php if(isset($arrErrors['adresse'])): ?>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['adresse']?></small><br/>
        <?php endif ?><br/>
      </div>
      <div id="bourse" id="div8">
        <label id="label1" for="">Bourse</label>
        <input type="number"class="form-control" name="etat" id="input2" aria-describedby="helpId" placeholder="">
        <?php if(isset($arrErrors['etat'])): ?>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['etat']?></small><br/>
        <?php endif ?></div><br/>
        <!-- <div id="bourse">
        <label id="label1" for="">Chambre</label>
        
         <input type="number"class="form-control" name="etat" id="input2" aria-describedby="helpId" placeholder=""> 
        <?php if(isset($arrErrors['etat'])): ?>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['etat']?></small><br/>
        <?php endif ?></div> -->
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

 <script>
// $(document).ready(function(){
//         $("select").change(function(){
//             $(this).find("option:selected").each(function(){
//                 var val = $(this).attr("value");
//                 if(val){
//                     $(".msg").not("." + val).hide();
//                     $("." + val).show();
//                 } else{
//                     $(".msg").hide();
//                 }
//             });
//         }).change();
//     });
let non_boursier = document.getElementById("non_boursier");
let boursier = document.getElementById("boursier");
let d1 = document.getElementById("adresse");
let d2 = document.getElementById("bourse");
select.addEventListener("click", () => {
  if(select.value == "non_boursier"){
    d1.style.display = "block";
  } else {
    d1.style.display = "none";
  }

  if(select.value == "boursier"){
    d2.style.display = "block";
  } else {
    d2.style.display = "none";
  }
})

function togg(){
  if(getComputedStyle(d2).display != "none"){
    d2.style.display = "none";
  } else {
    d2.style.display = "block";
  }
};
boursier.onclick = togg;
 </script>