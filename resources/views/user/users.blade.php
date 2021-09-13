@extends('layouts.admin')

@section('content')
    <div class="container">

        <!-- Title -->
        <div class="hk-pg-header">
            <h3 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                            data-feather="user"></i></span></span> Utilisateurs</h3>
            dd{{ $users }}

            @foreach ($users as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        </div>
        <!-- /Title -->
        <div class="row">
            <section class="hk-sec-wrapper bg-white p-5 m-3">
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="datable_1" class="table table-hover w-100 display pb-30">
                                <thead>
                                    <tr>
                                        <th>Name Post-nom Prenom</th>
                                        <th>E-mail</th>
                                        <th>Rôle</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>
                                            <a href="#"> <abbr title="Voir"><i data-feather="user"></i></abbr> </a>
                                        </td>
                                        <td>
                                            <a href="#"><abbr title="edite"><i data-feather="file"></i></abbr></a>
                                        </td>
                                        <td>
                                            <a href="#"><abbr title="trash"><i data-feather="trash"></i></abbr></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <div>
                <form method="post" action="/blog">
                    <div class="input-group">
                        <input class="form-control" type="text" name="" placeholder="Recipient's text"
                            aria-label="Recipient's " aria-describedby="my-addon">
                        <div class="input-group-append">
                            <span class="input-group-text" id="my-addon">Text</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
