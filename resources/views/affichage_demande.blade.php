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
                            <a href="compte_recruteur"><h4 class="white-text"> Mon compte</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="principal">
            <div class="card carte row">
                <div class="col s12">
                @foreach ($demande as $info)
                    <div class="row planche">
                        <div class="col s8">
                            <ul>
                                <li>Nom d'utilisateur : <span style="color: {{ $couleur }};">{{ $info['username'] }}</span></li>
                                <li>Nom : <span style="color: {{ $couleur }};">{{ $info['first_name'] }}</span></li>
                                <li>Prénom : <span style="color: {{ $couleur }};">{{ $info['last_name'] }}</span></li>
                                <li>Adresse mail : <span style="color: {{ $couleur }};">{{ $info['email'] }}</span></li>
                                <li>Téléphone : <span style="color: {{ $couleur }};">{{ $info['phone'] }}</span></li>
                                <li>Sexe : <span style="color: {{ $couleur }};">{{ $info['gender'] }}</span></li>
                                <li>Type de stage demandé : <span style="color: {{ $couleur }};">{{ $info['type_stage'] }}</span></li>
                            </ul>
                        </div>
                        <div class="col s2">
                            <a href="accepterDemande/{{ $info['id'] }}" class="btn-small">
                                Accepter
                            </a>
                        </div>
                        <div class="col s2">
                            <a href="refuserDemande/{{ $info['id'] }}" class="btn-small">
                                Refuser
                            </a>
                        </div>
                    </div>
                @endforeach
                </div>
                <div class="col s12">
                @foreach ($dossier as $fichier)
                    <div class="row planche">
                        <div class="col s10">
                            {{ $fichier['titre'] }}
                            {{ $fichier['lien'] }}
                        </div>
                        <div class="col s2">
                            <a href="telechargerPiece/{{ $fichier['id'] }}" class="btn-small"><i class="material-icons">get_app</i></a>
                        </div>
                    </div>
                @endforeach
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
