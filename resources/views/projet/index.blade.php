@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="col-lg-12 text-dark">
            <div class="row mb-3" style="margin-left: 25%">
                <h1> <strong> Nos projets</strong></h1>
            </div>

            <div class="row">
                <div class="col-sm-2 col-md-2">
                    <div class="accordion" id="accordionExample">
                        <button class="accord accord-ft " type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            <h3><a href="">Prise en charge <br>médicale</a></h3> 
                        </button>
                        <div id="collapseOne" class="collapse ml-3 show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                                <a href="" class=" text-dark">Anim pariatur cliche </a><br>
                                <a href="" class=" text-dark">reprehenderit SVBG</a>
                        </div>
                        
                                    <button class="accord" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h3> en charge<br>psycho-sociale</h3>
                                    </button>
                            <div id="collapseTwo" class="collapse ml-3" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                  <a href="" class=" text-dark">Anim pariatur cliche </a><br>
                                  <a href="" class=" text-dark">PIMIS SVBG</a>
                                  <a href="" class=" text-dark">enim eiusmod  </a><br>
                                  <a href="" class=" text-dark">reprehenderit SVBG</a>
                                  <a href="" class=" text-dark">Anim pariatur </a><br>
                                  <a href="" class=" text-dark">reprehenderit SVBG</a>
                            </div>
                                    <button class="accord" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <h3>Assistance<br>légale</h3>
                                    </button>
                            <div id="collapseThree" class="collapse ml-3" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                  <a href="" class=" text-dark">Anim pariatur cliche </a><br>
                                  <a href="" class=" text-dark">PIMIS SVBG</a>
                                  <a href="" class=" text-dark">enim eiusmod  </a><br>
                                  <a href="" class=" text-dark">reprehenderit SVBG</a>
                                  <a href="" class=" text-dark">Anim pariatur </a><br>
                                  <a href="" class=" text-dark">reprehenderit SVBG</a>  
                        </div>
                        <button class="accord-lt" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    </button>
                    </div>
                </div>
                <div class="col-lg-7 ">
                    <p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button"
                            aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                            data-bs-target="#multiCollapseExample2" aria-expanded="false"
                            aria-controls="multiCollapseExample2">Toggle second element</button>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                            data-bs-target=".multi-collapse" aria-expanded="false"
                            aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                    </p>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                <div class="card card-body">
                                    Some placeholder content for the first collapse component of this multi-collapse
                                    example. This panel is hidden by default but revealed when the user activates the
                                    relevant trigger.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                                <div class="card card-body">
                                    Some placeholder content for the second collapse component of this multi-collapse
                                    example. This panel is hidden by default but revealed when the user activates the
                                    relevant trigger.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 ">
                    <a href="">
                        <button class="btn btn-primary border border-primary col-12 my-2" style="border-radius: 10px;"
                            type="button">
                            <h1 class="font-bold">Faire un don</h1>
                        </button>
                    </a>
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('./files/ChocolateFruit-scaled.jpg1619439480.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Postuler au poste assistant de chef de projet: BADILISHA Postuler au
                                poste assistant de chef de projet: BADILISHA </h5>
                            <a href="#">
                                <h4>Job description</h4>
                            </a>
                            <a href="#" class="btn btn-primary"> <strong>Postuler</strong> </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
