@extends('layouts.layout')

@section('content')

    <div class="container-fluid">

        <div class="col-lg-12 text-dark mb-5">
            <div class="row m-md-4">
                <x-cat-news></x-cat-news>
                <div class="col-lg-7">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            @foreach ($blogs as $blog)
                                @if ($loop->first)
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{ asset('files/'.$blog->id.'/'.$blog->img) }}"
                                            alt="image-{{ $blog->titre }}" 
                                            style="width: 100%;
                                            height: 400px; 
                                            object-fit: cover;">
                                        <div class="carousel-caption d-none d-md-block carousel-res">
                                            <a class="ja" href="{{ url("nwes/".$blog->id."-".slug($blog->titre))}}">
                                                <h5 class="text-white">{{ $blog->titre }}</h5>
                                            </a>
                                            <p class="text-black-50"><strong>{{ date_format($blog->updated_at, 'd/m/Y H:i') }}</strong></p>
                                        </div>
                                    </div>
                                @endif
                                @if (!$loop->first)
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('files/'.$blog->id.'/'.$blog->img) }}"
                                            alt="image-{{ $blog->titre }}"
                                            style="width: 100%;
                                            height: 400px; 
                                            object-fit: cover;">
                                        <div class="carousel-caption d-none d-md-block carousel-res">
                                            <a class="ja" href="{{ url("nwes/".$blog->id."-".slug($blog->titre))}}">
                                                <h5 class="text-white">{{ $blog->titre }}</h5>
                                            </a>
                                            <p class="text-black-50"><strong>{{ date_format($blog->updated_at, 'd/m/Y H:i') }}</strong></p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 overflow-auto" style="height: 370px">
                    <x-offre>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <div class="row d-flex justify-content-around">
                        @php
                            $blogs = array_values($blogs->toArray());
                            $blogs = array_slice($blogs, 0, 3);
                            $blogs = collect($blogs);
                        @endphp
                        @foreach ($blogs as $blog)
                            @php
                                $blog = (object) $blog;
                                
                                    
                            @endphp
                            <div class="col-lg-4  ">
                                <a href="{{ url("nwes/".$blog->id."-".slug($blog->titre))}}">
                                    <img src="{{ asset('files/'.$blog->id.'/'.$blog->img) }}" class="card-img-top"
                                        alt="image-{{ $blog->titre }}">

                                    <h4 class="card-title text-warning strong">{{ $blog->titre }}</h4>
                                    <p class="card-text text-secondary"> <strong>{{$blog->type}}</strong>
                                        {{ str_replace('.000000Z', '', $blog->updated_at) }}</p><br>

                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <x-fund></x-fund>
            <div class="text-center p-4">
                <strong class="h1">Les chiffres clés</strong>
                <div class="row p-3 text-center  d-flex justify-content-center">

                    <div class="col-lg-3 border-right">
                        <strong class="h1 text-warning">67893</strong>
                        <p class="p-2">Bénéficiaires des programmes de fondations</p>
                    </div>
                    <div class="col-lg-3 border-right">
                        <strong class="h1 text-warning">50000</strong>
                        <p class="p-2">Cas de prolapsus et fistules</p>
                    </div>
                    <div class="col-lg-3">
                        <strong class="h1 text-warning">1010</strong>
                        <p class="p-2">Bénéficiaires du projet réparation </p>
                    </div>
                </div>
                <p>Pour plus d'information sur les prises en charges, veillez visiter notre portail <a href=""><strong class=" text-warning"> PIMIS-VBG</strong></a> </p>
            </div>
            <div class="row">
                @foreach ($medias as $media)
                    @php
                        echo $media->article;
                    @endphp
                @endforeach
            </div>
        </div>
    </div>
@endsection
