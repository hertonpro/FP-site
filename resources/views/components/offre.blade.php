<div>
    <a href="https://www.paypal.com/donate?hosted_button_id=NF7C4LD4H5CF4" onclick="window.open(this.href);return false">
        <button class="btn btn-primary border border-primary btn-block my-2" style="border-radius: 10px;" type="button">
            <h1 class="font-bold">Faire un don</h1>
        </button>
    </a>
    <h2>Les offres </h2>
    <div>
        @foreach ($offres as $offre)
            @if (strtotime($offre->deadline) > strtotime(date('Y-m-d H:i:s')) and $offre->state === 1)
                <a href="{{ url('offrev/' . $offre->id) }}" class=" text-primary">

                    <div class="card-body pt-0">
                        <p class="card-text">
                            @if ($offre->type == 1)
                                <span class="badge badge-primary">Offre d'emplois</span>
                            @else
                                <span class="badge badge-danger">Appele d'offre</span>
                            @endif

                            {{ $offre->titre }}
                        </p>
                    </div>
                </a>
            @endif
        @endforeach
    </div>
</div>
