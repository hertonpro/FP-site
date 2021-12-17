@extends('admin.index')

@section('content')
    @if (in_array(auth()->user()->role_id, ['1', '2']))
        <div class="row">
            <div class="col-lg-8">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Gesion de projets</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="ibox-content">
                            @if (Session::get('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('message') }}
                                </div>
                            @endif


                            @if (isset($projet))
                                <form action="{{ route('projet.update', ['projet' => $projet->id]) }}" method="post">
                                    @method('PATCH')
                                    @csrf
                                @else
                                    <form action="/projet" method="post">
                                        @csrf
                            @endif
                            <h3 class="m-t-none m-b">Nouveau projet</h3>
                            <p>Créer un nouveau projet</p>
                            <div class="form-group">
                                <label> <strong>Insserer la denomination</strong> </label>
                                <input name="denomination" type="texte" value="<?php if (isset($projet)) {echo $projet->denomination;} else {echo 'Entre titre';} ?>" class="form-control">
                                {{-- Editeur d'projet --}}
                                <label for="exampleFormControlSelect1"><strong>Description du projet</strong></label>
                                <div class="form-group pl-3">
                                    <textarea id="summernote" name="description"><?php if (isset($projet)) {echo $projet->description;} ?></textarea>
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
                                    <select class="chosen-select" multiple style="width:350px;" tabindex="4"
                                        @if (isset($projet))
                                            data-placeholder="{{ $projet->pilier_id }}"
                                        @else
                                            data-placeholder="Selectionner le pilier..."
                                        @endif
                                            name="pilier_id">
                                            @foreach ($piliers as $pilier)
                                                <option value="{{ $pilier->id }}">{{ $pilier->denomination }}</option>
                                            @endforeach
                                            <option value="0">Autre</option>
                                    </select>
                                </div>
                                    @php
                                        if (isset($projet)) {
                                            echo $projet->pilier_id;
                                        }
                                    @endphp
                                    <label> <strong>Bailleur</strong> </label><br>
                                    <div class="col-6">
                                        <select @if (isset($projet)) data-placeholder="{{ $projet->bailleur_id }}"
                                        @else
                                            data-placeholder="Selectionner le bailleur..." @endif
                                            class="chosen-select" multiple style="width:350px;" tabindex="4" name="bailleur_id">
                                            @foreach ($bailleurs as $bailleur)
                                                <option value="{{ $bailleur->id }}">{{ $bailleur->denomination }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-primary m-3" data-toggle="modal" data-target="#exampleModal">
                                        <h4>Ajouter un bailleurs</h4>
                                    </button>
                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @error('denomination')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                            {{-- Editeur d'projet --}}
                                            <label for="exampleFormControlSelect1"><strong>Description du projet</strong></label>
                                            <div class="form-group pl-3">
                                                <textarea id="summernote" name="description"><?php if (isset($projet)) {
                                        echo $projet->description;
                                    } else {
                                        echo 'Entre la description';
                                    } ?></textarea>
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
                                        <select class="form-select form-control form-select-sm" aria-label=".form-select-sm example"
                                            value="<?php if (isset($projet)) {
                                                echo $projet->pillier_id;
                                            } ?>" name="pillier_id">
                                            <option selected>---Selectionner un pillier</option>
                                            @foreach ($pilliers as $pillier)
                                                <option value="{{ $pillier->id }}">{{ $pillier->denomination }}</option>
                                            @endforeach
                                            <option value="0">Autre</option>
                                        </select>
                                    </div>
                                    @endif

                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif


                                    <script>
                                        $('.chosen-select').chosen({
                                            width: "100%"
                                        });
                                    </script>
                                <div class="pb-5">
                                    <button class="btn btn-sm btn-primary float-right m-t-n-xs">
                                        <strong>Enregistrer</strong>
                                    </button>
                                </div>
                                </form>
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
                                                <form role="bailleur" enctype="multipart/form-data" method="post" action="/Bailleur">
                                                    @csrf
                                                    <label>Dénomination</label>
                                                    <input class=" form-control" type="text" name="denomination">
                                                    <label>_url</label>
                                                    <input class=" form-control" type="text" name="url">
                                                    <label>Logo</label>
                                                    <input type="file" name="logo">
                                                    <span>les images de format (.gif, .png, .jpg) sont aceptable </span><br>
                                                    <button class="btn btn-primary" type="submit">Ajouter</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                                {{-- @if ($projet->editeur == auth()->user()->id) --}}
                                                <td> <a href="/projet/{{ $projet->id }}">{{ $projet->denomination }}</a>
                                                </td>
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
                                                {{-- @endif --}}

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
@else
    @include('components.oooops')
    @endif
@endsection
