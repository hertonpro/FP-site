@extends('admin.index')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="ibox-content">
                <h1 class="mr-auto p-2">Gesion de prix</h1>

                <H2 class="mr-auto p-2"> Nouveau prix</H2>
                @if (Session::get('message'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('message') }}
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

                <form role="award" enctype="multipart/form-data" method="post" action="/award">
                    @csrf
                    <div class="form-group">
                        <label>Dénomination</label>
                        <input class=" form-control" type="text" name="denomination">
                    </div>

                    <div class="form-group">
                        <label>_url</label>
                        <input class=" form-control" type="text" name="url">
                    </div>

                    <div class="form-group">
                        <label>Logo</label><br>
                        <input type="file" name="logo">
                        <br>
                        <span class='text-warning'>les images de format (.gif, .png, .jpg) sont aceptable </span><br>
                    </div>

                    <button class="btn btn-primary" type="submit">Ajouter</button>
                </form>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Liste des prix</h5>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-sm" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Titre du prix</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($awards as $award)
                                    <tr class="gradeX">
                                        {{-- @if ($award->editeur == auth()->user()->id) --}}
                                        <td> <a href="/award/{{ $award->id }}">{{ $award->denomination }}</a> </td>
                                        <td>
                                            <a href="/award/{{ $award->id }}">
                                                <i class="fa fa-times"></i>
                                            </a>
                                            <a href="/award/{{ $award->id }}/edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="/award/{{ $award->id }}">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </td>
                                        {{-- @endif --}}

                                    @empty
                                        <td class="text-warning">Pas de prix disponible !!!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="ibox-content">
                <h1 class="mr-auto p-2">Gesion de citations</h1>
    
                <H2 class="mr-auto p-2"> Nouveau citation</H2>
                @if (Session::get('message'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('message') }}
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
    
                <form role="quote" enctype="multipart/form-data" method="post" action="/quote">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="my-input">Citation</label>
                            <textarea id="my-textarea" class="form-control" name="citation" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="my-textarea">Code </label>
                            <textarea id="my-textarea" class="form-control" name="code" rows="6"></textarea>
                        </div>
                    </div>
    
    
                    <button class="btn btn-primary" type="submit">Ajouter</button>
                </form>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Liste des citations</h5>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-sm" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Titre du citation</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($quotes as $quote)
                                    <tr class="gradeX">
                                        {{-- @if ($quote->editeur == auth()->user()->id) --}}
                                        <td> <a href="/quote/{{ $quote->id }}">{{ $quote->citation }}</a> </td>
                                        <td>
                                            <a href="/quote/{{ $quote->id }}">
                                                <i class="fa fa-times"></i>
                                            </a>
                                            <a href="/quote/{{ $quote->id }}/edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="/quote/{{ $quote->id }}">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </td>
                                        {{-- @endif --}}
    
                                    @empty
                                        <td class="text-warning">Pas de citation disponible !!!</td>
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
