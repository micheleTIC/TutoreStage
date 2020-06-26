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
                            <a href="modifier_stagiaire"><h4 class="white-text"> Modifier mon profil</h4></a>
                        </div>
                    </div>
                    <div class="col s3">
                        <div class="content-right">
                            <a href="liste_entreprises"><h4 class="white-text"> Les entreprises</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- home-splash splash-caption -->
                <div class="principal">
                    <div class="card carte row">
                        <ul id="tabs-swipe-demo" class="tabs card-title">
                            <li class="tab col s4"><a class="active" href="#profil">Mon Profil</a></li>
                            <li class="tab col s4"><a href="#dossier">Mon dossier</a></li>
                            <li class="tab col s4"><a href="#demandes">Mes demandes en cours</a></li>
                        </ul>
                        <div id="profil" class="col s12">
                            <div>
                                <ul>
                                    <li class="planche">Nom(s) : <span style="color: {{ $couleur }};">{{ $stagiaire['last_name'] }}</span></li>
                                    <li class="planche">Prénom(s) : <span style="color: {{ $couleur }};">{{ $stagiaire['first_name'] }}</span></li>
                                    <li class="planche">Date de naissance : <span style="color: {{ $couleur }};">{{ $stagiaire['birthday'] }}</span></li>
                                    <li class="planche">Sexe : <span style="color: {{ $couleur }};">@if($stagiaire['gender'] == 'M') Masculin @else Feminin @endif</span></li>
                                    <li class="planche">Adresse mail : <span style="color: {{ $couleur }};">{{ $stagiaire['email'] }}</span></li>
                                    <li class="planche">Téléphone : <span style="color: {{ $couleur }};">{{ $stagiaire['phone'] }}</span></li>
                                    <li class="planche">Nom d'utilisateur : <span style="color: {{ $couleur }};">{{ $stagiaire['username'] }}</span></li>
                                </ul>
                            </div>
                            <div class="card-action">
                                <a href="deconnexion" class="btn-small">Se déconnecter</a>
                            </div>
                        </div>
                        <div id="dossier" class="col s12">
                            <ul>
                                @foreach($dossier as $fichier)
                                <li class="planche"><div class="row"><div class="col s10"><span style="color: {{ $couleur }};">{{ $fichier['titre'] }}</span></div><div class="col s2"><a href="supprimerFichier/{{ $fichier['id'] }}" class="btn-small">Supprimer</a></div></li>
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
                        <div id="demandes" class="col s12">
                            <div>
                                <ul>
                                    @foreach ($demandes as $demande)
                                    <li class="planche"><div class="row"><div class="col s10">Demande de stage <span style="color: {{ $couleur }};">{{ $demande['type_stage'] }}</span> <br /> Entreprise : <span style="color: {{ $couleur }};">{{ $demande['username'] }}</span> <br /> statut : <span style="color: {{ $couleur }};">{{ $demande['statut'] }}</span></div><div class="col s2">@if($demande['statut'] == "en cours")<a href="annulerDemande/{{ $demande['id'] }}" class="btn-small">Annuler</a>@else<a href="demandeVu/{{ $demande['id'] }}" class="btn-small">Ok</a>@endif</div></div></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="card-action">
                                <a href="demande" class="btn-small">Faire une demande</a>
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
