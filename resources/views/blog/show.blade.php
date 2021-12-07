<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = 'https';
} else {
    $url = 'http';
}

// Ajoutez // à l'URL.
$url .= '://';

// Ajoutez l'hôte (nom de domaine, ip) à l'URL.
$url .= $_SERVER['HTTP_HOST'];

// Ajouter l'emplacement de la ressource demandée à l'URL
$url .= $_SERVER['REQUEST_URI'];
@endphp

<head>
    <x-meta />
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <style>
        /* ============ desktop view ============ */
        @media all and (min-width: 992px) {
            .navbar .nav-item .dropdown-menu {
                display: none;
            }

            .navbar .nav-item:hover .nav-link {}

            .navbar .nav-item:hover .dropdown-menu {
                display: block;
            }

            .navbar .nav-item .dropdown-menu {
                margin-top: 0;
            }
        }

        /* ============ desktop view .end// ============ */

    </style>
</head>

<body class=" bg-light text-secondary">
    <div class="container-fluid text-right align-items-end bg-warning" style=" height:4%">
        <a href="#" class=""> <img src="{{ asset('img/icones/united_states_icon_127943.png') }}" class="h-50"
                alt="drapeau pays">
            <abbr title="english">{{ str_replace('_', '-', app()->getLocale()) }}</abbr> </a>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col"></div>
            <div class="col-lg-10 bg-white">
                <x-menu></x-menu>
                <!-- ============= COMPONENT ============== -->
                <div class="container-fluid">
                    <div class="col-lg-12 text-dark">
                        <div class="row">
                            <div class="col-lg-2">
                                <x-cat-news />
                            </div>
                            <div class="col-lg-7 ">
                                @if (Session::get('message'))
                                    <div class="alert alert-primary" role="alert">
                                        Retourner à la page d'<a href="{{ route('blogs.edit', $article->id) }}"
                                            class="alert-link">édition</a>
                                    </div>
                                @endif

                                {{ Session::get('edition') }}
                                <h1 class="text-warning"><strong>{{ $article->titre }}</strong></h1>
                                <p class="blockquote-footer">{{ $article->tag }}<br>
                                    <strong><i>{{ $article->type }}</i>
                                        <i>{{ date_format($article->updated_at, 'd/m/Y H:i') }}</i></strong>
                                </p>
                                <div class="small text-right">
                                    <a href="#comment">
                                        <div class="btn btn-primary btn-xs">Ajouter commenter...</div>
                                    </a>
                                </div><br>

                                @if ($article->type != 'vidéo')
                                    <img src="{{ asset('files/' . $article->id . '/' . $article->img) }}"
                                        class="img-thumbnail art-img" alt="{{ $article->titre }}">
                                @endif

                                <div class="row">
                                    @php
                                        echo '<p style=" img { max-width: 100%;}">' . $article->article . '</p>';
                                        
                                    @endphp
                                </div>
                                {{-- Image relatife à l'article --}}
                                <div>
                                    <h4>Quelques images relatives à l'article</h4>
                                    @foreach ($scandir as $fichier)

                                        @if (preg_match(" #\.(jpg|jpeg|png|gif|bmp|tif)$#",
                                            strtolower($fichier)))
                                            <a href="#{{ $fichier }}"><img
                                                    src=" {{ asset('files/' . $article->id . '/' . $fichier) }}"
                                                    class="img-thumbnail m-1" width="100" height="100"></a>
                                        @elseif (is_dir($fichier) and $fichier != '.' and $fichier != '..')
                                            {{ $fichier }}<br />
                                        @elseif (substr(strtolower($fichier), -4, 4) == '.php')
                                            {{ $fichier }}<br />
                                        @endif
                                    @endforeach
                                    <br>

                                    @foreach ($scandir as $fichier)
                                        @if (preg_match(" #\.(jpg|jpeg|png|gif|bmp|tif)$#",
                                            strtolower($fichier)))
                                            <a href="#_1" class="lightbox trans" id="{{ $fichier }}"><img
                                                    src=" {{ asset('files/' . $article->id . '/' . $fichier) }}"></a>
                                        @endif
                                    @endforeach
                                </div>
                                <hr>
                                {{-- Commentaires --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Partager:</h5>
                                        <!-- Load Facebook SDK for JavaScript -->
                                        <div id="fb-root"></div>
                                        <script>
                                            (function(d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id)) return;
                                                js = d.createElement(s);
                                                js.id = id;
                                                js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }(document, 'script', 'facebook-jssdk'));
                                        </script>

                                        <!-- Your share button code -->
                                        <div class="fb-share-button mb-2" data-href="{{ $url }}"
                                            data-layout="button_count">
                                        </div><br>
                                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw"
                                            class="twitter-share-button" data-text="{{ $article->tag }}"
                                            data-url="{{ $url }}" data-via="PanziFoundation"
                                            data-related="PanziFoundation" data-lang="fr"
                                            data-show-count="false">Tweet</a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="small text-right">
                                            <h5>Stats:</h5>
                                            <div> <i class="fa fa-comments-o"> </i> {{ count($comments) }} comments
                                            </div>
                                            <i class="fa fa-eye"> </i> {{$article->views}} views
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
                                                    <input hidden type="text" name="user_id"
                                                        value="{{ auth()->user()->id }}">
                                                    <textarea class="form-control" name="comment"
                                                        id="exampleFormControlTextarea1" rows="3"></textarea>

                                                    <div class="small text-right mt-1">
                                                        @csrf
                                                        <button class="btn btn-primary btn-xs"
                                                            type="submit">commentez</button>
                                                    </div>
                                                @else
                                                    <div class="alert alert-danger" role="alert">
                                                        Connectez-vous <strong><a href="/login">ici</a></strong> pour
                                                        commenter !!!
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
                                </form>
                            </div>
                            <div class="col-lg-3 ">
                                @include('components.offre')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->

                <footer class="row page-footer font-small pt-4 text-white bg-secondary ">

                    <!-- Footer Links -->
                    <div class="container-fluid text-center text-md-left">

                        <!-- Grid row -->
                        <div class="row">
                            <div class="col">

                            </div>

                            <!-- Grid column -->
                            <div class="col-md-3 mt-md-0 mt-3 ml-5">

                                <!-- Content -->
                                <h5 class="text-uppercase">Contacts</h5>
                                <p>info@fondationpanzirdc.org</p>
                                <p>+243 81 95 03 254</p>
                                <p>Bukavu, RDC, Q. Panzi, N0: 625</p>
                                <div class="my-4 text-warning">
                                    <ul class="list-unstyled list-inline mb-0">
                                        <li class="list-inline-item me-3"><a href="#!"><svg
                                                    class="bi bi-youtube text-warning"
                                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.122C.002 7.343.01 6.6.064 5.78l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z">
                                                    </path>
                                                </svg></a></li>
                                        <li class="list-inline-item me-3"><a href="#!"><svg
                                                    class="bi bi-twitter text-warning"
                                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                                                    </path>
                                                </svg></a></li>
                                        <li class="list-inline-item me-3"><a class="text-decoration-none" href="#!"><svg
                                                    class="bi bi-facebook text-warning"
                                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                                    </path>
                                                </svg></a></li>
                                        <li class="list-inline-item me-3"><a href="#!"><svg
                                                    class="bi bi-linkedin text-warning"
                                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z">
                                                    </path>
                                                </svg></a></li>
                                        <li class="list-inline-item me-3"><a href="#!"><svg
                                                    class="bi bi-instagram text-warning"
                                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                                                    </path>
                                                </svg></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <hr class="clearfix w-100 d-md-none pb-3">

                            <!-- Grid column -->
                            <div class="col-md-2 mb-md-0 mb-3">

                                <!-- Links -->
                                <h5 class="text-uppercase">Raccoursis</h5>

                                <ul class="list-unstyled">
                                    <li><a style="color: gainsboro" href="#">Dr. Drenis Mukwege</a></li>
                                    <li><a style="color: gainsboro" href="#">Rapport annuel</a></li>
                                    <li><a style="color: gainsboro" href="#">Panzi news </a></li>
                                    <li><a style="color: gainsboro" href="#">Galerie</a></li>
                                    <li><a style="color: gainsboro" href="#">Fundraising</a></li>
                                </ul>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-3 mb-md-0 mb-3">

                                <!-- Links -->
                                <h5 class="text-uppercase">Contactez-nous</h5>

                                <div class="form-group">
                                    <input name="titre" type="texte" placeholder="Entre titre" value="Nom complet"
                                        class="form-control rounded form-control-sm">
                                    <input name="titre" type="texte" placeholder="Entre titre" value="Nom complet"
                                        class=" mt-2 form-control rounded form-control-sm">
                                    <textarea name="" class="form-control rounded mt-2" id="" cols="20"
                                        rows="5"></textarea>
                                    <button class="btn btn-primary mt-2" type="button">Envoyer</button>
                                </div>

                            </div>
                            <!-- Grid column -->
                            <div class="col">

                            </div>
                        </div>
                        <!-- Grid row -->
                    </div>
                    <!-- Footer Links -->

                    <!-- Copyright -->
                    <div class="col-12 footer-copyright text-center bg-dark py-3">© 2021 Copyright:
                        <a style="color: gainsboro" href="https://fondationpanzirdc.org/"> fondationpanzirdc.com</a>
                    </div>
                    <!-- Copyright -->

                </footer>
            </div>
            <div class="col"></div>
        </div>
    </div>
    @livewireScripts()
</body>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
</script>

</html>
