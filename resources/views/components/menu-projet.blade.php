<div>
    <div class="accordion" id="accordionExample">
        <button class="accord-ft" type="button" data-toggle="collapse" data-target="#collapseOne"
        aria-expanded="true" aria-controls="collapseOne"></button>
        <div id="collapseOne" class="collapse ml-3 show" aria-labelledby="headingOne"
        data-parent="#accordionExample"></div>
        @foreach ($piliers as $pilier)
            <button class=" btn btn-block border-bottom accord" type="button" data-toggle="collapse"
            data-target="#collapse{{$pilier->id}}" aria-expanded="false" aria-controls="collapse{{$pilier->id}}">
                <h3>{{ $pilier->denomination }}</h3>
            </button>
            <div  id="collapse{{$pilier->id}}" class="collapse ml-3" aria-labelledby="heading{{$pilier->id}}"
            data-parent="#accordionExample">
                @foreach ($pilier->projet as $projet)
                    <a href="{{ route('projet.show', [$projet->id]) }}"
                        class="ja">{{ $projet->denomination }}</a><br>
                @endforeach
            </div>
        @endforeach
    </div>
        <button class="accord-lt">
        </button>
    
</div>
