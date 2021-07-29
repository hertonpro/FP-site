@extends('layouts.layout')

@section('content')
    <div class="container align-items-center">
        <h1 class=" display-4">PHD. Dr. Denis Mukwege</h1>
        <p class="h5 text-warning">Médecin directeur de l'hôpital de Panzi, Fondateur et PCA de la fondation Panzi,
            Co-fondateur de la Cité de joie </p>
        <img src="{{ asset('img/fp/drm2.jpg') }}" style="width: 100%; height: 270px; object-fit: cover;"
            alt="la joie après prosses clinique juridique">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#hp">Honneurs et Prix</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Citations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Pubications</a>
            </li>
        </ul>
        <div class="row mt-4">

            <div class="col-md-12">
                <p>
                    Le docteur Denis Mukwege, chirurgien gynécologique de renommée mondiale, est le fondateur et le
                    directeur médical de l'hôpital Panzi de Bukavu, en République démocratique du Congo (RDC). Jeune enfant,
                    le Dr Mukwege a accompagné son père, un pasteur pentecôtiste, lors d'une visite à des membres malades de
                    la communauté. Cela l'a inspiré plus tard à devenir médecin. La mission pentecôtiste suédoise l'a aidé
                    dans ses études de médecine. Il a décidé de se spécialiser en gynécologie et en obstétrique après avoir
                    constaté que les patientes de l'hôpital Lemera souffraient de soins médicaux insuffisants, ce qui
                    entraînait des complications lors de leur accouchement. Il a fondé l'hôpital en 1999 en tant que
                    clinique de soins gynécologiques et obstétricaux, et devait travailler sur des questions de santé
                    maternelle. Depuis 1999, cependant, le Dr Mukwege et son personnel ont aidé à prendre en charge plus de
                    50 000 victimes de violences sexuelles. L'hôpital traite non seulement les survivants avec des blessures
                    physiques, mais fournit également des services juridiques et psychosociaux à ses patients. Même les
                    patients qui ne peuvent pas se permettre des soins médicaux après un viol sont traités gratuitement à
                    l’hôpital Panzi. M. Mukwege n'a pas ménagé ses efforts pour renforcer la protection des femmes et
                    plaider pour que les responsables de violences sexuelles soient traduits en justice, y compris le
                    gouvernement congolais et des groupes de milices assiégeant l'est de la RDC.
                </p>
                <div class="row">
                    <div class="col-md-6">
                        En octobre 2012, le Dr Mukwege a été violemment attaqué et sa famille a été arrêtée à la maison avec
                        une arme à feu à son domicile dans une tentative d'assassinat. Joseph Bizimana, son ami de confiance
                        et agent de sécurité, a été tué. L’attaque intervient plusieurs semaines après que le Dr. Mukwege a
                        dénoncé les 16 années de conflit dans le pays et demandé que les responsables présumés soient
                        traduits en justice lors d’un discours prononcé aux Nations Unies. Après cette attaque, le Dr
                        Mukwege et sa famille ont fui le pays pour sa sécurité, mais ses nombreux patients et collègues
                        congolais l'ont exhorté à reprendre ses activités vitales à l'hôpital de Panzi. Il est retourné à
                        l'hôpital en janvier 2013 et a été fêté par une foule de gens extatiques de l'avoir à la maison. Au
                        cours de cette période difficile, Physicians for Human Rights (PHR) a travaillé en étroite
                        coordination avec le Dr Mukwege et ses collègues menacés en RDC afin de mobiliser une campagne
                        mondiale de défense et de protection des personnes travaillant en première ligne pour aider les
                        survivants d'atrocités de masse et poursuivre leurs auteurs. de ces crimes de masse.
                        <br>
                        Dr. Mukwege est également membre du comité consultatif de la Campagne internationale contre le viol
                        et
                        la violence sexiste dans les conflits. Il a reçu de nombreux prix dans le monde entier,
                        <a class="text-warning " href="https://www.nobelpeaceprize.org/Prize-winners/Winners/2018">notament
                            le prix Nobel de la pix
                            2018</a>, pour son plaidoyer contre les violences sexuelles en tant qu'arme de guerre et pour
                        ses
                        services exceptionnels aux victimes de viol.
                    </div>
                    <div class="col-md-6">
                        <iframe width="555" height="314"
                            src="https://www.youtube.com/embed/JQ8CVeHb1KY?list=TLGGEwqRpCKNm_MxOTA3MjAyMQ"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <section id="hp">
            <h2 class="centre m-4">Honneurs et Prix</h2>
            <div class="row text-center align-items-center">
                @foreach ($awards as $award)
                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="{{ $award->denomination }}">
                        <div class="col-sm-2  m-2">
                            <a href="{{ $award->url }}" target=_blank>
                                <img src="{{ asset('files/prix/' . $award->logo) }}" alt="{{ $award->denomination }}">
                            </a>
                        </div>
                    </span>
                @endforeach
            </div>
        </section>
        <section id="dis">
            <h2 class="centre m-4">Les meilleurs citations du Dr. Mukwege</h2>
            @foreach ($quotes as $quote)
                <div class="col-4">
                    @php
                        echo $quote->code;
                    @endphp
                </div>
            @endforeach
        </section>




        <p>suivre sur: <br>
            <a class="btn " href="http://facebook.com/DrDenisMukwege" style="background-color: blue; color:white"><i
                    class="fa fa-facebook"></i> Facebook</a>
            <a class="btn " href="http://twitter.com/denismukwege" style="background-color: rgb(0, 94, 201); color:white"><i
                    class="fa fa-twitter"></i> Twitter</a>
            <a class="btn " href="https://www.instagram.com/drdenismukwege/"
                style="background-color: rgb(139, 15, 113); color:white"><i class="fa fa-instagram"></i>
                Instagram</a>
        </p>
        <div class="col-3">
            <x-offre></x-offre>
        </div>
    </div>

@endsection
