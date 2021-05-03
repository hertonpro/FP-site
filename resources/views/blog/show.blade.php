@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="col-12">
            @if ($article->state != 1)
                <button class="btn btn-primary btn-xs" type="button">Publier</button>
            @endif

        </div>
        <div class="col-lg-12 text-dark">
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
                    <p class="h2 text-warning"><strong>{{ $article->titre }}</strong></p>
                    <footer class="blockquote-footer">{{ $article->tag }}<br>
                        <strong><i>{{ $article->type }}</i> <i>{{ date_format($article->updated_at,"d/m/Y H:i")}}</i></strong>
                    </footer>
                    <div class="row">
                        @php
                            echo '<p style=" img { max-width: 100%;}">' . $article->article . '</p>';
                        @endphp
                    </div>

                    <div>
                        <h4>Quelques images relatives à l'article</h4>
                        {{-- Aficher les images des l'article --}}

                        <?php
                        $dir = './files/' . $article->id;
                        $scandir = scandir($dir);
                        foreach ($scandir as $fichier) {
                        if (preg_match("#\.(jpg|jpeg|png|gif|bmp|tif)$#", strtolower($fichier))) {

                        $url = asset('files/' . $article->id . '/' . $fichier);
                        $image = '';
                        ?>
                        <img src=" {{ $url }}" alt="{{ $url }}" class="img-thumbnail m-1" width="100"
                            height="100">
                        <?php
                        }
                        }
                        foreach ($scandir as $fichier) {
                        if (is_dir($fichier) and $fichier != '.' and $fichier != '..') {
                        echo $fichier . '<br />';
                        }
                        }
                        foreach ($scandir as $fichier) {
                        if (substr(strtolower($fichier), -4, 4) == '.php') {
                        echo "$fichier<br />";
                        }
                        }
                        ?>
                        <br><a href="#" class="btn btn-primary" type="button">Ouvrire l'album</a>
                    </div>



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
            <div class="row mt-2">
                <div class="col-9">
                    <div class="row">
                        <div class="col">

                        </div>
                        <div class="col-11">
                            <p class="h2 text-warning mx-3"><strong>Autres publications </strong></p>
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('./files/ChocolateFruit-scaled.jpg1619439480.jpg') }}"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-warning h5">Some quick example text to build on the card title
                                        and make up the
                                        bulk of the card's content.</p>
                                    <p>Mardi 5.12.2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </div>

@endsection
