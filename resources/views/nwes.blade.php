@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="col-lg-12 text-dark mb-5">
            <div class="row">
                <div class="col">
                    <a class="btn btn-block btn-primary btn-xs active rounded-lg" href="#">Média</a>
                    <a class="btn btn-block btn-primary btn-xs rounded-lg" href="#">Panzi-news</a>
                    <a class="btn btn-block btn-primary btn-xs rounded-lg" href="#">Panzi-hébdo</a>
                    <a class="btn btn-block btn-primary btn-xs rounded-lg" href="#">Blogs</a>
                    <a class="btn btn-block btn-primary btn-xs rounded-lg" href="#">Vidéos</a>
                    <a class="btn btn-block btn-primary btn-xs rounded-lg" href="#">Album</a>
                </div>
                <div class="col-lg-7 ">
                    @foreach ($blogs as $blog)
                        @if ($loop->last)
                            <img src="{{ asset('./files/2/1.jpeg1620027949.jpeg') }}" width="100%"
                                style="height: 270px; object-fit: cover; object-position: 0 0" alt="">
                            <p class="lead">{{ $blog->titre }}</p>
                            <p>{{ $blog->tag }}</p>
                            <a class="btn btn-primary btn-lg" href="#" role="button">Lire l'article</a>
                            <hr class=" hr-4">
                        @endif
                    @endforeach
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
            <div class="row">
                <div class="col-lg-9">
                    <div class="row d-flex justify-content-around">
                        @foreach ($blogs as $blog)
                            @if (!$loop->last)
                                <div class="col-lg-4">
                                    <img src="{{ asset('./files/ChocolateFruit-scaled.jpg1619439480.jpg') }}"
                                        class="card-img-top" alt="...">
                                        <p class="text-warning">{{ $blog->titre }}</p>
                                        <footer class="blockquote-footer">Mardi 5.12.2020</footer>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
