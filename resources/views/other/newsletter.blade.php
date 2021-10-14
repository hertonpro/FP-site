<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fondation Panzi</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="{{ asset('img/fp/mot.jpg') }}" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="brand-wrapper">
                                <a href="{{ url('/') }}"><img
                                        src="{{ asset('img/Logo-fondation-panzi-site-web.png') }}" alt="logo"
                                        class="logo"></a>
                            </div>
                            <p class="login-card-description">Merci <strong><?php echo $_GET['nom']; ?></strong> de confirmer
                                votre abonnement en cliquant sur le buton "<strong>confirmer</strong>"</p>
                            <form action="newsletter" method="POST">
                                @csrf
                                <input type="text" hidden name="nom" value="<?php echo $_GET['nom']; ?> ">
                                <input type="mail" hidden name="mail" value="<?php echo $_GET['mail']; ?>">


                                {{-- <label for="">Laisser un message </label>
                                <textarea class=" form-control form-control-sm" name="message"></textarea> --}}
                                <br>
                                <input type="submit" class="btn btn-warning" value="Confirmer">
                                <a class="btn btn-danger" href="/">Annuler</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
