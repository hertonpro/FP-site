@extends('admin.index')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="ibox-content">
                <div class="row m-2">
                    <div class="col-lg-12">
                        <form action="{{ route('blogs.update', ['blog' => $article->id]) }}" method="post">
                            @method('patch')
                            <h3 class="m-t-none m-b"> <strong class=" text-warning ">Titre: </strong></h3>
                            <h2> {{ $article->titre }}</h2>
                            <hr>
                            <div class="form-group">
                                <label> <strong>Metre à jour le titre</strong> </label>
                                <input name="titre" type="texte" placeholder="Entre titre" value="{{ $article->titre }}"
                                    class="form-control">
                                {{-- selection du type d'article --}}
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1"><strong>Selectionner le type
                                            d'article</strong></label>
                                    <select class="form-control col-md-3" id="exampleFormControlSelect1" name="type">
                                        <option>{{ $article->type }}</option>
                                        <option>Blog</option>
                                        <option>Panzi nwez</option>
                                        <option>Panzi hébdo</option>
                                        <option>Médias</option>
                                        <option>vidéo</option>
                                    </select>
                                </div>
                            </div>
                            {{-- Editeur d'article --}}
                            <div class="form-group pl-3">
                                <label for="my-input">Editeur d'article</label>
                                <textarea id="summernote" name="article">{{ $article->article }}</textarea>
                            </div>

                            <script>
                                $(document).ready(function() {
                                    $('#summernote').summernote();
                                });

                            </script>
                            <label> <strong>Ajouter une déscription</strong> </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                name="tag">{{ $article->tag }}</textarea>
                            <label> <strong>Metre l'article en ligne </strong></label> <br>
                            <div class="form-group">
                                <input type="checkbox" class="form-check-input" name="state" value="1">
                                <label class="form-check-label" for="exampleCheck1">Publier</label>
                            </div>

                            @csrf
                            <div class="pb-5">
                                <button class="btn btn-sm btn-primary float-right m-t-n-xs">
                                    <strong>Enregistrer</strong>
                                </button>
                            </div>
                        </form>
                        


                        <form id="delete-{{ $article->id }}" method="post"
                            action="{{ route('blogs.destroy', $article->id) }}" style="display: none;">
                            @csrf
                            @method('DELETE')
                            <a href=""
                                onclick="if(confirm('Do you want to delete this blogs?'))event.preventDefault(); document.getElementById('delete-{{ $article->id }}').submit();"
                                class="btn btn-sm btn-outline-danger py-0"><i class="fa fa-times"></i></a>
                        </form>
                        

                        {{-- Aficher les images des l'article --}}
                        <h3>Les fichiers </h3>
                        <hr>
                        <p>
                            <strong>Copiez</strong> le lien de l'image pour l'insérer dans l'article
                        </p>
                        <?php
                            $dir = './files/' . $article->id;
                            if (is_dir($dir)){
                                $scandir = scandir($dir);
                            
                                foreach ($scandir as $fichier) {
                                    if (preg_match("#\.(jpg|jpeg|png|gif|bmp|tif)$#", strtolower($fichier))) {
                                        $url = asset('files/' . $article->id . '/' . $fichier);
                                        $image = '';
                        ?>

                        <img src=" {{ $url }}" alt="{{ $url }}" class="img-thumbnail m-1" width="100" height="100">

                        <?php
                                }
                                }
                                foreach ($scandir as $fichier) {
                                    if (is_dir($fichier) and $fichier != '.' and $fichier != '..') {
                                        echo $fichier . '<br />';
                                    }
                                }
                                foreach ($scandir as $fichier) {
                                    if (substr(strtolower($fichier), -4, 4) == '.php') {
                                        echo "$fichier<br />";
                                    }
                                }
                            }
                        ?>

                        {{-- Ajouter des images Dropezone --}}
                        <p>
                            <strong>Ajouter des images</strong> en glissant deposer les images ou l'image sur cette
                            expace.<br>
                            la photo doit avoir moin de <strong>2 Mb</strong>
                        </p>
                        <form action="{{ route('files.fileupload', ['article' => $article->id]) }}" class="dropzone"
                            id="dropzoneForm">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>
                        <script src="{{ asset('js/plugins/dropzone/dropzone.js') }}"></script>
                        <!-- Script -->
                        <script>
                            var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

                            Dropzone.autoDiscover = false;
                            var myDropzone = new Dropzone(".dropzone", {
                                maxFilesize: 6, // 3 mb
                                acceptedFiles: ".jpeg,.jpg,.png,.pdf",
                            });
                            myDropzone.on("sending", function(file, xhr, formData) {
                                formData.append("_token", CSRF_TOKEN);
                            });

                        </script>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-4">
            <div class="ibox ">
                <form action="">
                    <div class="ibox-title">
                        <h5>Articles brouillons</h5>
                        <div class="ibox-tools">
                            <a href="/blog/create" class="btn btn-primary p-1"> <i class="fa fa-paper-plane"></i> Tout
                                publier</a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-sm" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Titre de l'article</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($blogs as $blog)
                                        <tr class="gradeX">
                                            @if ($blog->editeur == auth()->user()->id)
                                                <td> <a href="/blogs/{{ $blog->id }}">{{ $blog->titre }}</a> </td>
                                                <td>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href=""
                                                        onclick="if(confirm('Do you want to delete this blogs?'))event.preventDefault(); document.getElementById('delete-{{ $blog->id }}').submit();"
                                                        class="btn btn-sm btn-outline-danger py-0"><i
                                                            class="fa fa-times"></i></a>
                                                    <form id="delete-{{ $blog->id }}" method="post"
                                                        action="{{ route('blogs.destroy', $blog->id) }}"
                                                        style="display: none;">

                                                        <a href="{{ route('blogs.destroy', ['blog' => $article->id]) }}">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                        <a href="/blogs/{{ $blog->id }}/edit">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="/blogs/{{ $blog->id }}">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <form action="{{ route('blogs.update', ['blog' => $blog->id]) }}"
                                                            method="post">
                                                            <input name="state" hidden value="1">
                                                            <button class="btn btn-info btn-xs">Publier</button>
                                                        </form>
                                                </td>
                                            @endif

                                        @empty
                                            <td class="text-warning">Pas d'article disponible !!!</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
