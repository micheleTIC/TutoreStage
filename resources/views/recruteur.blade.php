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

<div class="navbar navbar-home" style="background-color: green">
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
                    <a href="{{route('SignUp_recruting')}}"><h4 class="white-text"> S'inscrire</h4></a>
                </div>
            </div>
            <div class="col s3">
                <div class="content-right">
                    <a href="{{route('SignIn_recruting')}}"><h4 class="white-text"> Se Connecter</h4></a>
                </div>
            </div>
        </div>
    </div>
</div>


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


<div class="home-splash">
<div class="container">
<div class="content">
<div class="splash-caption">
<div class="icon">
<i class="fa fa-diamond b-shadow"></i>
</div>
<div class="text">
<h2>Mon compte</h2>
<h2>Aviez vous un compte?</h2>
<p>faites nous confiance</p>
<a href="{{route('SignUp_recruting')}}">Inscrivez vous</a>
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
