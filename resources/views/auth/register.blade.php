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
  <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="{{asset('img/fp/mot.jpg')}}" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <a href="{{url('/')}}"><img src="{{asset('img/Logo-fondation-panzi-site-web.png')}}" alt="logo" class="logo"></a>
              </div>
              <p class="login-card-description">Inscrivez-vous maintenant</p>
              <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mt-4">
                    <x-input id="name" class="form-control border-secondary" placeholder="Nom" type="text" name="name"
                        :value="old('name')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-input id="lastname" class="form-control border-secondary" placeholder="Post-nom" type="text" name="lastname"
                        :value="old('lastname')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-input id="nickname" class="form-control border-secondary" placeholder="Prenom" type="text" name="nikename"
                        :value="old('nikename')" required autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input id="email" class=" form-control border-secondary" placeholder="mail@example.com" type="email"
                        name="email" :value="old('email')" required />
                </div>

                <!-- Password -->
                <div class="mt-4">

                    <x-input id="password" class="form-control border-secondary" type="password" placeholder="Password"
                        name="password" required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input id="password_confirmation" class="form-control border-secondary" type="password"
                        placeholder="Confirmer" name="password_confirmation" required />
                </div>
                <div class="form-check">
                  <input type="checkbox"  class="form-check-input" id="exampleCheck1" value="1" name="newsletter">
                  <label class="form-check-label" for="exampleCheck1">S'abonner à la newsletter</label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class=" text-warning underline text-gray-600 hover:text-gray-900"
                        href="{{ route('login') }}">
                        {{ __('Déjà enregistré ?') }}
                    </a>

                    <x-button class="btn btn-warning text-secondary">
                        {{ __("S'inscrire") }}
                    </x-button>
                </div>
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