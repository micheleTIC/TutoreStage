<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.png">
    <title>GESTAGE | Inscription</title>
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="css/main.css" rel="stylesheet" media="all">
    <link href="css/style.css" rel="stylesheet" media="all">
</head>
<div class="navbar navbar-home" style="background-color: #24292e; color: whitesmoke">
    <div class="container">
        <div class="row row-space" style="margin: 0; padding: 0">
            <div>
                <div class="col s3">
                    <div class="content-right">
                    <a href="{{route('Home')}}" style='text-decoration: transparent;'><h4 class="font-poppins">
                            GESTAGE</h4></a>
                </div>
                </div>
            </div>
            <div>
                <div class="col s3">
                    <div class="content-right">
                    <a href="{{route('Home')}}" style='text-decoration: transparent;'><h4 class="font-poppins">
                            Accueil</h4></a>
                </div>
                </div>
            </div>
            <div>
                <div class="col s3">
                    <div class="content-right">
                    <a href="{{route('Trainee')}}" style='text-decoration: transparent;'><h4 class="font-poppins">
                            Espace Stagiaire</h4></a>
                </div>
                </div>
            </div>
            <div>
                <div class="col s3">
                    <div class="content-right">
                    <a href="{{route('Recruting')}}" style='text-decoration: transparent;'><h4 class="font-poppins">
                            Espace Recruteur</h4></a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>


<body style="background-color:whitesmoke" ;>
<div class=" page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Inscription d'Entreprise</h2>
                <form action='/connexion_recruteur' method="POST" id="form">
                    {{ csrf_field() }}
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group" style='width:14.5cm'>
                                <label class="label" for="firm_name">Nom d'entreprise</label>
                                <input class="input--style-4" type="text" name="firm_name" required>
                            </div>
                        </div>
                    </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="email">E-mail</label>
                                    <input class="input--style-4" type="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="phone">Télephone</label>
                                    <input class="input--style-4" type="text" name="phone" pattern="[0-9]{1,15}" title="Telephone ne peut contenir que des caractères  numériques" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group" style='width:14.5cm;'>
                                    <label class="label" for="website">Site web</label>
                                    <input class="input--style-4 " type="url" name="website" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="username">Nom d'utilisateur</label>
                                    <input class="input--style-4" type="text" name="username" pattern="[A-z0-9]{1,15}"  required >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="password">Mot de passe</label>
                                    <input class="input--style-4" type="password" name="password"  placeholder="Mot de passe " required >
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="password_confirmation">Confirmation de Mot de passe</label>
                                    <input class="input--style-4" type="password" name="password_confirmation" placeholder="Mot de passe(confirmation)" required >
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--green" type="submit" name="submit" >S'inscrire</button>
                            </div>
                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--green" type="reset" name="reset" >Reset </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>
</body>
</html>
