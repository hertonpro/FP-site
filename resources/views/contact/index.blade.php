@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="col-lg-lg-12 text-dark">
            <div class="row">
                <div class="col-lg-2">
                    <br>
                    <a class="btn btn-block btn-primary btn-xs rounded-lg" href="">fundraising</a>
                    <a class="btn btn-block btn-primary btn-xs rounded-lg" href="">Stage</a>
                    <a class="btn btn-block btn-primary btn-xs rounded-lg" href="">volontaire</a>
                    <a class="btn btn-block btn-primary btn-xs rounded-lg" href="">Les offres</a>
                </div>
                <div class="col-lg-9">
                    <div class="bg-image"
                        style="background-image: url('{{ asset('img/fp/ALHUGUET_020.jpg') }}'); background-repeat: no-repeat; ">
                        <div class="col-lg-5 p-4 bg-white">
                            <h2 class="font-weight-bold pl-4">Rejoignez-nous</h2>
                            <p class="p-4">
                                Votre experience peu aider une benefisier,
                                Integre le programe de volonteurs de la fondation Panzi. Maintenant qu’il a grandi, vous et
                                votre enfant allez apprendre beaucoup sur la manière dont les enfants aveugles peuvent
                                apprendre à
                                faire les choses. Le fait de partager vos expériences avec des parents qui ont des bébés
                                aveugles
                                ou malvoyants peut être d’une grande utilité pour eux.
                            </p>
                            <div class="d-flex flex-row-reverse p-4">
                                <x-voluntary/>
                            </div>
                        </div>
                    </div>
                    <div class="row activitys">
                        <div class=" d-flex align-items-end rounded-lg m-2"
                            style="height:13em; width:20em; background-image: url('{{ asset('img/fp/mr.jpg') }}');">
                            <div class="col-lg-12" style=" background:hsla(0, 0%, 26%, 0.6); color:#FFC20C;">
                                <h2 class="font-weight-bold text-center">Maroquinerie</h2>
                            </div>
                        </div>
                        <div class=" d-flex align-items-end rounded-lg m-2"
                            style="height:13em; width:20em; background-image: url('{{ asset('img/fp/dc.jpg') }}');">
                            <div class="col-lg-12" style=" background:hsla(0, 0%, 26%, 0.6); color:#FFC20C;">
                                <h2 class="font-weight-bold text-center">Dance</h2>
                            </div>
                        </div>
                        <div class=" d-flex align-items-end rounded-lg m-2"
                            style="height:13em; width:20em; background-image: url('{{ asset('img/fp/cou.jpg') }}');">
                            <div class="col-lg-12" style=" background:hsla(0, 0%, 26%, 0.6); color:#FFC20C;">
                                <h2 class="font-weight-bold text-center">Couture</h2>
                            </div>
                        </div>
                        <div class="d-flex align-items-end rounded-lg m-2"
                            style="height:13em; width:20em; background-image: url('{{ asset('img/fp/dr2.jpg') }}');">
                            <div class="col-lg-12" style=" background:hsla(0, 0%, 26%, 0.6); color:#FFC20C;">
                                <h2 class="font-weight-bold text-center">informatique</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row activitys">
                        <div class=" d-flex align-items-end rounded-lg m-2"
                            style="height:13em; width:20em; background-image: url('{{ asset('img/fp/mot.jpg') }}');">
                            <div class="col-lg-12" style=" background:hsla(0, 0%, 26%, 0.6); color:#FFC20C;">
                                <h2 class="font-weight-bold text-center">Motivation</h2>
                            </div>
                        </div>
                        <div class=" d-flex align-items-end rounded-lg m-2"
                            style="height:13em; width:20em; background-image: url('{{ asset('img/fp/al.jpg') }}');">
                            <div class="col-lg-12" style=" background:hsla(0, 0%, 26%, 0.6); color:#FFC20C;">
                                <h2 class="font-weight-bold text-center">Alphabétisation</h2>
                            </div>
                        </div>
                        <div class=" d-flex align-items-end rounded-lg m-2"
                            style="height:13em; width:20em; background-image: url('{{ asset('img/fp/coi.jpg') }}');">
                            <div class="col-lg-12" style=" background:hsla(0, 0%, 26%, 0.6); color:#FFC20C;">
                                <h2 class="font-weight-bold text-center">Coiffure </h2>
                            </div>
                        </div>
                        <div class="d-flex align-items-end rounded-lg m-2"
                            style="height:13em; width:20em; background-image: url('{{ asset('img/fp/tra.jpg') }}');">
                            <div class="col-lg-12" style=" background:hsla(0, 0%, 26%, 0.6); color:#FFC20C;">
                                <h2 class="font-weight-bold text-center">Transformation</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <h3 class=" font-weight-bold text-right">découvrez d'autre activité du "<a class=" text-warning"
                                href="{{ url('onesc') }}">one stop center</a>"</h3>
                    </div>
                    <x-fund></x-fund>
                        <h2 class="font-weight-bold">Histoire de survivants</h2>
                        <p>Du cauchemar au sourire dans l'espoir d'une réparation complète</p>
                        <div class="row">
                            <div class="col-lg mb-1">
                                <div class="d-flex align-items-end rounded-lg"
                                    style="background-image: url('{{ asset('img/fp/gf.jpg') }}'); background-size:100%; height:400px;">
                                    <div style="height: 200px"></div>
                                    <div class="" style="background:hsla(0, 0%, 26%, 0.8); color:#FFC20C;">
                                        <h2 class="font-weight-bold text-center">Marieta</h2>
                                        <p class="pl-4">
                                            Votre experience peu aider une benefisier,
                                            Integre le programe de volonteurs de la fondation Panzi. Maintenant qu’il a grandi, vous
                                            et votre enfant allez apprendre beaucoup sur la manière dont les enfants aveugles
                                            peuvent apprendre à faire les choses. Le fait de partager vos expériences avec des parents qui
                                            ont des bébés aveugles ou malvoyants peut être d’une grande utilité pour eux.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg mb-1">
                                <div class="d-flex align-items-end rounded-lg"
                                    style="background-image: url('{{ asset('img/fp/jo.jpg') }}'); background-size:100%; height:400px;">
                                    <div style="height: 200px"></div>
                                    <div class="" style="background:hsla(0, 0%, 26%, 0.8); color:#FFC20C;">
                                        <h2 class="font-weight-bold text-center">Jolie</h2>
                                        <p class="pl-4">
                                            Votre experience peu aider une benefisier,
                                            Integre le programe de volonteurs de la fondation Panzi. Maintenant qu’il a grandi, vous
                                            et votre enfant allez apprendre beaucoup sur la manière dont les enfants aveugles
                                            peuvent apprendre à faire les choses. Le fait de partager vos expériences avec des parents qui
                                            ont des bébés aveugles ou malvoyants peut être d’une grande utilité pour eux.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg mb-1">
                                <div class="d-flex align-items-end rounded-lg"
                                    style="background-image: url('{{ asset('img/fp/ka.jpg') }}'); background-size:100%; height:400px;">
                                    <div style="height: 200px"></div>
                                    <div class="" style="background:hsla(0, 0%, 26%, 0.8); color:#FFC20C;">
                                        <h2 class="font-weight-bold text-center">Zady</h2>
                                        <p class="pl-4">
                                            Votre experience peu aider une benefisier,
                                            Integre le programe de volonteurs de la fondation Panzi. Maintenant qu’il a grandi, vous
                                            et votre enfant allez apprendre beaucoup sur la manière dont les enfants aveugles
                                            peuvent apprendre à faire les choses. Le fait de partager vos expériences avec des parents qui
                                            ont des bébés aveugles ou malvoyants peut être d’une grande utilité pour eux.
                                        </p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
