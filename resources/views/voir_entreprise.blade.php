<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('header')
    <body style="background-color: whitesmoke">
        <?php $couleur = "blue"; ?>
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
                            <a href="compte_stagiaire"><h4 class="white-text"> Mon compte</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="principal">
            <div class="card carte row">
                @foreach ($entreprise as $info)
                <div class="col s12 planche card-title">
                    <div style="font-size: 30px;">{{ $info['firm_name'] }}</div>
                    <br />
                    <ul class="row">
                        <li class="col s3">Nom d'utilisateur : <span style="color: {{ $couleur }};">{{ $info['username'] }}</span></li>
                        <li class="col s3">Adresse mail : <span style="color: {{ $couleur }};">{{ $info['email'] }}</span></li>
                        <li class="col s3">Site web : <span style="color: {{ $couleur }};">{{ $info['website'] }}</span></li>
                        <li class="col s3">Numéro de téléphone : <span style="color: {{ $couleur }};">{{ $info['phone'] }}</span></li>
                    </ul>
                </div>
                <div class="col s10">
                    @foreach ($annonces as $annonce)
                        <div class="planche">
                            Titre : <span style="color: {{ $couleur }};">{{ $annonce['titre'] }}</span>
                            <br />
                            Contenu :
                            <br />
                            <span style="color: {{ $couleur }};">{{ $annonce['contenu'] }}</span>
                            <br />
                            <br />
                            <div><a href="" class="btn-small">Demande</a></div>
                        </div>
                    @endforeach
                    @foreach ($annonces as $annonce)
                        <div class="planche">
                            Titre : <span style="color: {{ $couleur }};">{{ $annonce['titre'] }}</span>
                            <br />
                            Contenu :
                            <br />
                            <span style="color: {{ $couleur }};">{{ $annonce['contenu'] }}</span>
                            <br />
                            <br />
                            <div><a href="" class="btn-small">Demande</a></div>
                        </div>
                    @endforeach
                </div>
                @endforeach
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
