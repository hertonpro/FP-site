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

                    <p class="h2 text-warning"><strong>pilier {{ $pilier->denomination }}</strong></p>
                    <hr>
                    @php
                        echo $pilier->description;
                    @endphp

                    <h2 class="text-bold">Les projets lies au pilier {{ $pilier->denomination }}</h2>
                    @foreach ($projetsDupilier as $projetDupilier)
                    <a href="{{route('projet.show',[$projetDupilier->id])}}" class="ja">
                    <h3>{{ $projetDupilier->denomination }}</h3>
                    </a>
                    @endforeach

                    
                    
                    


                </div>
                <div class="col-lg-3 ">
                    <x-offre></x-offre>
                </div>
            </div>

        </div>
    </div>

@endsection
