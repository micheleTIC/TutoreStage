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
        </div>

        <div class="navbar navbar-home" style="background-color: green">
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
                            <a href="compte_stagiaire"><h4 class="white-text"> Mon compte</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- home-splash splash-caption -->
        <div class="home-splash">
            <div class="content">
            <div class="splash-caption">
                <div class="card carte row" style="min-height: 600px">
                    <div class="card-title">
                        Modifier le profil
                    </div>
                    <div class="card-content row">
                        <form action="modification_stagiaire" method="POST">
                            {!! csrf_field() !!}
                                <ul class="col s6">
                                    <li><label for="last_name">Nom(s) : </label><input type="text" id="last_name" value="{{ $stagiaire['last_name'] }}" name="last_name" required /></li>
                                    {!! $errors->first('last_name', '<small class="help-block" style="color: red;">:message</small>') !!}
                                    <li><label for="first_name">Prenom(s) : </label><input type="text" id="first_name" value="{{ $stagiaire['first_name'] }}" name="first_name" required /></li>
                                    {!! $errors->first('first_name', '<small class="help-block" style="color: red;">:message</small>') !!}
                                    <li><label for="birthday">Date de naissance : </label><input type="date" id="birthday" name="birthday" required /></li>
                                    {!! $errors->first('birthday', '<small class="help-block" style="color: red;">:message</small>') !!}
                                    <li><label for="email">Adresse mail : </label><input type="email" id="email" value="{{ $stagiaire['email'] }}" name="email" required /></li>
                                    {!! $errors->first('email', '<small class="help-block" style="color: red;">:message</small>') !!}
                                    <li>
                                        <label for="gender">Sexe</label>
                                        <select name="gender" id="gender">
                                            <option value="M">Homme</option>
                                            <option value="F">Femme</option>
                                        </select>
                                    </li>
                                    {!! $errors->first('gender', '<small class="help-block" style="color: red;">:message</small>') !!}
                                </ul>
                                <ul class="col s6">
                                    <li><label for="phone">Telephone : </label><input type="text" id="phone" value="{{ $stagiaire['phone'] }}" name="phone" required /></li>
                                    {!! $errors->first('phone', '<small class="help-block" style="color: red;">:message</small>') !!}
                                    <li><label for="password">Mot de passe : </label><input type="password" id="password" name="password" required /></li>
                                    {!! $errors->first('password', '<small class="help-block" style="color: red;">:message</small>') !!}
                                    <li><label for="new_password">Nouveau mot de passe : </label><input type="password" id="new_password"  name="new_password" /></li>
                                    {!! $errors->first('new_password', '<small class="help-block" style="color: red;">:message</small>') !!}
                                    <li><label for="username">Nom d'utilisateur : </label><input type="text" id="username" value="{{ $stagiaire['username'] }}" name="username" required /></li>
                                    {!! $errors->first('username', '<small class="help-block" style="color: red;">:message</small>') !!}
                                </ul>
                            </div>
                            <div class="card-action">
                                <input type="submit" class="btn-small" value="Modifier" />
                            </div>
                            @isset($message)
                                <small class="help-block" style="color: red;">{{ $message }}</small>
                            @endisset
                        </form>
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
