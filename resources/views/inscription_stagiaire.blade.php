<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.png">
    <title>GESTAGE | Inscription</title>
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body style="background-color: whitesmoke;">
<div class="navbar navbar-home ">
    <div class="container">
        <div class="row row-space">
            <div >
                <div class="btn">
                    <a href="{{route('Home')}}"><h4 class="font-poppins">GESTAGE</h4></a>
                </div>
            </div>
            <div >
                <div class="btn">
                    <a href="{{route('Home')}}"><h4 class="font-poppins"> Accueil</h4></a>
                </div>
            </div>
            <div >
                <div class="btn">
                    <a href="{{route('Trainee')}}"><h4 class="font-poppins"> Espace Stagiaire</h4></a>
                </div>
            </div>
            <div >
                <div class="btn">
                    <a href="{{route('Recruting')}}"><h4 class="font-poppins"> Espace Recruteur</h4></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Inscription Stagiaire</h2>
                <form action="compte_stagiaire.blade.php" method="POST">
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Prenom</label>
                                <input class="input--style-4" type="text" name="first_name" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label"> Nom</label>
                                <input class="input--style-4" type="text" name="last_name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label"> Date de naissance</label>
                                <div class="input-group-icon">
                                    <input class="input--style-4 js-datepicker" type="date" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Sexe</label>
                                <div class="p-t-10">
                                    <label class="radio-container m-r-45">Male
                                        <input type="radio" checked="checked" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">Female
                                        <input type="radio" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">E-mail</label>
                                <input class="input--style-4" type="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Télephone</label>
                                <input class="input--style-4" type="text" name="phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <label class="label">Niveau d'études</label>
                            <select name="subject" required>
                                <option disabled="disabled" selected="selected">--Choisissez--</option>
                                <option>Bac + 1</option>
                                <option>Bac + 2</option>
                                <option>Bac + 3</option>
                                <option>Bac + 4</option>
                                <option>Bac + 5</option>
                            </select>
                    </div>
                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit" name="submit">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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
