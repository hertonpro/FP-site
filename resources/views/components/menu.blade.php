<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="ml-5">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/Logo-fondation-panzi-site-web.png') }}" width="" height="80"
                    class="d-inline-block align-top" alt="">
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse h5" id="main_nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link border-right" href="/pillier">Nos activités<i class="arrow down"></i> </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="onesc">One stope center</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('pillier.show', '1') }}">Médicale</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('pillier.show', '2') }}">Psycho-sociale</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('pillier.show', '3') }}">Juridique</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('pillier.show', '4') }}">Socio-économique</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('pillier.show', '5') }}">Plaidoyer</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link border-right" href="{{ route('news.index') }}">Actualités<i
                            class="arrow down"></i> </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('cat', 'Panzi-news') }}">Panzi-news</a></li>
                        <li><a class="dropdown-item" href="{{ route('cat', 'Panzi-hébdo') }}">Panzi-hébdo</a></li>
                        <li><a class="dropdown-item" href="{{ route('cat', 'Blog') }}">Blogs</a> </li>
                        <li><a class="dropdown-item" href="{{ route('cat', 'Vidéos') }}">Vidéos</a> </li>
                        <li><a class="dropdown-item" href="{{ route('cat', 'Album') }}">Album</a> </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link border-right" href="fp">A propos<i class="arrow down"></i> </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/fp">Fondation Panzi</a></li>
                        <li><a class="dropdown-item" href="/cj">Nos institutions &raquo;</a>
                            <ul class="submenu">
                                <li><a class="dropdown-item" href="/cj">Clinique juridique</a></li>
                                <li><a class="dropdown-item" href="/icart">Icart</a></li>
                                <li><a class="dropdown-item" href="/md">Maison DORCAS</a></li>
                                <li><a class="dropdown-item" href="/joie">Cité de la Joie</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="/dr">Dr. Mukwege</a> </li>
                        <li><a class="dropdown-item" href="/fp/#eq">Notre equipe</a> </li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link border-right" href="/contact">Rejoignez-nous</a></li>
                @if (isset(auth()->user()->id))
                    <li class="nav-item dropdown">
                        <a href="/profil" class="nav-link text-warning" tabindex="-1">
                            <strong>Profil<i class="arrow down"></i></strong>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><span class="fa fa-gift"></span> My panzi</a>
                            <a class="dropdown-item" href="#"><span class="fa fa-wrench"></span> Parametre</a>
                            <a class="dropdown-item" href="#"><span class="fa fa-bell"></span> notification <span
                                    class="label label-success float-right">26</span></a>
                            <div class="dropdown-divider"></div>
                            <form class="dropdown-item" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn-block btn btn-primary" type="submit">logout</button>
                            </form>
                        </div>
                    </li>
                @else
                    <li class="nav-item"></li><a href="/login" class="nav-link" tabindex="-1"><strong
                            class="text-warning">Se
                            connecter</strong></a>
                @endif
            </ul>
        </div>
    </nav>
    <!-- ============= COMPONENT END// ============== -->
</div>
