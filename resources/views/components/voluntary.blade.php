<div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <h4>Devenir volontaire</h4>
    </button>
    @guest
        <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header alert alert-danger alert-dismissible fade show">
                        <p><strong>Merci de votre etention.</strong> Pour effectuer cette action, vous devez d'abord vous
                            connecter.</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true close-btn">×</span>
                        </button>
                    </div>
                    <div class=" d-flex justify-content-center ">
                        <a href="{{ url('login') }}"><button type="button" wire:click.prevent="store()"
                                class="m-2 btn btn-primary close-modal">Se connecter</button></a>
                        <a href="{{ url('register') }}"><button type="button" class=" m-2 btn btn-secondary close-btn"
                                data-dismiss="modal">S'enregistre</button></a>
                    </div>
                </div>
            </div>
        </div>
    @endguest

    @auth
        <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true close-btn">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form role="form" method="post" action="/voluntiry">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Reference</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Enter Name" value="{{ auth()->user()->id }}">
                                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput2">Pourquoi voulez-vous devenir volontaire de la
                                    Fondation panzi?</label>
                                <textarea class="form-control is-invalid" id="validationTextarea"
                                    placeholder="Required example textarea" required></textarea>
                                @error('Pourquoi') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="modal-footer">
                                <button type="button" wire:click.prevent="store()"
                                    class="btn btn-primary close-modal">Envoyer</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    @endauth
</div>
