<div>
    <div class="d-flex justify-content-center m-4">
        <div class="col-sm-6">
            <input class="form-control input-lg rounded rounded-4" wire:model="search" type="text"
                placeholder="Search offre..." />
        </div>
    </div>
    <div class="row">
        @foreach ($offres as $offre)
        @if ($offre->state === 1)
            <div class="col-sm-5 m-4">
                @if (strtotime($offre->deadline) > strtotime(date('Y-m-d H:i:s')))
                    <div class="card alert-success">
                @else
                    <div class="card alert-danger">
                @endif

                <div class="card-body">
                    <h5 class="card-title h5">{{ $offre->titre }}</h5>
                    @if ($offre->type == 2)
                        <p> <i class="fa fa-calendar"></i> <strong>Offre d'emploie </strong> </p>
                    @else
                        <p> <i class="fa fa-calendar"></i> <strong>Appelle d'offre</strong> </p>
                    @endif

                    <p> <i class="fa fa-calendar"></i> <strong>Deadline: </strong> {{ $offre->deadline }}
                        @if (strtotime($offre->deadline) < strtotime(date('Y-m-d H:i:s')))
                            <span class="badge badge-sm badge-danger badge-pill">expiré</span>
                        @endif
                    </p>

                    <a href="/offre/{{ $offre->id }}" class="btn btn-primary">Postuler</a>
                </div></div>
            </div>
            
            @endif
            
            @endforeach
            
    </div>
