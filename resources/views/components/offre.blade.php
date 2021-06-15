<div>
    <a href="">
        <button class="btn btn-primary border border-primary col-12 my-2" style="border-radius: 10px;" type="button">
            <h1 class="font-bold">Faire un don</h1>
        </button>
    </a>
    <h2>Les offres </h2>
    <div>
        @foreach ($offres as $offre)
        @if (strtotime($offre->deadline)>strtotime(date('Y-m-d H:i:s')) and $offre->state===1)
            <a href="{{url('offrev/'.$offre->id)}}" class=" text-primary">
                <div class="card profile-card-5 m-1">
                    <div class="card-body pt-0">
                        <h5 class="card-title">
                            
                                @if ($offre->type == 1)
                                    <span class="badge badge-primary">Offre d'emplois</span>
                                @else
                                <span class="badge badge-primary">Appele d'offre</span>
                                @endif
                            
                        </h5>
                        <p class="card-text">{{ $offre->titre }}</p>
                    </div>
                </div>
            </a>
        @endif
        @endforeach

    </div>
</div>
