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
                            <p class="login-card-description">Les dames de la fondation Panzi vous remercient pour votre
                                générosité. </p>
                            <form action="/donation/{{$thisTransaction->id}}" method="POST">
                                @method('patch')
                                @csrf
                                <label for="hidden">Montant à donnée</label>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="form-check form-switch ">
                                            <input id="my-input" onclick="dis_ot()" class="form-check-input"
                                                type="radio" name="amount" value="50">
                                            <label for="my-input" class="form-check-label h3 text-warning ">50$</label>
                                        </div>
                                        <div class="form-check">
                                            <input id="my-input" onclick="dis_ot()" class="form-check-input"
                                                type="radio" name="amount" value="100">
                                            <label for="" class="form-check-label h3 text-warning ">100$</label>
                                        </div>
                                        <div class="form-check">
                                            <input id="other_up" class="form-check-input"  onclick="dis_inp()"
                                                type="radio" name="amount" >
                                            <label for="other_up" class="form-check-label h3 text-warning ">Autre</label>
                                        </div>
                                        <script>
                                            function dis_inp() {
                                                document.getElementById("other").disabled = false;
                                            }

                                            function dis_ot() {
                                                document.getElementById("other").disabled = true;
                                                document.getElementById("my-input").disabled = false;

                                            }
                                            function tap_ot(){
                                                var saisie =document.getElementById("other").value;
                                                document.getElementById("other_up").value=saisie;
                                            }
                                        </script>
                                    </div>
                                    <br><br>
                                        <input type="number" id="other" oninput="tap_ot()" class="input-group-text"
                                            for="inputGroupSelect01" disabled placeholder="Autre"> 
                                            <label class="form-label">Le montant en dollar ($ USD)</label>
                                </div>

                                {{-- <label for="">Laisser un message </label>
                                <textarea class=" form-control form-control-sm" name="message"></textarea> --}}
                                <br>
                                <input type="submit" class="btn btn-warning" value="Donation">

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
