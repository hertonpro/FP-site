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
                    <x-offre></x-offre>
                </div>
            </div>

        </div>
    </div>

@endsection
