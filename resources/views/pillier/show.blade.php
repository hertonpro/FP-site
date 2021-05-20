@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="col-lg-12 text-dark">
            <div class="row">
                <div class="col-2">
                    <x-projet></x-projet>
                </div>
                <div class="col-lg-7 ">
                    {{-- @if ($article->state != 1)
                        <div class="alert alert-primary" role="alert">
                            Aller à la page d'<a href="{{ route('pillier.edit', $article->id) }}"
                                class="alert-link">édition</a>
                        </div>
                    @endif --}}

                    <p class="h2 text-warning"><strong>Pillier {{ $pillier->denomination }}</strong></p>
                    <hr>
                    @php
                        echo $pillier->description;
                    @endphp
                    
                    
                    


                </div>
                <div class="col-lg-3 ">
                    <a href="">
                        <button class="btn btn-primary border border-primary col-12 my-2" style="border-radius: 10px;"
                            type="button">
                            <h1 class="font-bold">Faire un don</h1>
                        </button>
                    </a>
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('./files/ChocolateFruit-scaled.jpg1619439480.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Postuler au poste assistant de chef de projet: BADILISHA Postuler au
                                poste assistant de chef de projet: BADILISHA </h5>
                            <a href="#">
                                <h4>Job description</h4>
                            </a>
                            <a href="#" class="btn btn-primary"> <strong>Postuler</strong> </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
