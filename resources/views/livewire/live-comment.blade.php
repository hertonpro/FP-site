<div>
    <section id="comment">
        <div class="row">
            <div class="mb-3 col-12">
                <h3>Ajouter un commentaire</h3>
                    
                    <form wire:submit.prevent="PostComment">
                        <textarea wire:model.debounce.500ms="comment" class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>

                    <div class="small text-right mt-1">
                        @csrf
                        <button class="btn btn-primary btn-xs" type="text" wire:click="PostComment">commentez</button>
                    </div>
                    </form>
                    
            </div>
        </div>
    </section>
    {{var_dump($blog_id)}}
</div>
