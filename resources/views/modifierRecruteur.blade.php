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
                            <a href="compte_recruteur"><h4 class="white-text"> Mon compte</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                    <div class="principal">
                        <div class="card row" style="min-height: 500px;">
                            <div class="card-title">
                                Modifier le profil
                            </div>
                            <div class="card-content row">
                                <form action="modification_recruteur" method="POST">
                                    {!! csrf_field() !!}
                                        <ul class="col s6">
                                            <li><label for="firm_name">Nom de l'entreprise : </label><input type="text" id="firm_name" value="{{ $recruteur['firm_name'] }}" name="firm_name" required /></li>
                                            {!! $errors->first('firm_name', '<small class="help-block" style="color: red;">:message</small>') !!}
                                            <li><label for="email">Adresse mail : </label><input type="email" id="email" value="{{ $recruteur['email'] }}" name="email" required /></li>
                                            {!! $errors->first('email', '<small class="help-block" style="color: red;">:message</small>') !!}
                                            <li><label for="phone">Numero de telephone : </label><input type="text" id="phone" value="{{ $recruteur['phone'] }}" name="phone" required /></li>
                                            {!! $errors->first('phone', '<small class="help-block" style="color: red;">:message</small>') !!}
                                            <li><label for="website">Site web : </label><input type="text" id="website" value="{{ $recruteur['website'] }}" name="website" required /></li>
                                            {!! $errors->first('website', '<small class="help-block" style="color: red;">:message</small>') !!}
                                        </ul>
                                        <ul class="col s6">
                                            <li><label for="password">Mot de passe : </label><input type="password" id="password" name="password" required /></li>
                                            {!! $errors->first('password', '<small class="help-block" style="color: red;">:message</small>') !!}
                                            <li><label for="new_password">Nouveau mot de passe : </label><input type="password" id="new_password"  name="new_password" /></li>
                                            {!! $errors->first('new_password', '<small class="help-block" style="color: red;">:message</small>') !!}
                                            <li><label for="username">Nom d'utilisateur : </label><input type="text" id="username" value="{{ $recruteur['username'] }}" name="username" required /></li>
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
