@extends('admin.index')

@section('content')
    <div class="container ">
        <div class="d-flex justify-content-end m-1">

        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Liste des articles publiées</h5>
                    <div class="ibox-tools">
                        <a href="/blogs/create" class="btn btn-primary p-1"> <i class="fa fa-plus"></i> Ajouter</a>
                    </div>
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table id="datateble" class="display compact" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Titre de l'article</th>
                                    <th>Editeur</th>
                                    <th>Type</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($blogs as $blog)
                                    @if ($blog->editeur == auth()->user()->id)
                                        <tr class="gradeX">
                                            <td> <a href="/blogs/{{ $blog->id }}">{{ $blog->titre }}</a> </td>
                                            <td></td>
                                            <td></td>
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
                                            </td>
                                    @endif
                                @empty
                                    <td class="text-warning">Pas d'article disponible !!!</td>
                                    </tr>

                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Titre de l'article</th>
                                    <th>Editeur</th>
                                    <th>Type</th>
                                    <th>Options</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
                    <!-- Data table script !-->
                    <script>
                        $(document).ready(function() {
                            $('#datateble').DataTable();
                        });

                    </script>

                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox ">
                <form action="">
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
                                    @forelse ($blogs as $blog)
                                        <tr class="gradeX">
                                            @if ($blog->editeur == auth()->user()->id)
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
