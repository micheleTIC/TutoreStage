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
            <div class="col s4">
                <div class="">
                    <a href="{{route('Home')}}"><h4 class="white-text">GESTAGE</h4></a>
                </div>
            </div>
            <div class="col s4">
                <div class="content-right">
                    <a href="{{route('Home')}}"><h4 class="white-text"> Accueil</h4></a>
                </div>
            </div>

            <div class="col s4">
                <div class="content-right">
                    <a href="{{route('SignUp_recruting')}}"><h4 class="white-text"> S'inscrire</h4></a>
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

<div class="text">
  <div class="row">
      <form action="{{route('R_connect')}}" method="post" class="col s12" style="width:60%;margin-right:auto;background-color:white;padding:5%">
        @csrf
        @if(session('erreur'))

            <p class="red-text text-darken-2">{{session('erreur')}}</p>

        @endif
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input id="username" type="text" name="username" class="validate" value="{{ old('username') }}" required>
            <label for="username">Username</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">lock</i>
            <input id="password" type="password" name="password" class="validate" value="{{old('password')}}" required>
            <label for="password">Password</label>
          </div>

          <button class="btn waves-effect waves-light btn-large" style="margin:auto"  type="submit" name="action">Submit
            <i class="material-icons right">send</i>
          </button>
        </div>
      </form>
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
