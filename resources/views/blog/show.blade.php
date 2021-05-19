@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="col-lg-12 text-dark">
            <div class="row">
                <x-catNews />
                <div class="col-lg-7 ">
                    @if ($article->state != 1)
                        <div class="alert alert-primary" role="alert">
                            Retourner à la page d'<a href="{{ route('blogs.edit', $article->id) }}"
                                class="alert-link">édition</a>
                        </div>
                    @endif

                    <p class="h2 text-warning"><strong>{{ $article->titre }}</strong></p>
                    <footer class="blockquote-footer">{{ $article->tag }}<br>
                        <strong><i>{{ $article->type }}</i>
                            <i>{{ date_format($article->updated_at, 'd/m/Y H:i') }}</i></strong>
                    </footer>
                    <img src="{{ asset($article->img) }}" class="img-thumbnail art-img" alt="">
                    <div class="row">
                        @php
                            echo '<p style=" img { max-width: 100%;}">' . $article->article . '</p>';
                        @endphp
                    </div>
                    {{-- Image relatife à l'article --}}
                    <div>
                        <?php
                        $dir = './files/' . $article->id;
                        if (is_dir($dir)) {
                        $scandir = scandir($dir); ?>
                        <h4>Quelques images relatives à l'article</h4>
                        {{-- Aficher les images des l'article --}}
                        <?php
                        foreach ($scandir as $fichier) {
                        if (preg_match("#\.(jpg|jpeg|png|gif|bmp|tif)$#", strtolower($fichier))) {

                        $url = asset('files/' . $article->id . '/' . $fichier);
                        $image = '';
                        ?>

                        <img src=" {{ $url }}" alt="{{ $url }}" class="img-thumbnail m-1" width="100"
                            height="100">

                        <?php
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
                        }
                        echo '<br><a href="#" class="btn btn-primary" type="button">Ouvrire l\'album</a>';

                        }
                        ?>

                    </div>
                    <div class="small text-right">
                        <a href="#comment">
                            <div class="btn btn-primary btn-xs">Ajouter commenter...</div>
                        </a>
                    </div>
                    <hr>
                    {{-- Commentaires --}}
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Partager:</h5>
                            <button class="btn btn-primary btn-xs" type="button">Facebook</button>
                            <button class="btn btn-white btn-xs" type="button">Twiter</button>
                        </div>
                        <div class="col-md-6">
                            <div class="small text-right">
                                <h5>Stats:</h5>
                                <div> <i class="fa fa-comments-o"> </i> {{ count($comments) }} comments </div>
                                <i class="fa fa-eye"> </i> 144 views
                            </div>
                        </div>
                    </div>
                    <section id="comment">
                        <div class="row">
                            <div class="mb-3 col-12">
                                <h3>Ajouter un commentaire</h3>
                                <form action="{{ route('comment') }}" method="POST">
                                    <input hidden type="text" name="blog_id" value="{{ $article->id }}">
                                    @if (isset(auth()->user()->id))
                                        <input hidden type="text" name="user_id" value="{{ auth()->user()->id }}">
                                        <textarea class="form-control" name="comment" id="exampleFormControlTextarea1"
                                        rows="3"></textarea>

                                    <div class="small text-right mt-1">
                                        @csrf
                                        <button class="btn btn-primary btn-xs" type="submit">commentez</button>
                                    </div>
                                    @else
                                        <div class="alert alert-danger" role="alert">
                                            Connectez-vous <strong><a href="/login">ici</a></strong> pour commenter !!!
                                        </div>
                                    @endif

                                    
                                </form>
                            </div>
                        </div>
                    </section>
                    @foreach ($comments as $comment)
                        <div class="social-feed-box">
                            <div class="social-avatar">
                                <a href="" class="float-left">
                                    <img alt="image" src="{{ asset('img/profile_small.jpg') }}">
                                </a>
                                <div class="media-body">
                                    <a href="#">
                                        {{ $comment->user->name }}
                                    </a>
                                    <small
                                        class="text-muted">{{ date_format($comment->created_at, 'd/m/Y H:i') }}</small>
                                </div>
                            </div>
                            <div class="social-body">
                                <p>
                                    {{ $comment->comment }}
                                </p>
                            </div>
                        </div>
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

        </div>
    </div>

@endsection
