@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="col-lg-12 text-dark">
            <div class="row">
                <x-cat-news />
                <div class="col-lg-7 ">
                    @if ($offre->state == 0)
                        <div class="alert alert-primary" role="alert">
                            Retourner à la page d'<a href="{{ route('blogs.edit', $offre->id) }}"
                                class="alert-link">édition</a>
                        </div>
                    @endif
                    <div class="servive-block rounded servive-block-yellow">
                        <h2 class="heading-md">{{ $offre->titre }}</h2>
                        @php
                            $type = ['1' => 'Temps plein', '2' => 'Temps partiel', '3' => 'Consultant', '4' => 'Journalier', '5' => "Appele d'offres"];
                        @endphp
                        <p>
                            <span class="badge"><i class="fa fa-history" aria-hidden="true"></i> {{ $type[1] }} </span>
                            <span class="badge"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                {{ $offre->lieu }}</span>
                        </p>
                        <span>Date limite: <strong>{{ date_format($offre->updated_at, 'd/m/Y') }}</strong></span>
                        <a href="#p"><span class="badge badge-success">Postiler</span></a>
                    </div>
                    </footer>
                    <div class="row">
                        @php
                            echo '<p style=" img { max-width: 100%;}">' . $offre->description . '</p>';
                        @endphp
                    </div>

                    <hr>
                    <section id="p">
                        @php
                            $file = $offre->titre . '_' . $offre->id;
                        @endphp
                        <a href="{{ asset('files/doc/offre_' . $file . '.pdf') }}">
                            <strong><i class="fa fa-download"></i>Télecharger l'offre</strong>
                        </a>
                        <p class="h3">Soumetre ta cadidature</p>
                        <iframe width="640px" height="480px"
                            src="https://forms.office.com/Pages/ResponsePage.aspx?id={{$offre->formulaire}}&embed=true"
                            frameborder="0" marginwidth="0" marginheight="0"
                            style="border: none; max-width:100%; max-height:100vh" allowfullscreen webkitallowfullscreen
                            mozallowfullscreen msallowfullscreen> </iframe>
                        <br><br>
                    </section>
                </div>
                <div class="col-lg-3 ">
                    @include('Components.offre')
                </div>
            </div>

        </div>
    </div>

@endsection
