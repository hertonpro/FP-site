@extends('admin.index')

@section('content')
    <div class="col-lg-8">
        <div class="ibox-content">
            <div class="row m-2">
                <div class="col-lg-12">
                    <form role="form">
                        <h3 class="m-t-none m-b">Nouvelle Article</h3>
                        <p>Créer une nouvelle article en remplissant ce formulaire</p>
                        <div class="form-group"><label>Titre</label> <input type="texte" placeholder="Entre titre"
                                class="form-control"></div>

                        {{-- selection du type d'article --}}
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="">
                            <label class="form-check-label" for="inlineRadio1">Blog</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="1">
                            <label class="form-check-label" for="inlineRadio2">Panzi nwez</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="2">
                            <label class="form-check-label" for="inlineRadio2">Panzi hébdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="3">
                            <label class="form-check-label" for="inlineRadio2">Médias</label>
                        </div>

                        {{-- Editeur d'article --}}
                        <div class="form-group pt-3">
                            <label for="my-input">Editeur d'article</label>
                            <textarea id="summernote" name="editordata"></textarea>
                        </div>
                        
                        <script>
                            $(document).ready(function() {
                                $('#summernote').summernote();
                            });
                        </script>

                        <div>
                            <button class="btn btn-sm btn-primary float-right m-t-n-xs"
                                type="submit"><strong>Enregistrer</strong></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
