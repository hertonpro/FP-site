@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="col-lg-12 text-dark">
            <div class="row">
                <div class="col-2">
                    <x-menu-projet/>
                </div>
                <div class="col-lg-7 ">
                    {{-- @if ($article->state != 1)
                        <div class="alert alert-primary" role="alert">
                            Aller à la page d'<a href="{{ route('pilier.edit', $article->id) }}"
                                class="alert-link">édition</a>
                        </div>
                    @endif --}}

                    <p class="h2 text-warning"><strong>Projet {{ $projet->denomination }}</strong></p>
                    <hr>
                    @php
                        echo $projet->description;
                    @endphp
                    
                    
                    


                </div>
                <div class="col-lg-3 ">
                    @include('Components.offre')
                </div>
            </div>

        </div>
    </div>

@endsection
