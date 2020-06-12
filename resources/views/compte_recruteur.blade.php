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
                            <ul class="tabs card-title" id="tabs-swipe-demo">
                                <li class="tab col s4"><a class="active" href="#profil">Profil</a></li>
                                <li class="tab col s4"><a href="#annonces">Annonces</a></li>
                                <li class="tab col s4"><a href="#demandes">Demandes</a></li>
                            </ul>
                            <div id="profil" class="col s12 card-content">
                                <div>
                                    <ul>
                                        <li>Nom de l'entreprise : {{ $recruteur['firm_name'] }}</li>
                                        <li>Adresse mail de l'entreprise : {{ $recruteur['email'] }}</li>
                                        <li>Numero de telephone de l'entreprise : {{ $recruteur['phone'] }}</li>
                                        <li>Site Web de l'entreprise : {{ $recruteur['website'] }}</li>
                                        <li>Pseudo de l'entreprise : {{ $recruteur['username'] }}</li>
                                    </ul>
                                </div>
                                <div class="card-action">
                                    <a href="deconnexion" class="btn-small">Se deconnecter</a>
                                </div>
                            </div>
                            <div id="annonces" class="col s12 card-content">
                                <div class="card-content">
                                    <ul>
                                        @foreach ($annonces as $annonce)
                                        <li><div class="row"><div class="col s10"> Annonce : {{ $annonce['titre'] }} | contenu : {{ $annonce['contenu'] }}</div><div class="col s2"><a href="supprimerAnnonce/{{ $annonce['id'] }}" class="btn-small">Supprimer</a></div></div></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="card-action">
                                    <a href="annonce" class="btn-small">Nouvelle annonce</a>
                                </div>
                            </div>
                            <div id="demandes" class="col s12 card-content">
                                <ul>
                                    @foreach ($demandes as $demande)
                                    @if($demande['statut'] == "en cours")
                                    <li>
                                        <div class="row">
                                            <div class="col s8">
                                                demande de stage {{ $demande['type_stage'] }} de {{ $demande['first_name']." ".$demande['last_name'] }}
                                            </div>
                                            <div class="col s2">
                                                <a href="accepterDemande/{{ $demande['id'] }}" class="btn-small">
                                                    Accepter
                                                </a>
                                            </div>
                                            <div class="col s2">
                                                <a href="refuserDemande/{{ $demande['id'] }}" class="btn-small">
                                                    Refuser
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
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
