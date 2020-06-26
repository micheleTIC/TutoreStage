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
                            <a href="compte_stagiaire"><h4 class="white-text"> Mon compte</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="principal">
                <div class="card carte row">
                    <div class="col s12 card-title entete">
                        Faire une demande
                    </div>
                    <div class="col s12 card-content">
                        <form action="envoyerDemande" method="POST">
                            {!! csrf_field() !!}
                            <label for="entreprises">Entreprises : </label>
                            <select name="entreprise" id="entreprise">
                                <option value="">- Preferences -</option>
                                @foreach ($entreprises as $entreprise)
                                <option value="{{ $entreprise['id_recruteur'] }}">{{ $entreprise['username'] }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('entreprise', '<small class="help-block" style="color: red;">:message</small>') !!}
                            <br />
                            <label for="type">Type de stage</label>
                            <select name="type" id="type">
                                <option value="academique">Academique</option>
                                <option value="professionnel">Professionnel</option>
                            </select>
                            {!! $errors->first('type', '<small class="help-block" style="color: red;">:message</small>') !!}
                            <br />
                            <label for="piece">Pieces jointe</label>
                            <div class="row">
                                <div class="col s2">
                                    <select name="piece1" id="piece">
                                        <option value="">-- piece --</option>
                                        @foreach ($dossier as $piece)
                                        <option value="{{ $piece['id'] }}">{{ $piece['titre'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col s2">
                                    <select name="piece2" id="piece">
                                        <option value="">-- piece --</option>
                                        @foreach ($dossier as $piece)
                                        <option value="{{ $piece['id'] }}">{{ $piece['titre'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col s2">
                                    <select name="piece3" id="piece">
                                        <option value="">-- piece --</option>
                                        @foreach ($dossier as $piece)
                                        <option value="{{ $piece['id'] }}">{{ $piece['titre'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col s2">
                                    <select name="piece4" id="piece">
                                        <option value="">-- piece --</option>
                                        @foreach ($dossier as $piece)
                                        <option value="{{ $piece['id'] }}">{{ $piece['titre'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col s2">
                                    <select name="piece5" id="piece">
                                        <option value="">-- piece --</option>
                                        @foreach ($dossier as $piece)
                                        <option value="{{ $piece['id'] }}">{{ $piece['titre'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s2">
                                    {!! $errors->first('piece1', '<small class="help-block" style="color: red;">:message</small>') !!}
                                </div>
                                <div class="col s2">
                                    {!! $errors->first('piece2', '<small class="help-block" style="color: red;">:message</small>') !!}
                                </div>
                                <div class="col s2">
                                    {!! $errors->first('piece3', '<small class="help-block" style="color: red;">:message</small>') !!}
                                </div>
                                <div class="col s2">
                                    {!! $errors->first('piece4', '<small class="help-block" style="color: red;">:message</small>') !!}
                                </div>
                                <div class="col s2">
                                    {!! $errors->first('piece5', '<small class="help-block" style="color: red;">:message</small>') !!}
                                </div>
                            </div>
                            <br />
                            <div>
                                <button type="submit" class="btn-small">Envoyer</button>
                                <a href="compte_stagiaire" class="btn-small">Annuler</a>
                            </div>
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
