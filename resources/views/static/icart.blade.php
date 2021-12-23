@extends('layouts.layout')

@section('content')
    <div class="container align-items-center">
        <h1 class=" display-4">ICART</h1>
        <p class="h5 text-warning">Le Centre International de Recherche Avancée et de Formation </p>
        <img src="{{ asset('img/fp/drm3.jpg') }}" style="width: 100%; height: 270px; object-fit: cover;"
            alt="la joie après prosses clinique juridique">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#hp">Historique</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#pub">Pubications</a>
            </li>
        </ul>
        <div class="row mt-4">

            <div class="col-md-12">
                <p>
                    Le Dr Denis Mukwege a reçu un prix de l’Université de Michigan en 2010 en reconnaissance de son travail
                    en faveur des femmes victimes des violences sexuelles ainsi que celles souffrant de graves problèmes
                    gynécologiques. L’Université de Michigan a une grande expérience dans le domaine de recherche, et est
                    régulièrement classée parmi les meilleures universités du monde. Grâce à la visite du Dr Denis Mukwege à
                    l’Université de Michigan et aux visites ultérieures effectuées par l’équipe de Michigan à Bukavu, la
                    décision de collaborer pour la création d’un centre de recherche a été prise. <br>
                    Le Centre International de Recherche Avancée et de Formation (ICART) est une initiative conjointe entre
                    la Fondation Panzi RDC, l’Hôpital de Panzi et l’Université Evangélique en Afrique. Depuis sa création en
                    septembre 2013, ICART organise des programmes de formation des chercheurs sur les méthodes de recherche,
                    sur l’éthique de recherche, la collecte, la gestion et l’analyse des données, la rédaction d’articles
                    scientifiques, la présentation et la publication des résultats etc.
                <h4>Les objectifs sont:</h4>
                <ul>
                    <li>Renforcer les capacités des chercheurs locaux</li>
                    <li>Faciliter la collaboration entre les chercheurs locaux et internationaux </li>
                    <li>S’assurer que les projets de recherche exécutés à Panzi se conforment aux normes éthiques</li>
                </ul>
                </p>
                <div>
                    <div class="row">
                        <div class="col-9">
                            <div class="row d-flex align-items-center">
                                <div class="col">
                                    <img class="img-thumbnail" src="{{ asset('img/fp/pr1.jpg') }}" width="100%" alt="">
                                    <p class="card-text"><small class="text-muted">Professeur Kanigula
                                            Mubagwa</small>
                                    </p>
                                </div>
                                <div class="col-8 p-10">
                                    <p>
                                        La vision de ICART est de devenir un centre international de recherche et de
                                        formation d’excellence largement connu pour l’utilisation des données afin de résoudre les problèmes locaux
                                        d’importance globale et renforcer les capacités transférables à la génération future. Dans une
                                        région où nos communautés continuent à souffrir des effets collatéraux de la guerre, le rôle d’un
                                        centre de recherche reste indispensable afin d’aider à comprendre les faits mais aussi y apporter des
                                        solutions basées sur des données. <br>
                                        ICART se spécialise dans les domaines de recherche ci-après :
                                    <ul>
                                        <li>Santé maternelle</li>
                                        <li>Recherche clinique</li>
                                        <li>Sciences Sociales</li>
                                        <li>Agriculture / Sécurité Alimentaire</li>
                                    </ul>
                                    A sa création, la direction du centre a été accordée au professeur Kanigula Mubagwa.
                                    Il est professeur ordinaire à la Faculté de Médecine à l’Université de Leuven, en
                                    Belgique.
                                    Il enseigne la Physiologie Humaine et mène des recherches dans le domaine
                                    d’électrophysiologie cardiaque cellulaire. Il pratique aussi la Médicine d’Urgence. Il a acquis une un statut
                                    de haut niveau en recherche sur le plan international. Néanmoins, il continue à garder ses
                                    connections scientifiques avec l’Afrique. Il a travaillé comme professeur visiteur (Physiologie)
                                    dans diverses universités en République Démocratique du Congo et a été élevé au titre du professeur
                                    honoraire de l’Université de Kwazulu-Natal, au Durban, en Afrique du Sud. Il est membre permanent de
                                    la Société Américaine de Physiologie, de la Société Biophysique et de la Société Belge pour la
                                    Physiologie et la Pharmacologie. Le professeur Mubagwa a dirigé le centre depuis sa création jusqu’en
                                    décembre 2017. <br>
                                    Le professeur Mubagwa a été remplacé par Professeur Sioban Harlow qui était entrée en
                                    fonction en janvier 2018.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            @include('Components.offre')
                        </div>
                    </div>
                    <p>
                        Le Professeur Sioban Harlow dispose de plusieurs années d’expérience en tant que professeur
                        d'épidémiologie à l’Université de Michigan où elle exerce aussi les fonctions de Directrice du
                        Centre pour les Approches Intégrées des Maladies Complexes. En tant qu’épidémiologiste, ses
                        recherches portent sur la fonction menstruelle et la morbidité gynécologique tout au long de la
                        vie.
                        Ses recherches portent également sur le développement et l'application de méthodes statistiques
                        facilitant l'analyse quantitative de la variation des processus physiologiques.
                        Le professeur Harlow a été remplacé par le professeur Marie Hatem de l’Université de Montréal en
                        2020.
                    </p><img src="{{ asset('img/fp/pr2.png') }}" alt="">
                    <p class="card-text"><small class="text-muted">Professeur Sioban Harlow</small>
                </p>

                </div>
            </div>
        </div>
        <section id="pub">
            <h2 class="centre m-4">Les publications</h2>
            <div class="row">
                @foreach ($publications as $publication)
                    @foreach ($publication->editeurs as $editeur)
                        @if ($editeur->id == 10)
                            <div class="col-3">


                                <a href="{{ $publication->link }}" target="_blank">
                                    <h2>{{ $publication->titre }}</h2>
                                </a>
                                <p>{{ $publication->abstract }}</p>
                                <p>{{ $publication->datePub }} <strong>| Editeur:</strong>
                                    @foreach ($publication->editeurs as $editeur)
                                        {{ $editeur->Nom }},
                                    @endforeach
                                </p>


                            </div>
                        @endif
                    @endforeach
                @endforeach
            </div>
        </section>



        <h2 class="centre m-4">suivre sur le <strong>Dr.Denis Mukwege:</strong></h2>
        <p class="m-2">
            <a class="btn " href="http://facebook.com/DrDenisMukwege" target="_blank|_self|_parent|_top|framename"
                style="background-color: blue; color:white"><i class="fa fa-facebook"></i> Facebook</a>
            <a class="btn " href="http://twitter.com/denismukwege" target="_blank|_self|_parent|_top|framename"
                style="background-color: rgb(0, 94, 201); color:white"><i class="fa fa-twitter"></i> Twitter</a>
            <a class="btn " href="https://www.instagram.com/drdenismukwege/"
                target="_blank|_self|_parent|_top|framename" style="background-color: rgb(139, 15, 113); color:white"><i
                    class="fa fa-instagram"></i>
                Instagram</a>
            <a class="btn " href="https://www.linkedin.com/in/dr-denis-mukwege-4732b1203/"
                target="_blank|_self|_parent|_top|framename" style="background-color: rgb(5, 119, 148); color:white"><i
                    class="fa fa-linkedin"></i>
                Linkedin</a>
        </p>
    </div>
@endsection
