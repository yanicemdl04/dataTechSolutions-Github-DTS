<?php session_start();

setcookie('pseudo', 'valeur', time() + (30 * 24 * 3600));
var_dump($_COOKIE);



?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>data01solutions</title>
      <meta name="author" content="Mundele Yanice" />
<meta
  name="informatique service & formation"
  content="Nous vous proposons une approche personnalisée qui répond à vos besoins spécifiques. Nous vous accompagnons dans toutes les étapes de votre projet, de l'audit à la mise en place des mesures de sécurité, en passant par la formation et la gestion des incidents." />

        <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<script src="https://kit.fontawesome.com/3796f395ff.js" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/universal/2-0-1/vendor/font-awesome/css/font-awesome.min.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/jumbotron/">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https : //fonts.googleapis.com/css2?family= Quicksand :wght@300 & display=swap" rel="stylesheet">
  
    <link rel="stylesheet" type="text/css" href="computers.css">
    </head>

    <body>

        <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">iCESS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formation.html">Formations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#favs">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#foot">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <header>
    <!-- carousel -->
  
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('christopher.jpg')">
        <div class="carousel-caption">
          <h1>DEVELOPPEMENT APPLICATIF</h1>
          <p>Le processus de création d'applications logicielles</p>
        </div>
        </div>
        <div class="carousel-item" style="background-image: url('this.jpg')">
        <div class="carousel-caption">
          <h1>FORMATIONS</h1>
          <p>Gagner en savoir, maitrise et en experience!</p>
        </div>
        </div>
        <div class="carousel-item" style="background-image: url('Cloud2.png')">
        <div class="carousel-caption">
          <h1>CLOUD COMPUTING</h1>
          <p>Sauvegarder vos données en toute quietude</p>
        </div>
        </div>
        <div class="carousel-item" style="background-image: url('kevin.jpg')">
          <div class="carousel-caption">
            <h1>RESEAUX</h1>
            <p>Apprenez plus sur le reseau informatique</p>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('AI3.png')">
          <div class="carousel-caption">
            <h1>DATA SCIENCE</h1>
            <p>analyser et interpréter des données afin d'en tirer des informations</p>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('maximal.jpg')">
          <div class="carousel-caption">
            <h1>CYBERSECURITY</h1>
            <p>Securisez vos données en un clic</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      </div>
  
  </header>
  
  <!-- Page Content -->
  <!-- jumbotron -->

  <main>
    <div class="container py-4" id="fav">
      <header class="pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
        <h1><span class="fs-4">Nos services</span></h1>
        </a>
      </header>
  
      <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold">A PROPOS DE L'ENTREPRISE</h1>
          <p class="col-md-8 fs-4">Nous sommes une entreprise informatique spécialisée dans la cybersécurité et la data science.
            Nous vous proposons une approche personnalisée qui répond à vos besoins spécifiques. Nous vous accompagnons dans toutes les étapes de votre projet, de l'audit à la mise en place des mesures de sécurité, en passant par la formation et la gestion des incidents.</p>
          <button class="btn btn-primary btn-lg" type="button"><a href="formation.html" style="color: white;">Voir plus </a></button>
        </div>
      </div>

      
    <div class="fav" id="favs" style="margin-bottom: 100px;">  
      <div class="row align-items-md-stretch">
        <div class="col-md-6">
          <div class="h-100 p-5 bg-body-tertiary border rounded-3">
            <h2><a href="reseaux.html"><img src="iconeE.png"></a>  Réseaux</h2>
            <p>Un réseau informatique est un ensemble d'appareils informatiques connectés entre eux afin de partager des ressources, telles que des données, des imprimantes, des scanners, des serveurs et des applications. Les réseaux informatiques peuvent être de tailles et de complexités variables, allant d'un petit réseau domestique à un réseau d'entreprise mondial.</p>
            <button class="btn btn-outline-primary" type="button"><a href="reseaux.html">En savoir plus</a></button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="h-100 p-5 bg-body-tertiary border rounded-3">
            <h2><a href="cloud.html"><img src="iconeA.png"></a> Cloud computing</h2>
            <p>Le cloud computing est un modèle de calcul qui permet aux utilisateurs d'accéder à des ressources informatiques, telles que le stockage, le calcul et les applications, via Internet. Les ressources cloud sont gérées par un fournisseur de services cloud, qui peut être une entreprise privée, un gouvernement ou une université</p>
            <button class="btn btn-outline-primary" type="button"><a href="cloud.html">En savoir plus</a></button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="h-100 p-5 bg-body-tertiary border rounded-3">
            <h2><a href="cyberspace.html"><img src="icong.png"></a> Cybersecurity</h2>
            <p>La cybersécurité est l'ensemble des techniques et des mesures mises en place pour protéger les systèmes informatiques, les réseaux et les données contre les cyberattaques. Les cyberattaques peuvent être menées par des individus, des groupes ou des États. </p>
            <button class="btn btn-outline-primary" type="button"><a href="cyberspace.html">En savoir plus</a></button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="h-100 p-5 bg-body-tertiary border rounded-3">
            <h2><a href="applicatif.html"><img src="iconB.png"></a> Développement applicatif</h2>
            <p>Le développement applicatif est le processus de création d'applications logicielles. Il s'agit d'un processus complexe qui implique de nombreuses étapes, notamment la conception, le développement, le test et le déploiement de l'application.</p>
            <button class="btn btn-outline-primary" type="button"><a href="applicatif.html">En savoir plus</a></button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="h-100 p-5 bg-body-tertiary border rounded-3">
            <h2><a href="formation.html"><img src="icon13.png"></a> Formations</h2>
            <p>L'informatique est un domaine en constante évolution, et les formations informatiques sont un excellent moyen d'apprendre les compétences et les connaissances nécessaires pour réussir dans ce domaine. Il existe de nombreux types de formations informatiques disponibles, y compris des cours en ligne, des cours en présentiel et des programmes universitaires.</p>
            <button class="btn btn-outline-primary" type="button"><a href="formation.html">En savoir plus</a></button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="h-100 p-5 bg-body-tertiary border rounded-3">
            <h2><a href="datascience.html"><img src="icon11.png"></a> Data analytics</h2>
            <p>
              La data analytics, ou analyse des données, est l'ensemble des processus et méthodes visant à collecter, traiter, analyser et interpréter des données afin d'en tirer des informations et des insights. Elle est utilisée dans un large éventail d'industries, notamment la finance, la santé, le commerce et les médias.</p>
            <button class="btn btn-outline-primary" type="button" ><a href="datascience.html">En savoir plus</a></button>
          </div>
        </div>
      </div>
    </div>  
  
    </div>
  </main>

  <section class="price">
    <div class="col-md-7">
      <div class="container-fluid">
        <h2>TABLEAU DES PRIX DES CERTIFICATIONS DANS LES ACADEMIES MICROSOFT</h2>
        <img src="prix1.JPG">
        <button class="btn btn-primary btn-lg" type="button" style="margin-bottom: 50px;"><a href="formation.html" style="color: white;">En savoir plus </a></button>
        
      </div>
    </div>
  </section>

    <!-- heroes -->
    <div class="b-example-divider"></div>

  <div class="text-light px-4 py-5 text-center" style=" background-image: url(Cloud4.png); background-repeat: no-repeat; background-size: cover; margin-bottom: 80px; margin-top: 40px;">
    <div class="py-5">
      <h1 class="display-5 fw-bold text-white">Notre entreprise est indispensable à vos besoins informatiques</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4">Notre entreprise vise au développement applicatif de nos apprenants dans plusieurs domaines sinformatiques, tels que le reseau, le developpement digitale, microsoft 365 ...</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <!-- <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Custom button</button>
          <button type="button" class="btn btn-outline-light btn-lg px-4">Secondary</button> -->
        </div>
      </div>
    </div>
  </div>

  <div class="b-example-divider mb-0"></div>

  <!-- mension légale    -->
      <table class="table" style="margin-bottom: 60px;">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Ressources populaires</th>
            <th scope="col">Mentions légales</th>
            <th scope="col">Liens populaires</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Blog</td>
            <td>Confidentialités</td>
            <td>A propos</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Communauté</td>
            <td>Centre de confiance</td>
            <td>clients</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Bibliothèque de contenu</td>
            <td>Condition d'utilisation</td>
            <td>carrières</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td colspan="2">investisseurs</td>
            <td>rédaction</td>
          </tr>
        </tbody>
      </table>
  
      <!-- footer -->
      <footer class="section footer-classic context-dark bg-image" style="background: rgba(2, 2, 31, 0.945); padding-top: 30px;">
        <div class="container" id="foot">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4">
                <p>We are an award-winning creative agency, dedicated to the best result in web design, promotion, business consulting, and marketing.</p>
                <!-- Rights-->
                <p class="rights"><span>©  </span><span class="copyright-year">2023</span><span> </span><span>Waves</span><span>. </span><span>All Rights Reserved.</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h5>Contacts</h5>
              <dl class="contact-list">
                <dt>Address:</dt>
                <dd>798 South Park Avenue, Jaipur, Raj</dd>
              </dl>
              <dl class="contact-list">
                <dt>email:</dt>
                <dd><a href="mailto:#">yanicemundele@gmail.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>phones:</dt>
                <dd><a href="tel:#">0822872060</a> <span>or</span> <a href="tel:#">0971904358</a>
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Links</h5>
              <ul class="nav-list">
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="#">Pricing</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row no-gutters social-container">
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
        </div>
      </footer>
  <script src="bootstrap.bundle.min.js"></script>

    </body>
</html>