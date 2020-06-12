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
                            <a href="modifier_recruteur"><h4 class="white-text"> Modifier mon profil</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-splash">
            <div class="container">
                <div class="content">
                    <div class="splash-caption">
                        <div class="card row" style="min-height: 500px;">
                            <div class="col s12 card-title">
                                Creer une nouvelle annonce
                            </div>
                            <div class="col s12 card-content">
                                <form action="envoyerAnnonce" method="POST">
                                    {!! csrf_field() !!}
                                    <label for="titre">Titre de l'annonce : </label>
                                    <input type="text" id="titre" name="titre" required />
                                    {!! $errors->first('titre', '<small class="help-block" style="color: red;">:message</small>') !!}
                                    <label for="contenu">Contenu de l'annonce : </label>
                                    <br />
                                    <textarea name="contenu" id="contenu" cols="30" rows="10">

                                    </textarea>
                                    {!! $errors->first('contenu', '<small class="help-block" style="color: red;">:message</small>') !!}
                                    <br />
                                    <div>
                                        <button type="submit" class="btn-small">Envoyer</button>
                                        <a href="compte_recruteur" class="btn-small">Annuler</a>
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
