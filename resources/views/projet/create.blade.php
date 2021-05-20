@extends('admin.index')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="ibox-content">
                <div class="row m-2">
                    <h1 class="mr-auto p-2">Gesion de projets</h1>
                    <a href="{{route('projet.index')}}"><button class="btn btn-primary btn-small" type="button">Ajouter</button></a>
                    <div class="col-lg-12">
                        @if (Session::get('message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif

                        
                        @if (isset($projet))
                        <form action="{{ route('projet.update', ['projet' => $projet->id]) }}" method="post">
                            @method('PATCH')
                        @else
                        <form action="/projet" method="post">
                        @endif
                        
                            <h3 class="m-t-none m-b">Nouveau projet</h3>
                            <p>Créer un nouveau projet</p>
                            <div class="form-group">
                                <label> <strong>Insserer la denomination</strong> </label>
                                <input name="denomination" type="texte" 
                                value="<?php if(isset($projet)){echo $projet->denomination; }else{ echo "Entre titre";} ?>" 
                                class="form-control">
                            </div>
                            @error('denomination')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            
                            {{-- Editeur d'projet --}}
                            <label for="exampleFormControlSelect1"><strong>Description du projet</strong></label>
                            <div class="form-group pl-3">
                                    <textarea id="summernote" name="description"><?php if(isset($projet)){echo $projet->description; }else{ echo "Entre titre";} ?></textarea>
                            </div>
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <script>
                                $(document).ready(function() {
                                    $('#summernote').summernote();
                                });
                            </script>
                            {{-- <input type="text" value=""> --}}
                                <label> <strong>Pullier associer</strong> </label>
                                <div class="col-6">
                                <select class="form-select form-control form-select-sm" aria-label=".form-select-sm example" name="pillier">
                                    <option selected>---Selectionner un pillier</option>
                                    @foreach ($pilliers as $pillier)
                                        <option value="{{$pillier->id}}">{{$pillier->denomination}}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <label> <strong>Bailleur</strong> </label>
                            <div class="col-6">
                                <select class="form-select" multiple aria-label="multiple select example" name="bailleur">
                                    
                                      <option selected>---Selectionner un pillier</option>
                                    
                                    @foreach ($pilliers as $pillier)
                                        <option value="{{$pillier->id}}">{{$pillier->denomination}}</option>
                                    @endforeach
                                  </select>
                            </div>
                            
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
                        <h5>Projets brouillons</h5>
                        <div class="ibox-tools">
                            <a href="/projet/create" class="btn btn-primary p-1"> <i class="fa fa-paper-plane"></i> Tout
                                publier</a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-sm" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Titre de l'projet</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($projets as $projet)
                                        <tr class="gradeX">
                                          {{--   @if ($projet->editeur == auth()->user()->id) --}}
                                              <td> <a href="/projet/{{ $projet->id }}">{{ $projet->denomination }}</a> </td>
                                            <td>
                                                <a href="/projet/{{ $projet->id }}">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                                <a href="/projet/{{ $projet->id }}/edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="/projet/{{ $projet->id }}">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <button type="submit" class="btn btn-info btn-xs">Publier</button>
                                            </td> 
                                           {{--  @endif --}}
                                            
                                        @empty
                                            <td class="text-warning">Pas d'projet disponible !!!</td>
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