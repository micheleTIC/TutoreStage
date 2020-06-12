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
                            <a href="modifier_stagiaire"><h4 class="white-text"> Modifier mon profil</h4></a>
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
                    <ul id="tabs-swipe-demo" class="tabs card-title">
                        <li class="tab col s3"><a class="active" href="#profil">Mon Profil</a></li>
                        <li class="tab col s3"><a href="#dossier">Mon dossier</a></li>
                        <li class="tab col s3"><a href="#entreprises">Mes entreprises</a></li>
                        <li class="tab col s3"><a href="#demandes">Mes demandes en cours</a></li>
                    </ul>
                    <div id="profil" class="col s12 card-content">
                        <div>
                            <ul>
                                <li>Nom(s) : {{ $stagiaire['last_name'] }}</li>
                                <li>Prenom(s) : {{ $stagiaire['first_name'] }}</li>
                                <li>Date de naissance : {{ $stagiaire['birthday'] }}</li>
                                <li>Sexe : {{ $stagiaire['gender'] }}</li>
                                <li>Adresse mail : {{ $stagiaire['email'] }}</li>
                                <li>Telephone : {{ $stagiaire['phone'] }}</li>
                                <li>Nom d'utilisateur : {{ $stagiaire['username'] }}</li>
                            </ul>
                        </div>
                        <div class="card-action">
                            <a href="deconnexion" class="btn-small">Se deconnecter</a>
                        </div>
                    </div>
                    <div id="dossier" class="col s12 card-content">
                        <ul class>
                            @foreach($dossier as $fichier)
                            <li> {{ $fichier['titre'] }} <a href="supprimerFichier/{{ $fichier['id'] }}" class="btn-small">Supprimer</a></li>
                            @endForeach
                        </ul>
                        <div class="card-action">
                            <form action="ajouterDossier" method="POST" enctype="multipart/form-data">
                                {!! csrf_field() !!}
                                <div class="row">
                                    <div class="col s4">
                                        <label for="titre">Titre : </label>
                                        <input type="text" name="titre" id="titre" required />
                                    </div>
                                    {!! $errors->first('titre', '<small class="help-block" style="color: red;">:message</small>') !!}
                                    <div class="col s4" style="color: black;">
                                        <input type="file" name="fichier" required />
                                    </div>
                                    {!! $errors->first('fichier', '<small class="help-block" style="color: red;">:message</small>') !!}
                                    <div class="col s4">
                                        <button class="btn-small">Ajouter</button>
                                    </div>
                                </div>
                            </form>
                            <a href="viderDossier" class="btn-small">Vider</a>
                        </div>
                    </div>
                    <div id="entreprises" class="col s12 card-content">
                        <div>
                            <div>
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col s9">
                                            <input type="search" placeholder="recherche une entreprise" name="entreprise" />
                                        </div>
                                        <div class="col s3">
                                            <button type="submit" class="btn-small" value="rechercher">
                                                <i class="material-icons">
                                                    search
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <h4>Liste des entreprises</h4>
                                <ul>
                                    @foreach($entreprises as $entreprise)
                                        <?php $existe = false ?>
                                        @foreach ($preferences as $preference)
                                            @if($entreprise['username'] == $preference['username'])
                                                <?php $existe = true ?>
                                            @endif
                                        @endforeach
                                        @if($existe != true)
                                            <li><div class="row"><div class="col s10">{{ $entreprise['username'] }}</div><div class="col s2"><a href="ajouterEntreprise/{{ $entreprise['id'] }}" class="btn-small">Ajouter</a></div></div></li>
                                        @endif
                                    @endForeach
                                </ul>
                            </div>
                            <div>
                                <h4>Mes entreprises</h4>
                                <ul>
                                    @foreach($preferences as $entreprise)
                                        <li><div class="row"><div class="col s10">{{ $entreprise['username'] }}</div><div class="col s2"><a href="supprimerPreference/{{ $entreprise['id'] }}" class="btn-small">Supprimer</a></div></li>
                                    @endForeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="demandes" class="col s12">
                        <div class="card-content">
                            <ul>
                                @foreach ($demandes as $demande)
                                <li><div class="row"><div class="col s10">demande de stage {{ $demande['type_stage'] }} | entreprise : {{ $demande['username'] }} | statut : {{ $demande['statut'] }}</div><div class="col s2">@if($demande['statut'] == "en cours")<a href="annulerDemande/{{ $demande['id'] }}" class="btn-small">Annuler</a>@else<a href="demandeVu/{{ $demande['id'] }}" class="btn-small">Ok</a>@endif</div></div></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-action">
                            <a href="demande" class="btn-small">Faire une demande</a>
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
