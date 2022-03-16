<!-- 
<nav class="navbar navbar-expand-lg 
                navbar-dark bg-dark">
  
        <a class="navbar-brand" href="#"><img class="img" src="<?=WEBROOT.'img/ucag.jpeg'?>" alt=""></a>
  
        <button class="navbar-toggler" type="button"
            data-toggle="collapse" 
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
              
            <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" 
                id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?=WEBROOT."security/showUsers"?>">Personne</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=WEBROOT."security/showEtudiants"?>">Etudiant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=WEBROOT."security/showPavillon"?>">Pavillon</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=WEBROOT."security/showChambre"?>">Chambre</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" 
                        href="#" id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown" 
                        aria-haspopup="true" 
                        aria-expanded="false">
                        GÉRER
                    </a>
  
                    <div class="dropdown-menu" 
                        aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?=WEBROOT."etudiant/voirAddEtudiant"?>">
                        Ajouter etudiant
                        </a>
                          
                        <a class="dropdown-item" href="<?=WEBROOT."rp/voirAddRP"?>">
                        Ajouter RP
                        </a>
                        <a class="dropdown-item" href="<?=WEBROOT."chambre/voirAddChambre"?>">
                        Ajouter chambre
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?=WEBROOT."pavillon/voirAddPavillon"?>">
                        Ajouter pavillon
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" 
                        href="#" id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown" 
                        aria-haspopup="true" 
                        aria-expanded="false">
                        FILTRER
                    </a>
  
                    <div class="dropdown-menu" 
                        aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?=WEBROOT."security/showEtudiantChambre"?>">
                        Etudiant par chambre
                        </a>
                        <a class="dropdown-item" href="<?=WEBROOT."security/showChambresPavillons"?>">
                        Chambre par pavillon
                        </a>
                    </div>
                </li>
            </ul>
              
            <button class="btn my-2 
                my-sm-0 deconnexion" type="submit">
                <a class="dec" href="<?=WEBROOT."security/logout"?>">Deconnexion</a>
            </button>
        </div>
    </nav> -->



    <nav>
        <div class="logo">
            <img src="<?=WEBROOT."img/demba.jpg" ?>" alt="" id="logo">
        </div>
        <ul class="navbar-nav 
        mr-auto" id="ul">
                <li class="nav-item active">
                    <a class="nav-link" href="<?=WEBROOT."security/showUsers"?>">Personne</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=WEBROOT."security/showEtudiants"?>">Etudiant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=WEBROOT."security/showPavillon"?>">Pavillon</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=WEBROOT."security/showChambre"?>">Chambre</a>
                </li>
                <li class="nav-item">
                      <a class="nav-link" href="<?=WEBROOT."etudiant/voirAddEtudiant"?>">
                        Ajouter etudiant
                      </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=WEBROOT."rp/voirAddRP"?>">
                        Ajouter RP
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=WEBROOT."chambre/voirAddChambre"?>">
                        Ajouter chambre
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=WEBROOT."pavillon/voirAddPavillon"?>">
                        Ajouter pavillon
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=WEBROOT."security/showEtudiantChambre"?>">
                        Etudiant par chambre
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=WEBROOT."security/showChambresPavillons"?>">
                        Chambre par pavillon
                    </a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" 
                        href="#" id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown" 
                        aria-haspopup="true" 
                        aria-expanded="false">
                        GÉRER
                    </a>
  
                    <div class="dropdown-menu" 
                        aria-labelledby="navbarDropdown">
                       
                          
                        
                        
                        <div class="dropdown-divider"></div>
                        
                    </div>
                </li> -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" 
                        href="#" id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown" 
                        aria-haspopup="true" 
                        aria-expanded="false">
                        FILTRER
                    </a>
  
                    <div class="dropdown-menu" 
                        aria-labelledby="navbarDropdown">
                        
                        
                    </div>
                </li> -->
            </ul>
            <button class="btn my-2 
                my-sm-0 deconnexion" type="submit" id="dec">
                <a class="dec" href="<?=WEBROOT."security/logout"?>">Deconnexion</a>
            </button>
    </nav>
    <header>
        <button id="toggle" class="toggle">
            <i class="fa fa-bars" style="font-size:48px;color:white"></i>
        </button>
        <img src="<?=WEBROOT."img/ucag.jpeg" ?>" alt="" class="log" id="logo">
        <p class="tex">UNIVERSITÉ CHEIKH ANTA DIOP DE DAKAR</p>
    </header>