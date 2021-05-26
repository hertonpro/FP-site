@extends('layouts.layout')

@section('content')

    <div class="container-fluid">
        
        <div class="col-lg-12 text-dark mb-5">
            <div class="row">
                <x-catNews/>
                <div class="col-lg-7 ">
                    @foreach ($blogs as $blog)
                        @if ($loop->first)
                            <img src="{{ asset($blog->img) }}" width="100%"
                                style="height: 270px; object-fit: cover; object-position: 0 0" alt="">
                            <p class="lead">{{ $blog->titre }}</p>
                            <p>{{ $blog->tag }}</p>
                            <a class="btn btn-primary btn-lg" href="{{ route('news.show', $blog->id) }}"
                                role="button">Lire
                                l'article</a>
                            <hr class=" hr-4">
                        @endif
                    @endforeach
                </div>
                <div class="col-lg-3 ">
                    <x-offre></x-offre>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row d-flex justify-content-around">
                        @foreach ($blogs as $blog)
                            @if (!$loop->first)
                                <div class="col-lg-4 ">
                                    <a href="{{ route('news.show', $blog->id) }}">
                                        <img src="{{ asset($blog->img) }}" class="card-img-top"
                                            alt="image-{{ $blog->titre }}">
                                                    
                                                    <h4 class="card-title text-warning strong">{{ $blog->titre }}</h4>
                                                    <p class="card-text text-secondary">{{ date_format($blog->updated_at, 'd/m/Y H:i') }}</p><br>
                                            
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <h1 class=" text-warning"> <strong>Plus d'articles</strong> </h1>
                @livewire('live-search')
            </div>
            @livewireScripts
            
        </div>
    </div>

@endsection
