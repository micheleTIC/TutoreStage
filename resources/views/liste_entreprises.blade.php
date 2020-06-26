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
                <div class="card-title col s12 entete">
                    Liste des entreprises
                </div>
                <div class="col s12 card-content">
                    <div>
                        <div>
                            <form action="rechercherEntreprise" method="post">
                                {!! csrf_field() !!}
                                <div class="row">
                                    <div class="col s9">
                                        <input type="search" placeholder="rechercher une entreprise" name="entreprise" />
                                    </div>
                                    <div class="col s3">
                                        <button type="submit" class="btn-small" value="rechercher">
                                            <i class="material-icons">
                                                search
                                            </i>
                                        </button>
                                    </div>
                                </div>
                                {!! $errors->first('entreprise', '<small class="help-block" style="color: red;">:message</small>') !!}
                            </form>
                        </div>
                        <div class="card-action">
                            <div>
                                @if(isset($recherche))
                                    <h4>resultat de la recherche</h4>
                                    <br />
                                    <ul>
                                        @foreach($recherche as $entreprise)
                                            <?php $existe = false ?>
                                            @foreach ($preferences as $preference)
                                                @if($entreprise['username'] == $preference['username'])
                                                    <?php $existe = true ?>
                                                @endif
                                            @endforeach
                                            @if($existe != true)
                                                <li class="planche"><div class="row"><div class="col s10"><span style="color: {{ $couleur }};">{{ $entreprise['username'] }}</span></div><div class="col s1"><a href="ajouterEntreprise/{{ $entreprise['id'] }}" class="btn-small">Ajouter</a></div><div class="col s1"><a href="voirEntreprise/{{ $entreprise['id'] }}" class="btn-small">Voir</a></div></div></li>
                                            @endif
                                        @endForeach
                                    </ul>
                                @else
                                <h4>Liste des entreprises</h4>
                                <br />
                                <ul>
                                    @foreach($entreprises as $entreprise)
                                        <?php $existe = false ?>
                                        @foreach ($preferences as $preference)
                                            @if($entreprise['username'] == $preference['username'])
                                                <?php $existe = true ?>
                                            @endif
                                        @endforeach
                                        @if($existe != true)
                                            <li class="planche"><div class="row"><div class="col s10"><span style="color: {{ $couleur }};">{{ $entreprise['username'] }}</span></div><div class="col s1"><a href="ajouterEntreprise/{{ $entreprise['id'] }}" class="btn-small">Ajouter</a></div><div class="col s1"><a href="voirEntreprise/{{ $entreprise['id'] }}" class="btn-small">Voir</a></div></div></li>
                                        @endif
                                    @endForeach
                                </ul>
                                @endif
                            </div>
                            <br />
                            <div>
                                <h4>Mes entreprises</h4>
                                <br />
                                <ul>
                                    @foreach($preferences as $entreprise)
                                        <li><div class="row planche"><div class="col s8"><span style="color: {{ $couleur }};">{{ $entreprise['username'] }}</span></div><div class="col s2"><a href="supprimerPreference/{{ $entreprise['id'] }}" class="btn-small">Supprimer</a></div><div class="col s2"><a href="voirEntreprise/{{ $entreprise['id'] }}" class="btn-small">Voir</a></div></li>
                                    @endForeach
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
