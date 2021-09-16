<div>

    <form action="donation" method="POST">

        @csrf

        <input type="text" hidden name="token" value="{{$token= sha1(mt_rand(1, 90000) . 'SALT') }}">

        <button class="btn btn-primary border border-primary btn-block my-2" style="border-radius: 10px;" type="submit">

            <h1 class="font-bold">Faire un don</h1>

        </button>

    </form>

    </a>

    <h2>Les offres </h2>

    <div>
        @foreach (alloffres() as $offre)

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

