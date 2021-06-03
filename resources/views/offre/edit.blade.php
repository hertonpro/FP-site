@extends('admin.index')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="ibox-content">
                <div class="row m-2">
                    <div class="col-lg-12">
                        @if (Session::get('message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        <form action="{{ route('offre.update', ['offre' => $offre->id]) }}" method="post">
                            @method('patch')
                            <h3 class="m-t-none m-b"> <strong class=" text-warning ">Titre: </strong></h3>
                            <h2> {{ $offre->titre }}</h2>
                            <hr>
                            <div class="form-group">
                                <label> <strong>Metre à jour la déscription</strong> </label>
                                <input name="titre" type="texte" placeholder="Entre titre" value="{{ $offre->titre }}"
                                    class="form-control">
                                {{-- selection du type d'offre --}}
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1"><strong>Selectionner le type
                                            d'offre</strong></label>
                                    <select class="form-control col-md-3" id="exampleFormControlSelect1" name="type">
                                        @if (Auth()->user()->role == 2)
                                            <option value="1">Offre d'emploi</option>
                                        @elseif (Auth()->user()->role==1)
                                            <option value="2">Appele d'offres</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            {{-- Editeur d'offre --}}
                            <label for="exampleFormControlSelect1"><strong>Editer l'offre</strong></label>
                            <div class="form-group pl-3">
                                <textarea id="summernote" name="description">{{ $offre->description }}</textarea>
                            </div>

                            <script>
                                $(document).ready(function() {
                                    $('#summernote').summernote();
                                });

                            </script>
                            {{-- <label> <strong>Ajouter une formulaire</strong> </label> --}}
                            <input type="hidden" class="form-control" id="exampleFormControlTextarea1" rows="3" name="formulaire"
                                value="{{ $offre->formulaire }}" />
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"><strong>Selectionner le projet</strong></label>
                                <select class="form-control col-md-3" id="exampleFormControlSelect1" name="projet">
                                    @foreach ($projets as $projet)
                                        <option value="{{ $projet->id }}">{{ $projet->denomination }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label> <strong>Metre l'offre en ligne </strong></label> <br>
                            <div class="form-group">
                                <div class="btn btn-info" type="button">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="state" id="flexRadioDefault1"
                                            value="1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Puvlier
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @csrf
                            <div class="pb-5 btn-group">
                                <button class="btn btn-sm btn-info float-right m-t-n-xs">
                                    <strong><i class="fa fa-save"></i> Enregistrer</strong>
                                </button>
                                <a class="btn btn-sm btn-primary float-right m-t-n-xs"
                                    href="{{ route('offre.show', $offre->id) }}">
                                    <strong><i class="fa fa-eye"></i> Aperçu</strong>
                                </a>
                            </div>


                        </form>



                        <form id="delete-{{ $offre->id }}" method="post"
                            action="{{ route('offre.destroy', $offre->id) }}" style="display: none;">
                            @csrf
                            @method('DELETE')
                            <a href=""
                                onclick="if(confirm('Do you want to delete this offre?'))event.preventDefault(); document.getElementById('delete-{{ $offre->id }}').submit();"
                                class="btn btn-sm btn-outline-danger py-0"><i class="fa fa-times"></i></a>
                        </form>


                        {{-- Aficher les images des l'offre --}}
                        <h3>Les fichiers </h3>
                        @php
                            $file=$offre->titre.'_'.$offre->id;
                        @endphp
                        @livewire('delete-file', ['file' => $file])
                        
                        <hr>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-4">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Articles brouillons</h5>
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
                                @forelse ($Offres as $offre)
                                    <tr class="gradeX">
                                        <td> <a href="/offre/{{ $offre->id }}">{{ $offre->titre }}</a> </td>
                                        <td>
                                            @csrf
                                            @method('DELETE')
                                            <div class="list-group list-group-horizontal">
                                                <a href=""
                                                    onclick="if(confirm('Do you want to delete this offre?'))event.preventDefault(); document.getElementById('delete-{{ $offre->id }}').submit();">
                                                    <button class="btn text-danger" type="button"><i
                                                            class="fa fa-times "></i></button>
                                                </a>
                                                <a href="/offre/{{ $offre->id }}/edit">
                                                    <button class="btn text-info" type="button"><i
                                                            class="fa fa-edit"></i></button>
                                                </a>
                                                <a href="/offre/{{ $offre->id }}">
                                                    <button class="btn text-info" type="button"><i
                                                            class="fa fa-eye"></i></button>
                                                </a>
                                            </div>
                                        </td>

                                    @empty
                                        <td class="text-warning">Pas d'article disponible !!!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
