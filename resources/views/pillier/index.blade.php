@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="col-lg-12 text-dark">
            <div class="row mb-3" style="margin-left: 25%">
                <h1> <strong> Les pilliers de la Fondation Panzi</strong></h1>
            </div>

            <div class="row">
                <div class="col-sm-2 col-md-2">
                    <x-menu-projet />
                </div>
                <div class="col-lg-10 ">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('files/other/pillier.svg') }}" width="380px" alt="">
                        </div>
                        <div class="col-7">
                            <h1 class="display-6">Le modèle de Panzi appelé également « Guichet unique » ou « <a href="">One
                                    Stop Center</a> » est un modèle
                                qui a été mis au point par le Docteur Mukwege en 2005.
                            </h1>
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
                                poursuivre leur bourreaux et demander justice.
                            </p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="border">
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
                                poursuivre leur bourreaux et demander justice.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
