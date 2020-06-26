<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('header')
<body style="background-color: whitesmoke">


<!--Nouveau accueil-->


<div class="wrapper-load">
<div class="preloader-wrapper medium-size active">
<div class="spinner-layer spinner-custom">
<div class="circle-clipper left">
<div class="circle"></div>
</div>
<div class="gap-patch">
<div class="circle"></div>
</div>
<div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>
</div>
</div>

<div class="navbar navbar-home" style="background-color: #24292e; color: whitesmoke">
    <div class="container">
        <div class="row">
            <div class="col s3">
                <div class="">
                    <a href="{{route('Home')}}"><h4 class="white-text">GESTAGE</h4></a>
                </div>
            </div>
            <div class="col s3">
                <div class="content-right">
                    <a href="{{route('Home')}}"><h4 class="white-text"> Accueil</h4></a>
                </div>
            </div>
            <div class="col s3">
                <div class="content-right">
                    <a href="{{route('Stagiaires')}}"><h4 class="white-text"> Espace Stagiaire</h4></a>
                </div>
            </div>
            <div class="col s3">
                <div class="content-right">
                    <a href="{{route('Recruting')}}"><h4 class="white-text"> Espace Recruteur</h4></a>
                </div>
            </div>
        </div>
    </div>
</div>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br><br>
      <h1 class="header center blue-text">Bienvenue sur le site de recherche de stage</h1>
      <div class="row center">
        <h5 class="header col s12 light">Lancez-vous dans le monde professionnel grâce à notre plateforme.</h5>
      </div>
      
      <br><br>

      <section class="black" >
  <div class="carousel carousel-slider" data-indicators="true" >
    <div class="carousel-fixed-item">

    </div>
    <div class="carousel-item lighten-2  white-text" href="#one!" style="background-image:images/picture1.jpg" >
      
      <img class="activator" src="images/picture1.jpg" alt="" width="100%" height="100%">

    </div>
    <div class="carousel-item darken-2 white-text" href="#two!" >
      
        
        <img class="activator" src="images/picture2.jpg" alt="" width="100%" height="100%" >
       
    </div>
    <div class="carousel-item white-text" href="#three!">
      
       
        <img class="activator" src="images/picture3.jpg" alt="">
       
    </div>
    <div class="carousel-item white-text" href="#four!">
      
        <img class="activator" src="images/picture5.jpg" alt="">
     
    </div>
  </div>
</section>




<!--

      <div class="row">
<div class="col s6">
<div class="card b-shadow">
<div class="card-image waves-effect waves-block waves-light">
<img class="activator" src="images/esgis.jpg" alt="">
</div>


</div>
</div>
<div class="col s6">
<div class="card b-shadow">
<div class="card-image waves-effect waves-block waves-light">
<img class="activator" src="images/esgis_image.jpg" alt="">
</div>

<div class="card-reveal">
<h5><span class="card-title"><i class="fa fa-close right"></i></span></h5>
<p></p>
</div>
</div>
</div>
</div>
</div>
</div>

-->
    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">tag_faces</i></h2>
            <h5 class="center">Opportunités</h5><br>

            <p class="light">Recherchez mieux et plus vite ici vos stages académiques comme professionnels.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">visibility</i></h2>
            <h5 class="center">Visibilité</h5><br>

            <p class="light">Faire des annonces sur notre plateforme est un bon moyen d'augmenter la visibilité de votre entreprise. Cette technique marqueting, permet de booster votre notoriété, mais aussi de capter des employés performant.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Synergie</h5><br>

            <p class="light">Dans le soucie de former une équipe performant, Gestage vous offre une interface de communication car l'ensemble des efforts d'une équipe, permet de faire plus que la somme individuelle des parties.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

  @include('footer')

<!--Ancien accueil-->










<script src="js/jquery.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/jquery.filterizr.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/animsition.min.js"></script>
<script src="js/animsition-custom.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

<script>


// CAROUSEL

$(document).ready(function(){
  $('.carousel').carousel(
  {
    dist: 0,
    padding: 0,
    fullWidth: true,
    indicators: true,
    duration: 100,
  }
  );
  autoplay() 
});

autoplay()   
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 3000);
}

$('.carousel.carousel-slider').carousel({
    fullWidth: true
  });

</script>
</body>
</html>
