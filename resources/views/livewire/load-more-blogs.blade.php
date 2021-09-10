<div>
    <div class="row">
        @foreach ($blogs as $blog)
            <div class="col-4">
                <div class="media"><div class=" border-right border-dark mr-1">
                    <img src="{{ asset($blog->img) }}" width="100" class="rounded mr-3"
                        alt="{{ $blog->titre }}/image"></div>
                    <div class="media-body">
                        
                            <h5 class="mt-0">{{ $blog->titre }}</h5>
                        
                        
                        <p>{{ date_format($blog->updated_at, 'd/m/Y H:i') }} <a href="{{ url("nwes/".$blog->id."-".slug($blog->titre))}}"><span class="badge badge-warning text-dark float-right">Lire...</span></a> </p>
                        
                    </div>
                </div>
            </div>
        @endforeach
            <button wire:click="loadMore" class="badge col-12 badge-warning text-dark float-right">Voir plus d'article...</button>

    </div>

</div>
