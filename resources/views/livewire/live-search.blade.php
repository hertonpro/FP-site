<div class="row">
    <div class="col-4">
        <form wire:submit.prevent="search">
            <div class="input-group m-b">
            <input name="key" wire:model="key" type="text" class="form-control" placeholder="Cherche une articles">
            <div class="input-group-append">
                <button type="submit" class="input-group-addon"><i class="fa fa-search"></i></button>
            </div>
        </div>
        </form>
            <ul class="sortable-list connectList agile-list" id="todo">
            @foreach ($blogs as $blog)
                <li class="warning-element" id="task1">
                    {{ $blog->titre }}
                    <div class="agile-detail">
                        <a href="{{ route('news.show', $blog->id) }}"
                            class="float-right btn btn-xs btn-primariy">Lire</a>
                        <i class="fa fa-clock-o"></i>{{ date_format($blog->updated_at, 'd/m/Y H:i') }}
                    </div>
                </li>
            @endforeach
        </ul>
        
    </div>
</div>
