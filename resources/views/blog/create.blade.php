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
                                    <option>Panzi-news</option>
                                    <option>Panzi-hébdo</option>
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
                                            @if ($blog->editeur == auth()->user()->id && $blog->state == 0)
                                                <td> <a href="/blogs/{{ $blog->id }}">{{ $blog->titre }}</a> </td>
                                                <td>
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="list-group list-group-horizontal">
                                                        <a href=""
                                                            onclick="if(confirm('Do you want to delete this blogs?'))event.preventDefault(); document.getElementById('delete-{{ $blog->id }}').submit();">
                                                            <button class="btn text-danger" type="button"><i
                                                                    class="fa fa-times "></i></button>
                                                        </a>
                                                        <a href="/blogs/{{ $blog->id }}/edit">
                                                            <button class="btn text-info" type="button"><i
                                                                    class="fa fa-edit"></i></button>
                                                        </a>
                                                        <a href="/blogs/{{ $blog->id }}">
                                                            <button class="btn text-info" type="button"><i
                                                                    class="fa fa-eye"></i></button>
                                                        </a>
                                                    </div>
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