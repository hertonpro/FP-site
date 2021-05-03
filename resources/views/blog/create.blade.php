@extends('admin.index')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="ibox-content">
                <div class="row m-2">
                    <div class="col-lg-12">
                        <form  action="/blogs" method="post">
                            <h3 class="m-t-none m-b">Nouvelle Article</h3>
                            <p>Créer une nouvelle article en remplissant ce formulaire</p>
                            <div class="form-group">
                                <label> <strong>Insserer le titre</strong> </label>
                                <input name="titre" type="texte" placeholder="Entre titre" class="form-control">
                            </div>
                            @error('titre')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            
                            {{-- selection du type d'article --}}
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"><strong>Selectionner le type
                                        d'article</strong></label>
                                <select class="form-control col-md-3" id="exampleFormControlSelect1" name="type">
                                    <option>Blog</option>
                                    <option>Panzi nwez</option>
                                    <option>Panzi hébdo</option>
                                    <option>Médias</option>
                                    <option>vidéo</option>
                                </select>
                            </div>
                            {{-- <input type="text" value=""> --}}
                            <input name="editeur" type="hidden" value="{{auth()->user()->id}}">

                            @csrf
                            <div class="pb-5">
                                <button class="btn btn-sm btn-primary float-right m-t-n-xs">
                                    <strong>Enregistrer</strong>
                                </button>
                            </div>
                        </form>

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
                                                <a href="/blogs/{{ $blog->id }}">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                                <a href="/blogs/{{ $blog->id }}/edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="/blogs/{{ $blog->id }}">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <button type="submit" class="btn btn-info btn-xs">Publier</button>
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
