@extends('layouts.layout')

@section('content')
    <div class="container align-items-center">
        <h1 class=" display-2">One stop <strong class=" warning">centre</strong></h1>
        <p class="h2 text-warning">Contribuer à la lutte contre l’impunité</p>
        <div class="row mt-4">

            <div class="col-9">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#panzi" role="tab"
                            aria-controls="home" aria-selected="true">Guichet unique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Photos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="eq-tab" data-toggle="tab" href="#eq" role="tab" aria-controls="eq"
                            aria-selected="false">Notre équipe</a>
                    </li>
                </ul>
                <h4 class="card-title">Presentation</h4>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="panzi" role="tabpanel" aria-labelledby="panzi-tab">
                        <p>
                            Le Professeur Denis Mukwege définit le « One Stop Center », comme « une prise en charge
                            holistique des
                            survivantes de violences sexuelles et autres personnes vulnérables en les faisant bénéficier de
                            tous les
                            services dont ils ont besoin à la carte (selon leurs besoins et leurs choix) et à un même
                            endroit. Par
                            cette approche, le ou la bénéficiaire jouit d’un circuit de prise en charge intégrale et
                            confidentielle.
                            Il a élaboré ce modèle après s’être rendu compte que certaines victimes de viols repartant dans
                            leur
                            environnement et leur communauté risquaient de revivre la violence sexuelle et étaient
                            stigmatisées et
                            rejetées par leur famille. Elles ne trouvaient pas de travail et ne savaient pas subvenir a
                            leurs
                            besoins ni a ceux de leurs enfants et familles. La guérison médicale n’était qu’une guérison
                            substantielle et les survivantes, pour avoir une chance de survivre également mentalement et
                            économiquement devaient pouvoir bénéficier d’une aide psychosociale, d’une formation et de
                            l’octroi de
                            micros-crédits afin de pouvoir commencer une activité génératrice de revenu. Elles devaient
                            aussi avoir
                            accès à une aide juridique et judiciaire afin de pouvoir poursuivre leur bourreaux et demander
                            justice.
                        </p>
                        <h2>les formations organisées par <strong>la maison Dorcas</strong></h2>
                        <div class="embed-responsive embed-responsive-16by9">
                            <video width="320" height="240" autoplay controls loop muted>
                                <source src="{{ asset('img/One stop center.mp4') }}" type="video/mp4">
                                <source src="movie.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="row activitys mt-4 mx-auto">
                            <div class=" d-flex align-items-end rounded-lg m-1"
                                style="height:8em; width:12em; background-image: url('{{ asset('img/fp/mr.jpg') }}');">
                                <div class="col-lg-12" style=" background:hsla(0, 0%, 26%, 0.6); color:#FFC20C;">
                                    <h3 class="font-weight-bold text-center">Maroquinerie</h3>
                                </div>
                            </div>
                            <div class=" d-flex align-items-end rounded-lg m-1"
                                style="height:8em; width:12em; background-image: url('{{ asset('img/fp/dc.jpg') }}');">
                                <div class="col-lg-12" style=" background:hsla(0, 0%, 26%, 0.6); color:#FFC20C;">
                                    <h3 class="font-weight-bold text-center">Dance</h3>
                                </div>
                            </div>
                            <div class=" d-flex align-items-end rounded-lg m-1"
                                style="height:8em; width:12em; background-image: url('{{ asset('img/fp/cou.jpg') }}');">
                                <div class="col-lg-12" style=" background:hsla(0, 0%, 26%, 0.6); color:#FFC20C;">
                                    <h3 class="font-weight-bold text-center">Couture</h3>
                                </div>
                            </div>
                            <div class="d-flex align-items-end rounded-lg m-1"
                                style="height:8em; width:12em; background-image: url('{{ asset('img/fp/dr2.jpg') }}');">
                                <div class="col-lg-12" style=" background:hsla(0, 0%, 26%, 0.6); color:#FFC20C;">
                                    <h3 class="font-weight-bold text-center">informatique</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row activitys mx-auto">
                            <div class=" d-flex align-items-end rounded-lg m-1"
                                style="height:8em; width:12em; background-image: url('{{ asset('img/fp/mot.jpg') }}');">
                                <div class="col-lg-12" style=" background:hsla(0, 0%, 26%, 0.6); color:#FFC20C;">
                                    <h3 class="font-weight-bold text-center">Motivation</h3>
                                </div>
                            </div>
                            <div class=" d-flex align-items-end rounded-lg m-1"
                                style="height:8em; width:12em; background-image: url('{{ asset('img/fp/al.jpg') }}');">
                                <div class="col-lg-12" style=" background:hsla(0, 0%, 26%, 0.6); color:#FFC20C;">
                                    <h3 class="font-weight-bold text-center">Alphabétisation</h3>
                                </div>
                            </div>
                            <div class=" d-flex align-items-end rounded-lg m-1"
                                style="height:8em; width:12em; background-image: url('{{ asset('img/fp/coi.jpg') }}');">
                                <div class="col-lg-12" style=" background:hsla(0, 0%, 26%, 0.6); color:#FFC20C;">
                                    <h3 class="font-weight-bold text-center">Coiffure </h3>
                                </div>
                            </div>
                            <div class="d-flex align-items-end rounded-lg m-1"
                                style="height:8em; width:12em; background-image: url('{{ asset('img/fp/tra.jpg') }}');">
                                <div class="col-lg-12" style=" background:hsla(0, 0%, 26%, 0.6); color:#FFC20C;">
                                    <h3 class="font-weight-bold text-center">Transformation</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <p>
                            <!--historique-->
                        </p>
                    </div>
                    <div class="tab-pane fade" id="eq" role="tabpanel" aria-labelledby="eq-tab">
                        <div class="container py-3">
                            <div class="title h1 text-center">Conseil d'administration</div>
                            <!-- Card Start -->
                            <div class="card m-2">
                                <div class="row ">
                                    <div class="col-md-5">
                                        <img class="d-block w-100" src="{{ asset('files/dr.jpg') }}" alt="">
                                    </div>
                                    <div class="col-md-7 px-3">
                                        <div class="card-block px-6">
                                            <h4 class="card-title">Dr. Denis Mukwege</h4>
                                            <p class="text-warning">Président - MD, PHD (Prix nobel)</p>
                                            <p class="card-text">Le Dr Denis Mukwege, lauréat du prix Sakharov 2014, a
                                                fondé
                                                l’hôpital Panzi en 1999 en réponse à la guerre dévastatrice qui a entouré sa
                                                communauté dans les provinces orientales de la République démocratique du
                                                Congo. L’hôpital dessert aujourd’hui une population de 400 000 habitants en
                                                tant qu’Hôpital Général de Référence pour la Zone de Santé d’Ibanda en RDC,
                                                avec une gamme complète de services de santé.</p>
                                            <p class="card-text">En conséquence directe de la guerre, la mortalité
                                                maternelle était en hausse. La sécurité de toutes les femmes et de toutes
                                                les filles a été affectée par des forces brutales qui ont ravagé leur corps
                                                de façon inimaginable. Le premier patient du Dr Mukwege était un survivant
                                                de viol, dont les organes reproducteurs avaient été brutalement détruits.
                                                Alors que la violence contre les femmes et les filles s’intensifiait
                                                dramatiquement dans le contexte des guerres au Congo, le Dr Mukwege et le
                                                personnel de l’hôpital Panzi ont consacré des ressources importantes au
                                                traitement des femmes souffrant de fistule et d’autres blessures
                                                gynécologiques complexes – traumatiques et obstétriques <a href="/dr"
                                                    class="text-warning">...Lire plus</a></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                        </div>
                        <div class="card float-right border-0 col-6">
                            <div class="row">
                                <div class="col-sm-5">
                                    <img class="d-block w-100" src="{{ asset('files/ti.jpg') }}" alt="">
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-block">
                                        <h4 class="card-title">DR. AMISI NOTIA CHRISTINE</h4>
                                        <p class="text-warning">Sécretaire Executive</p>
                                        <p>Dr Christine Amisis « Dr. Tina » est la secrétaire exécutive de la Fondation
                                            Panzi. Elle est la responsable de la mise en œuvre du modèle holistique de
                                            réparation de la Fondation Panzi. Le Dr Tina est également une championne
                                            intrépide des femmes, et médecin exerçant à Panzi dans le service OB-GYN,
                                            spécialisée dans les fistules urogénitales.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 col-6">
                            <div class="row">
                                <div class="col-sm-5">
                                    <img class="d-block w-100" src="{{ asset('files/ds.jpg') }}" alt="">
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-block">
                                        <h4 class="card-title">CHRISTINE SCHULER DESCHRYVER</h4>
                                        <p class="text-warning">Vice-Présidente</p>
                                        <p>Christine Schuler Deschryver « Mama Christine » est la vice-présidente de la
                                            Fondation Panzi et l'un des leaders les plus influents et inspirants de
                                            l'organisation. En plus de ses responsabilités de gestion chez Panzi, elle est
                                            également co-fondatrice et directrice de City of Joy, une communauté de
                                            leadership transformationnel pour les femmes victimes de violence à Bukavu. </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="title h1 text-center m-4">Staff</div>
                        <div class="row">
                            <div class="card border-0 col">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="{{ asset('files/4.png') }}" alt="Admin" class="rounded-circle"
                                                width="150">
                                            <div class="mt-3">
                                                <h4>MARTIN OBIERO</h4>
                                                <p class="text-secondary mb-1">Directeur Administratif & Financier</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 col">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="{{ asset('files/3.png') }}" alt="Admin" class="rounded-circle"
                                            width="150">
                                        <div class="mt-3">
                                            <h4>BERTIN RUTEGA</h4>
                                            <p class="text-secondary mb-1">Directeur des Programmes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 col">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="{{ asset('files/2.png') }}" alt="Admin" class="rounded-circle"
                                            width="150">
                                        <div class="mt-3">
                                            <h4>NATHALIE BUNGILIA</h4>
                                            <p class="text-secondary mb-1">Chargé des Ressources Humaines</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card border-0 col">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="{{ asset('files/10.jpg') }}" alt="Admin" class="rounded-circle"
                                            width="150">
                                        <div class="mt-3">
                                            <h4>Crispin Kashale</h4>
                                            <p class="text-secondary mb-1">Directeur de Communication</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 col">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="{{ asset('files/8.jpg') }}" alt="Admin" class="rounded-circle"
                                            width="150">
                                        <div class="mt-3">
                                            <h4>Ntumba muzadi Pierrot</h4>
                                            <p class="text-secondary mb-1">Responsable logistique</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 col">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="{{ asset('files/9.jpg') }}" alt="Admin" class="rounded-circle"
                                            width="150">
                                        <div class="mt-3">
                                            <h4>Patrick Musafiri</h4>
                                            <p class="text-secondary mb-1">IT Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 col">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="{{ asset('files/11.jpg') }}" alt="Admin" class="rounded-circle"
                                            width="150">
                                        <div class="mt-3">
                                            <h4>Augustin Kulimushi</h4>
                                            <p class="text-secondary mb-1">Comptable principal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
            </div>
            <div class="col-3">
                @include('Components.offre')
            </div>
        </div>
    </div>

@endsection
