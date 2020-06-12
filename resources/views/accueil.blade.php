<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('header')
<body style="background-color: whitesmoke">
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

<div class="wrap-card segments-page">


<div class="card-content">
<h1 class="center"><span class="activator">Bienvenue sur le site de recherche de stage</span></h1>




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



<script src="js/jquery.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/jquery.filterizr.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/animsition.min.js"></script>
<script src="js/animsition-custom.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
