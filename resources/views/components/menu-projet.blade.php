<div>
    <div class="accordion" id="accordionExample">
        <button class="accord accord-ft " type="button" data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            <h3>Prise en charge <br>médicale</h3> 
        </button>
        <div id="collapseOne" class="collapse ml-3 show" aria-labelledby="headingOne"
            data-parent="#accordionExample">
            @foreach ($projets as $projet)
            @if ($projet->pillier===1)
                <a href="{{route('projet.show',[$projet->id])}}" class="ja">{{$projet->denomination}}</a><br>
            @endif
            @endforeach
        </div>
        
                    <button class="accord" type="button" data-toggle="collapse"
                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h3> en charge<br>psycho-sociale</h3>
                    </button>
            <div id="collapseTwo" class="collapse ml-3" aria-labelledby="headingTwo"
                data-parent="#accordionExample">
                @foreach ($projets as $projet)
                @if ($projet->pillier===2)
                    <a href="{{route('projet.show',[$projet->id])}}" class="ja">{{$projet->denomination}}</a><br>
                @endif
                @endforeach
            </div>
                    <button class="accord" type="button" data-toggle="collapse"
                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <h3>Assistance<br>légale</h3>
                    </button>
            <div id="collapseThree" class="collapse ml-3" aria-labelledby="headingThree"
                data-parent="#accordionExample">
                @foreach ($projets as $projet)
                @if ($projet->pillier===3)
                    <a href="{{route('projet.show',[$projet->id])}}" class="ja">{{$projet->denomination}}</a><br>
                @endif
                @endforeach
        </div>
        <button class="accord-lt" type="button" data-toggle="collapse"
                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    </button>
    </div>
</div>