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
                        <form enctype="multipart/form-data" method="post" action="/fundraising" >
                            @csrf
                            <h3 class="m-t-none m-b">Nouvelle campagne</h3>

                            <p>Créer une nouvelle campagne en remplissant ce formulaire</p>
                            <div class="form-group">
                                <label> <strong>Insserer le titre</strong> </label>
                                <input name="titre" type="text" placeholder="Entre titre" class="form-control">
                            </div>
                            @error('titre')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <label for="exampleFormControlSelect1"><strong>Editer de la campagne</strong></label>
                            <div class="form-group pl-3">
                                <div class="form-group">
                                    <label for="my-textarea">Text</label>
                                    <textarea id="my-textarea" class="form-control" name="description" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="form-group col-6">
                                <label> <strong>Insserer l' objectif en USD</strong> </label>
                                <input name="objectif" type="number" placeholder="0.00...USD" class="form-control">
                            </div>
                            <div class="form-group btn btn-info">
                                <input class="form-check-input" type="radio" name="state" id="flexRadioDefault1"
                                    value="1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Publier
                                </label>
                            </div>
                            <div class="form-group col-6">
                                <label for="my-input">Text</label>
                                <input id="my-input" class="form-control" type="date" name="deadline">
                            </div>

                            <div class="form-group">
                                <label>Image </label><br>
                                <input type="file" name="image">
                                <br>
                                <span class='text-warning'>les images de format (.gif, .png, .jpg) sont aceptable
                                </span><br>
                            </div>
                            
                            <div class="pb-5">
                                <input class="btn btn-sm btn-primary float-right m-t-n-xs" type="submit" value="Enregistrer">
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
                        <h5>Campagnes non publiés</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-sm" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Titre de la campagne</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($fundraisings as $fundraising)
                                        <tr class="gradeX">
                                            <td> <a
                                                    href="/fundraising/{{ $fundraising->id }}">{{ $fundraising->titre }}</a>
                                            </td>
                                            <td>
                                                <a href="/fundraising/{{ $fundraising->id }}">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                                <a href="/fundraising/{{ $fundraising->id }}/edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="/fundraising/{{ $fundraising->id }}">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <button type="submit" class="btn btn-info btn-xs">Publier</button>
                                            </td>
                                        @empty
                                            <td class="text-warning">Pas d'fundraising disponible !!!</td>
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
