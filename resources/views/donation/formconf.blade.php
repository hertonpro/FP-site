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
                            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                                @csrf


                                <input type="hidden" class=" form-control form-control-sm" name="cmd"
                                    value="_donations" />

                                <input type="hidden" class=" form-control form-control-sm" name="business"
                                    value="sb-vfgb86709623@business.example.com" />

                                <input type="hidden" class=" form-control form-control-sm" name="item_name"
                                    value="Donation" />
                                <p class=" display-2 text-success">{{$transaction->amount}} $</p>
                                <p class="text-success">Confirmet votre transaction</p>
                                <input type="hidden" class=" form-control form-control-sm" name="amount"
                                    value="{{$transaction->amount}}" />

                                <input type='hidden' class=" form-control form-control-sm" name='notify_url'
                                    value='{{ url('donation/'.$transaction->id.'/edit') }}'>

                                <input type='hidden' class=" form-control form-control-sm" name='cancel_return'
                                    value='{{ url('donation/cancelled/'.$transaction->id) }}'>

                                <input type='hidden' class=" form-control form-control-sm" name='return'
                                    value='{{ url('donation/success/'.$transaction->id) }}'>
                                <br>
                                <input type="submit" class="btn btn-success" value="Confirmer">
                                <a href="{{ url('donation/cancelled/'.$transaction->id) }}" class="btn btn-danger">Annuler</a>
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
