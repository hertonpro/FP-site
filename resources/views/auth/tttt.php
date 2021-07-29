@extends('layouts.auth')

@section('content')
    <div class="container col-md-5 col-offset offset-md-6">
        <x-auth-card>
            <x-slot name="logo">

            </x-slot>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <h5>Inscrivez-vous</h5>
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

                <div class="mt-4">
                    En vous inscrivant, vous acceptez nos <a href="" class=" text-warning"> <strong>Conditions
                            d'utilisation</strong> </a> , de recevoir des e-mails et des mises à jour de la Fondation Panzi
                    et vous reconnaissez avoir lu notre <a href="" class=" text-warning"> <strong>Politique de
                            confidentialité</strong> </a>.
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">j'accepte</label>
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class=" text-warning underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button class="btn btn-warning text-secondary">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
        </x-auth-card>

    </div>

    </div>

@endsection
