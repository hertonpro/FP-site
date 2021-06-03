@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="col-lg-12 text-dark">
            <div class="row">
                <x-catNews />
                <div class="col-lg-7 ">
                    @if ($offre->state == 0)
                        <div class="alert alert-primary" role="alert">
                            Retourner à la page d'<a href="{{ route('blogs.edit', $offre->id) }}"
                                class="alert-link">édition</a>
                        </div>
                    @endif

                    <p class="h2 text-warning"><strong>{{ $offre->titre }}</strong></p>
                    <strong><i>{{ $offre->type }}</i>
                        <i>{{ date_format($offre->updated_at, 'd/m/Y H:i') }}</i></strong>
                    </footer>
                    <div class="row">
                        @php
                            echo '<p style=" img { max-width: 100%;}">' . $offre->description . '</p>';
                        @endphp
                    </div>

                    <hr>
                    @php
                        $file = $offre->titre . '_' . $offre->id;
                    @endphp
                    <a href="{{ asset('files/doc/offre_' . $file . '.pdf') }}">
                        <strong><i class="fa fa-file"></i>Télecharger l'offre</strong>
                    </a><br><br>
                </div>
                <div class="col-lg-3 ">
                    <x-offre></x-offre>
                </div>
            </div>

        </div>
    </div>

@endsection
