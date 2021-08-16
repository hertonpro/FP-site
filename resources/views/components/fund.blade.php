<div>
    <div class="bg-image rounded"
        style="background-image: url('{{ asset('files/fundraising/'.$fundraising->image) }}'); background-size: cover; background-repeat: no-repeat; ">
        <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-5 p-4 text-white ">
                <h2 class="font-weight-bold pl-4 ">{{$fundraising->objectif}}$</h2>
                <h3 class="pl-4">{{$fundraising->titre}}</h3>
                <p class="pl-4">
                    {{$fundraising->description}}
                </p>
                <div class="pl-4 bg-warning p-2 rounded text-dark d-flex justify-content-between">
                    <h4><strong>Obgectif:</strong> {{$fundraising->objectif}} $</h4>
                    <h4><strong>Colecté:</strong> {{$colect}}</h4>
                    <h4><strong>Reste</strong> {{$fundraising->objectif-$colect}}</h4>
                </div>
                <div class="d-flex flex-row-reverse p-4">
                    <form action="donation" method="POST">
                        @csrf
                        <input type="text" hidden name="token" value="{{$token= sha1(mt_rand(1, 90000) . 'SALT') }}">
                        <input type="number" name="fundraising" hidden value="{{$fundraising->id}}">
                        <button type="submit" class="btn btn-primary rounded-lg btn-lg">
                            <h4>Faire un don</h4>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
