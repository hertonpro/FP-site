@extends('layouts.layout')

@section('content')
    <div class="container align-items-center">
        <h1 class=" display-2">Cité de joie</h1>
        <p class="h2 text-warning">Centre de transit et d’autonomisation des femmes</p>
        <img src="{{ asset('img/fp/coj.jpg') }}" style="width: 100%; height: 270px; object-fit: cover;"
            alt="Cité de joie">
        <div class="row mt-4">
            <div class="col">

            </div>
            <div class="col-7">
                <p>
                    The City of Joy est une communauté de leadership transformationnel pour les femmes victimes de violence,
                    située à Bukavu, dans l'est de la République démocratique du Congo (RDC). Conçue, détenue et gérée par
                    des Congolais locaux, la Cité de la Joie a prospéré depuis qu'elle a ouvert ses portes en juin 2011,
                    guérissant les femmes de leurs traumatismes passés grâce à des programmes de thérapie et de compétences
                    de vie tout en leur fournissant les ingrédients essentiels nécessaires pour aller de l'avant dans vie –
                    amour et communauté.</p>

                <p>Au service de 90 survivantes de violence sexiste âgées de 18 à 30 ans à la fois, City of Joy a diplômé
                    1472 femmes leaders depuis son ouverture en 2011.</p>

                <p>La Cité de la Joie est un projet de la Fondation Panzi (RDC) et de V-Day. <a href="https://cityofjoycongo.org/about-city-of-joy/">Lire plus sur le site de la joie</a></p>
            </div>
            <div class="col-3">
                @include('Components.offre')
            </div>
            <div class="col-dm-9">
                <img src="{{ asset('img/fp/trifold.jpg') }}" style="width: 100%;  object-fit: cover;" alt="Cité de joie">
            </div>
            
        </div>
    </div>

@endsection
