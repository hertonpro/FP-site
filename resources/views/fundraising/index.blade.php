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
                    <h5>Liste des campagne publiées</h5>
                    <div class="ibox-tools">
                        <a href="/fundraising/create" class="btn btn-primary p-1"> <i class="fa fa-plus"></i> Ajouter</a>
                    </div>
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table id="datateble" class="display compact" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Titre du campagne</th>
                                    <th>statut</th>
                                    <th>deadline</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($fundraisings as $fundraising)
                                        <tr class="gradeX">
                                            <td> <a href="/fundraising/{{ $fundraising->id }}">{{ $fundraising->fundraising }}</a> </td>
                                            <td>
                                                @if (strtotime($fundraising->deadline)>strtotime(date('Y-m-d H:i:s')))
                                                    <span class="badge badge-sm badge-info badge-pill" >active</span>
                                                @else
                                                    <span class="badge badge-sm badge-danger badge-pill">expiré</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{ date("d-m-Y",strtotime($fundraising->deadline)) }}
                                            </td>
                                            <td>
                                                <a href="/fundraising/{{ $fundraising->id }}">
                                                    <i class="fa fa-times text-danger"></i>
                                                </a>
                                                <a href="/fundraising/{{ $fundraising->id }}/edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="/fundraising/{{ $fundraising->id }}">
                                                    <i class="fa fa-eye text-info"></i>
                                                </a>
                                            </td>
                                @empty
                                    <td class="text-warning">Pas de campagne disponible !!!</td>
                                    </tr>

                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Titre du campagne</th>
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
        <div class="col-lg-4">
            <div class="ibox ">
                <form action="">
                    <div class="ibox-title">
                        <h5>Campagne brouillons</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-sm" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Titre du campagne</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($fundraisings as $fundraising)
                                        <tr class="gradeX">
                                            @if ($fundraising->editeur == auth()->user()->id)
                                                <td> <a href="/fundraisings/{{ $fundraising->id }}">{{ $fundraising->titre }}</a> </td>
                                                <td>
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="list-group list-group-horizontal">
                                                        <a href=""
                                                            onclick="if(confirm('Do you want to delete this fundraisings?'))event.preventDefault(); document.getElementById('delete-{{ $fundraising->id }}').submit();">
                                                            <button class="btn text-danger" type="button"><i
                                                                    class="fa fa-times "></i></button>
                                                        </a>
                                                        <a href="/fundraisings/{{ $fundraising->id }}/edit">
                                                            <button class="btn text-info" type="button"><i
                                                                    class="fa fa-edit"></i></button>
                                                        </a>
                                                        <a href="/fundraisings/{{ $fundraising->id }}">
                                                            <button class="btn text-info" type="button"><i
                                                                    class="fa fa-eye"></i></button>
                                                        </a>
                                                    </div>
                                                </td>
                                            @endif

                                        @empty
                                            <td class="text-warning">Pas de campagne disponible !!!</td>
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
