<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- style CSS -->
        <link href="assets/css/style.css" rel="stylesheet">

        <title>Village Green</title> 
    </head>
    <body class="m-0 p-0" style='background-image: url("src/img/background_village.png");'>
        <div class="container">
            <div style='background-image: url("src/img/bande_milieu2.png");'>
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <header>
                            <!--  Logo Village Green -->
                            <a href="index.php"><img src="src/img/logo_village_green.png" alt="Logo Village Green" title="Logo Village Green" class="img-fluid" style="position: absolute; z-index: 1;" width="28%"></a>
                            
                            <!-- div pour aligner le menu entier au logo -->
                            <div style="position: relative; z-index: auto;">
                                <!--  Menu du Haut -->
                                <nav class="nav1 navbar navbar-expand-lg navbar-light bg-light" style="height: 54px;">
                                    <!--  Bouton avec une icon pour afficher une liste déroulante quand on passe en responsive -->
                                    <button class="navbar-toggler ml-auto" type="button" data-toggle="dropdown" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Panier<span class="badge badge-dark" style="margin-left:-0px">0</span>
                                        <span class="navbar-toggler-icon"></span>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Info</a>
                                            <a class="dropdown-item" href="#">Espace client </a>
                                            <a class="dropdown-item" href="#" onclick="location.href = '#'" >
                                                <img src="src/img/picto_panier.png" alt="Picto panier" title="Picto panier">
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"> <img src="src/img/picto_pays.png" alt="Picto pays" title="Picto pays"></a>
                                        </div>
                                    </button>
                                    <!--  Liste en ligne normal quand on passe une certaine limite du responsive -->
                                    <div class="collapse navbar-collapse" id="navTop">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Infos</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Espace client</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">
                                                    <img src="src/img/picto_panier.png" alt="Picto panier" title="Picto panier"><span class="badge badge-dark" style="margin-left:-10px">0</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">
                                                    <img src="src/img/picto_pays.png" alt="Picto pays" title="Picto pays">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>

                                <!--  Menu Milieu -->
                                <nav class="nav2 navbar navbar-expand-lg navbar-dark" style="background-color: #424242; height: 54px">
                                    <!--  Bouton avec une icon pour afficher une liste déroulante quand on passe en responsive -->
                                    <button class="navbar-toggler ml-auto" type="button" data-toggle="dropdown" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Produits<span class="navbar-toggler-icon"></span>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="products.php" onclick="location.href='products.php'">Produits</a>
                                            <a class="dropdown-item" href="#">Services</a>
                                            <a class="dropdown-item" href="#">Aide</a>
                                            <a class="dropdown-item" href="#">A propos</a>
                                        </div>
                                    </button>
                                    <!--  Liste en ligne normal quand on passe une certaine limite du responsive -->
                                    <div class="collapse navbar-collapse" id="navMid">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="products.php">Produits</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Services</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Aide</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">A propos</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>

                                <!--  Menu Bas + intégration BDD -->
                                <nav class="nav3 navbar navbar-expand-lg navbar-dark" style="background-color: #212121; height: 54px">
                                    <!--  Bouton avec une icon pour afficher une liste déroulante quand on passe en responsive -->
                                    <button class="navbar-toggler  ml-auto" type="button" data-toggle="dropdown" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Categories<span class="navbar-toggler-icon"></span>
                                        <div class="dropdown-menu ml-auto">
                                            <a class="dropdown-item" href="guitares.php" onclick="location.href='guitares.php'">Guit/Bass</a>
                                            <!-- <a class="dropdown-item" href="categorie/1">Guit/Bass</a> -->

                                            <a class="dropdown-item" href="#" onclick="location.href='#'">Batteries</a>
                                            <!-- <a class="dropdown-item" href="categorie/2">Batteries</a> -->
                                            
                                            <a class="dropdown-item" href="#" onclick="location.href='#'">Clavier</a>
                                            <!-- <a class="dropdown-item" href="categorie/3">Clavier</a> -->
                                            
                                            <a class="dropdown-item" href="#" onclick="location.href='#'">Studio</a>
                                            <!-- <a class="dropdown-item" href="categorie/4">Studio</a> -->
                                            
                                            <a class="dropdown-item" href="#" onclick="location.href='#'">Sono</a>
                                            <!-- <a class="dropdown-item" href="categorie/5">Sono</a> -->
                                            
                                            <a class="dropdown-item" href="#" onclick="location.href='#'">Cases</a>
                                            <!-- <a class="dropdown-item" href="categorie/6">Cases</a> -->
                                            
                                            <a class="dropdown-item" href="#" onclick="location.href='#'">Accessoires</a>
                                            <!-- <a class="dropdown-item" href="categorie/7">Accessoires</a> -->
                                            
                                            <a class="dropdown-item" href="#" onclick="location.href='#'">Instruments à vent</a>
                                            <!-- <a class="dropdown-item" href="categorie/8">Instruments à vent</a> -->
                                        </div>
                                    </button>
                                    <!--  Liste en ligne normal quand on passe une certaine limite du responsive -->
                                    <div class="collapse navbar-collapse" id="navBot">
                                        <ul class="navbar-nav ml-auto">
                                            <!-- Liste déroulante de Guit/Bass -->
                                            <li class="nav-item dropdown">
                                                <a class="nav-link " href="guitares.php" id="1Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Guit/Bass</a>
                                                <div class="dropdown-menu" aria-labelledby="1Dropdown">
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Guitares Electriques</a></button>
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Guitares Classiques</a></button>
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Guitares Acoustiques & Electro-Acoustiques</a></button>
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Basses Electriques</a></button>
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Basses Acoustiques</a></button>
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Basses Semi-Acoustiques</a></button>
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Ukulélés</a></button>
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Autres instruments à cordes pincées</a></button>
                                                </div>
                                            </li>
                                            <!-- Liste déroulante de Batteries -->
                                            <li class="nav-item dropdown">
                                                <a class="nav-link " href="#" id="2Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Batteries</a>
                                                <div class="dropdown-menu" aria-labelledby="2Dropdown">
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Batteries Electriques</a></button>
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Batteries Classiques</a></button>
                                                </div>
                                            </li>
                                            <!-- Liste déroulante de Clavier -->
                                            <li class="nav-item dropdown">
                                                <a class="nav-link " href="#" id="3Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clavier</a>
                                                <div class="dropdown-menu" aria-labelledby="3Dropdown">
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Pianos droits</a></button>
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Pianos à queue</a></button>
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Synthétiseur</a></button>
                                                </div>
                                            </li>
                                            <!-- Liste déroulante de Studio -->
                                            <li class="nav-item dropdown">
                                                <a class="nav-link " href="#" id="4Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Studio</a>
                                                <div class="dropdown-menu" aria-labelledby="4Dropdown">
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Micros</a></button>
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Enceintes</a></button>
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Casques</a></button>
                                                </div>
                                            </li>
                                            <!-- Liste déroulante de Sono -->
                                            <li class="nav-item dropdown">
                                                <a class="nav-link " href="#" id="5Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sono</a>
                                                <div class="dropdown-menu" aria-labelledby="5Dropdown">
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Enceintes</a></button>
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Tables de Mixage</a></button>
                                                </div>
                                            </li>
                                            <!-- Liste déroulante de Cases -->
                                            <li class="nav-item dropdown">
                                                <a class="nav-link " href="#" id="6Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cases</a>
                                                <div class="dropdown-menu" aria-labelledby="6Dropdown">
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Flight cases</a></button>
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Rack cases</a></button>
                                                </div>
                                            </li>
                                            <!-- Liste déroulante de Accessoires -->
                                            <li class="nav-item dropdown">
                                                <a class="nav-link " href="#" id="7Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accessoires</a>
                                                <div class="dropdown-menu" aria-labelledby="7Dropdown">
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Câbles</a></button>
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Casques Audio</a></button>
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Supports de Stockage</a></button>
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Pieds et supports</a></button>
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Sièges</a></button>
                                                </div>
                                            </li>
                                            <!-- Liste déroulante de Instruments à vent -->
                                            <li class="nav-item dropdown">
                                                <a class="nav-link " href="#" id="8Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Instruments à vent</a>
                                                <div class="dropdown-menu" aria-labelledby="8Dropdown">
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Saxophones</a></button>
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Trompettes</a></button>
                                                    <button class="dropdown-item" type="button"><a style="color:black" class="nav-link" href="#">Flûtes Traversières</a></button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </header>
                    </div>
                </div>