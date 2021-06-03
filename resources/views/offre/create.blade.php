@extends('admin.index')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="ibox-content">
                <div class="row m-2">
                    <div class="col-lg-12">
                        <form  action="/offre" method="post">
                            <h3 class="m-t-none m-b">Nouvelle Offre</h3>
                            <p>Créer une nouvelle offre en remplissant ce formulaire</p>
                            <div class="form-group">
                                <label> <strong>Insserer le titre</strong> </label>
                                <input name="titre" type="text" placeholder="Entre titre" class="form-control">
                            </div>
                            @error('titre')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            
                            {{-- selection du type d'offre --}}
                            @if (auth()->user()->role===2)
                                <input type="hidden" value="1" name="type">
                            @else
                                <input type="hidden" value="2" name="type">
                            @endif
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
                        <h5>Offres brouillons</h5>
                        <div class="ibox-tools">
                            <a href="/offre/create" class="btn btn-primary p-1"> <i class="fa fa-paper-plane"></i> Tout
                                publier</a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-sm" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Titre de l'offre</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($Offres as $offre)
                                        <tr class="gradeX">
                                              <td> <a href="/offre/{{ $offre->id }}">{{ $offre->titre }}</a> </td>
                                            <td>
                                                <a href="/offre/{{ $offre->id }}">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                                <a href="/offre/{{ $offre->id }}/edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="/offre/{{ $offre->id }}">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <button type="submit" class="btn btn-info btn-xs">Publier</button>
                                            </td> 
                                        @empty
                                            <td class="text-warning">Pas d'offre disponible !!!</td>
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