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
            <img src="{{asset('img/fp/dr.jpg')}}" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <a href="{{url('/')}}"><img src="{{asset('img/Logo-fondation-panzi-site-web.png')}}" alt="logo" class="logo"></a>
              </div>
              <p class="login-card-description">Se connecter sur ton compte</p>
              {{Session::get('message')}} 
              <form method="POST" action="{{ route('login') }}">
                @csrf
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <x-input id="email" placeholder="mail@example.com" class="form-control border-secondary" type="email" name="email" :value="old('email')" required autofocus />
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <x-input id="password" placeholder="Password" class="form-control border-secondary"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                  </div>
                  <input hidden type="button" value="{{$_GET['path']}}" name="path">
                  <x-button class="btn btn-warning text-secondary ml-3">
                    {{ __('Log in') }}
                </x-button>
                </form>
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="forgot-password-link"> {{ __('Mot de passe oublié?') }}</a>
                @endif
                <p>
                    <label for="remember_me" class="inline-flex items-center">
                  <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                  <span class="ml-2 text-sm text-gray-600">{{ __('Souviens-toi de moi') }}</span>
              </label>
                </p>
                
                <p class="login-card-footer-text">Vous n'avez pas de compte ? <a href="{{route('register')}}" class="text-warning"> Inscrivez-vous ici</a></p>
                
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