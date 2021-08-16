@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="col-lg-12 text-dark">
            <div class="row mb-3" style="margin-left: 25%">
                <h1 class=" display-3"> <strong>One Stop Center</strong></h1>
            </div>

            <div class="row">
                <div class="col-sm-2 col-md-2">
                    <x-menu-projet />
                </div>
                <div class="col-lg-10 ">
                    <div class="row">

                        <div class="col-lg-7">
                            <h1 class="display-6">Le modèle de Panzi appelé également « Guichet unique » ou « One
                                    Stop Center» est un modèle
                                qui a été mis au point par le Docteur Mukwege en 2005.
                            </h1>
                            <br><br><br><br>
                            <p class=" font-size-18">
                                Le Professeur Denis Mukwege définit le « One Stop Center », comme « une prise en charge
                                holistique des survivantes de violences sexuelles et autres personnes vulnérables en les
                                faisant bénéficier de tous les services dont ils ont besoin à la carte (selon leurs besoins
                                et leurs choix) et à un même endroit. Par cette approche, le ou la bénéficiaire jouit d’un
                                circuit de prise en charge intégrale et confidentielle.
                                Il a élaboré ce modèle après s’être
                                rendu compte que certaines victimes de viols repartant dans leur environnement et leur
                                communauté risquaient de revivre la violence sexuelle et étaient stigmatisées et rejetées
                                par leur famille. Elles ne trouvaient pas de travail et ne savaient pas subvenir a leurs
                                besoins ni a ceux de leurs enfants et familles. La guérison médicale n’était qu’une guérison
                                substantielle et les survivantes, pour avoir une chance de survivre également mentalement et
                                économiquement devaient pouvoir bénéficier d’une aide psychosociale, d’une formation et de
                                l’octroi de micros-crédits afin de pouvoir commencer une activité génératrice de revenu.
                                Elles devaient aussi avoir accès à une aide juridique et judiciaire afin de pouvoir
                                poursuivre leur bourreaux et demander justice.
                            </p>
                        </div>
                        <div class="col">
                            <img src="{{asset('files/other/pillier.png')}}" width="100%" alt="">
                        </div>
                        
                    </div>
                    <div class="row mt-4">
                        <div class="col-9">
                            <video autoplay width="320" height="240" controls>
                                <source src="public/img/One stop center.mp4" type="video/mp4">
                            </video>
                            <p>
                                Il a élaboré ce modèle après s’être
                                rendu compte que certaines victimes de viols repartant dans leur environnement et leur
                                communauté risquaient de revivre la violence sexuelle et étaient stigmatisées et rejetées
                                par leur famille. Elles ne trouvaient pas de travail et ne savaient pas subvenir a leurs
                                besoins ni a ceux de leurs enfants et familles. La guérison médicale n’était qu’une guérison
                                substantielle et les survivantes, pour avoir une chance de survivre également mentalement et
                                économiquement devaient pouvoir bénéficier d’une aide psychosociale, d’une formation et de
                                l’octroi de micros-crédits afin de pouvoir commencer une activité génératrice de revenu.
                                Elles devaient aussi avoir accès à une aide juridique et judiciaire afin de pouvoir
                                poursuivre leur bourreaux et demander justice.</p>

                                Les projets mis en œuvre par la Fondation Panzi sont basés sur un modèle holistique reposant
                                sur quatre piliers
                                <p class="ml-4">1. Médical : prise en charge médicale et chirurgicale de victimes des violences sexuelles ;
                                distribution des kits de Prophylaxie post Exposition (PEP/VS) dans les zones de santé
                                reculées ; appui à l’Hôpital Général de Référence de Panzi et ses deux centres hospitaliers
                                ruraux (Bulenga et Mulamba) construits par la Fondation Panzi grâce aux prix reçus par le Dr
                                Mukwege ; prise en charge des victimes de violences sexuelles (psychologique, médicale,
                                légale et sociale) sur le terrain par des équipes de la clinique mobile ; renforcement de
                                capacités des médecins et autres prestataires de soins ; soutien aux zones de santé dans la
                                prise en charge des victimes de violences sexuelles ;</p>
                                <p class="ml-4">
                                2. Psychosocial : Appui au service psychosocial de l’hôpital général e référence de Panzi ;
                                renforcement des capacités des relais communautaires et des prestataires des soins
                                psycho-sociaux dans toutes les zones de santé du Sud-Kivu, dans la prise en charge des soins
                                de santé mentale.</p>
                                <p class="ml-4">3. Réinsertion socio-économique : formation en métiers divers ; hébergement et protection en
                                transit ; octroi des kits de réinsertion après formation ; intégration dans les groupes
                                d’intérêt économique (associations villageoises d’épargne et de crédit, AVEC et mutuelle de
                                solidarité, MUSO ; formation en compétence d’affaires, leadership ; éducation non formelle
                                par l’alphabétisation et la scolarisation ; divers appuis académiques ;</p>
                                <p class="ml-4">4. Accompagnement juridique et judiciaire : assistance juridique et judiciaire aux victimes
                                des violences sexuelles et basées sur le genre ainsi qu’à d’autres vulnérables ; mise à
                                disposition des avocats ; appui à l’organisation des chambres foraines ; mise en place et
                                appui au fonctionnement des cliniques juridiques locales ; organisation des « cafés
                                juridiques » avec les acteurs judiciaires et intervenants dans le domaine de la justice ;
                                organisation des formations et informations sur les instruments juridiques qui protègent et
                                qui réhabilitent les droits humains</p>
                                    <img src="{{asset('files/other/CE.png')}}" width="100%" alt="">
                                <h4>Autres secteurs d’intervention</h4> 
                                <p>La Fondation Panzi intervient dans l’éducation et la formation par l’octroi des bourses
                                d’études aux médecins en spécialisation en RDC et en dehors de la RDC ; par le paiement des
                                frais scolaires et académiques pour les enfants issus de familles vulnérables ;la
                                construction et réhabilitation des infrastructures scolaires ;
                                appui aux organisations de la société civile et aux organisations féminines pour le
                                changement de comportement ; appui aux projets de pacification, démocratie et bonne
                                gouvernance ; plaidoyer pour un secteur minier responsable et au service du développement
                                local</p>

                                <h4>Catégorie de bénéficiaires</h4>
                                <p> survivantes des violences sexuelles et autres formes des violences basées sur le genre ;
                                les femmes victimes des violences sexuelles ; les femmes souffrant de pathologies
                                gynécologiques (prolapsus, fistules et PVV) ; prestataires de soins médicaux et
                                psycho-sociaux ; professionnelle de sexe ; femmes très vulnérables ; enfant vivant autour
                                des mines.</p>
                                <p><strong>Institutions :</strong>  la clinique juridique, <a href="http://fondationpanzi.org/joie">la cité de la joie</a> , <a href="http://fondationpanzi.org/md">la maison Dorcas</a> , le centre
                                international de recherche et de formation avancée (ICART)</p>

                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
