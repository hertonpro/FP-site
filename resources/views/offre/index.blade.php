@extends('admin.index')

@section('content')
    @if (in_array(auth()->user()->role_id, ['1', '4', '5']))
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
                            <a href="/offre/create" class="btn btn-primary p-1"> <i class="fa fa-plus"></i> Ajouter</a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table id="datateble" class="display compact" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Titre de l'offre</th>
                                        <th>statut</th>
                                        <th>deadline</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    
                                        @forelse ($offres as $offre)
                                        @if (auth()->user()->role_id == 5 && $offre->type == 2)
                                            <tr class="gradeX">
                                                <td> <a href="/offres/{{ $offre->id }}">{{ $offre->titre }}</a> </td>
                                                <td>
                                                    @if (strtotime($offre->deadline) > strtotime(date('Y-m-d H:i:s')))
                                                        <span class="badge badge-sm badge-info badge-pill">active</span>
                                                    @else
                                                        <span class="badge badge-sm badge-danger badge-pill">expiré</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ date('d-m-Y', strtotime($offre->deadline)) }}
                                                </td>
                                                <td>
                                                    <a href="/offre/{{ $offre->id }}">
                                                        <i class="fa fa-times text-danger"></i>
                                                    </a>
                                                    <a href="/offre/{{ $offre->id }}/edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="/offre/{{ $offre->id }}">
                                                        <i class="fa fa-eye text-info"></i>
                                                    </a>
                                                </td>
                                        @elseif (auth()->user()->role_id == 4 && $offre->type == 1)
                                            <tr class="gradeX">
                                                <td> <a href="/offres/{{ $offre->id }}">{{ $offre->titre }}</a> </td>
                                                <td>
                                                    @if (strtotime($offre->deadline) > strtotime(date('Y-m-d H:i:s')))
                                                        <span class="badge badge-sm badge-info badge-pill">active</span>
                                                    @else
                                                        <span class="badge badge-sm badge-danger badge-pill">expiré</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ date('d-m-Y', strtotime($offre->deadline)) }}
                                                </td>
                                                <td>
                                                    <a href="/offre/{{ $offre->id }}">
                                                        <i class="fa fa-times text-danger"></i>
                                                    </a>
                                                    <a href="/offre/{{ $offre->id }}/edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="/offre/{{ $offre->id }}">
                                                        <i class="fa fa-eye text-info"></i>
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
                                        <th>Titre de l'offre</th>
                                        <th>statut</th>
                                        <th>deadline</th>
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
        </div>
    @else
        @include('components.oooops')
    @endif

@endsection
