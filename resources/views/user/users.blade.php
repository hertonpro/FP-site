@extends('admin.index')

@section('content')
@if (auth()->user()->role_id == 1)
    <link rel="stylesheet" href="{{ asset('css/croppie.css') }}">
    <script src="{{ asset('js/croppie.js') }}"></script>
    <div class="container ">
        <div class="d-flex justify-content-end m-1">
        </div>
    </div>

    <div class="row">
        
            <div class="col-lg-6">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Liste des utilisateurs</h5>
                    <div class="ibox-tools">
                        <button type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-plus"></i>Ajouter
                        </button>
                    </div>
                    <!-- Add user modale -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Fonrmulaire d'ajout utilisateur</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="login-card-description">Ajouter un utilisateur</p>
                                    <form method="POST" action="/user">
                                        @csrf

                                        <!-- Name -->
                                        <div class="mt-4">
                                            <x-input id="name" class="form-control border-secondary" placeholder="Nom"
                                                type="text" name="name" :value="old('name')" required autofocus />
                                        </div>

                                        <div class="mt-4">
                                            <x-input id="lastname" class="form-control border-secondary"
                                                placeholder="Post-nom" type="text" name="lastname" :value="old('lastname')"
                                                required autofocus />
                                        </div>

                                        <div class="mt-4">
                                            <x-input id="nickname" class="form-control border-secondary"
                                                placeholder="Prenom" type="text" name="nikename" :value="old('nikename')"
                                                required autofocus />
                                        </div>

                                        <div class="mt-4">
                                            <select id="role_id" class="form-control border-secondary" placeholder="role"
                                                name="role_id">
                                                <option selected>Role...</option>
                                                <option value="NULL">visiteur</option>
                                                <option value="1">Full-admin</option>
                                                <option value="2">Admin</option>
                                                <option value="3">Editeur</option>
                                                <option value="4">RH</option>
                                                <option value="5">Logistique</option>
                                            </select>
                                        </div>

                                        <!-- Email Address -->
                                        <div class="mt-4">
                                            <x-input id="email" class=" form-control border-secondary"
                                                placeholder="mail@example.com" type="email" name="email"
                                                :value="old('email')" required />
                                        </div>

                                        <!-- Password -->
                                        <div class="mt-4">

                                            <x-input id="password" class="form-control border-secondary" type="password"
                                                placeholder="Password" name="password" value="01passP@nz!" required
                                                autocomplete="new-password" />
                                        </div>

                                        <!-- Confirm Password -->
                                        <div class="mt-4">
                                            <x-input id="password_confirmation" class="form-control border-secondary"
                                                type="password" value="01passP@nz!" placeholder="Confirmer"
                                                name="password_confirmation" required />
                                        </div>

                                        <div class="flex items-center justify-end mt-4">
                                            <a class=" text-warning underline text-gray-600 hover:text-gray-900"
                                                href="{{ route('login') }}">
                                                {{ __('Déjà enregistré ?') }}
                                            </a>

                                            <x-button class="btn btn-warning text-secondary">
                                                {{ __('Enregistre') }}
                                            </x-button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table id="datateble" class="display compact" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Titre de l'article</th>
                                    <th>Role</th>
                                    <th>mail</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    @if (1 == 1 && 1 == 1)
                                        <tr class="gradeX">
                                            <td> <a href="/user/{{ $user->id }}">{{ $user->name }}</a> </td>
                                            <td>
                                                @if ($user->role_id == null)
                                                    <span class="label label-secondery">Visitor</span>
                                                @elseif ($user->role_id == 1)
                                                    <span class="label label-danger">Full-admin</span>
                                                @elseif ($user->role_id == 2)
                                                    <span class="label label-info">Admin</span>
                                                @elseif ($user->role_id == 3)
                                                    <span class="label label-primary">Editeur</span>
                                                @elseif ($user->role_id == 4)
                                                    <span class="label label-success">RH</span>
                                                @elseif ($user->role_id == 5)
                                                    <span class="label label-success">Logistique</span>
                                                @endif
                                            </td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @csrf
                                                @method('DELETE')
                                                <div class="list-group list-group-horizontal">
                                                    <a href=""
                                                        onclick="if(confirm('Do you want to delete this blogs?'))event.preventDefault(); document.getElementById('delete-{{ $user->id }}').submit();">
                                                        <button class="btn text-danger" type="button"><i
                                                                class="fa fa-times "></i></button>
                                                    </a>
                                                    <a href="/user/{{ $user->id }}/edit">
                                                        <button class="btn text-info" type="button"><i
                                                                class="fa fa-edit"></i></button>
                                                    </a>
                                                    <a href="/user/{{ $user->id }}">
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
                            <tfoot>
                                <tr>
                                    <th>Titre de l'article</th>
                                    <th>Role</th>
                                    <th>mail</th>
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
        
        
        @if (isset($userx))
            @if (url()->full() == url('user/' . $userx->id))
                <div class="col-lg-6">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h3><strong>Utilisateur: </strong>{{ $userx->name }}</h3>

                        </div>
                        <div class="ibox-content ">
                            <div class="widget-head-color-box navy-bg p-lg text-center text-primary">
                                <div class="m-b-md">
                                    <h2 class="font-bold no-margins">
                                        {{ $userx->name }}
                                    </h2>
                                    <small>
                                        @if ($userx->role_id == null)Visitor
                                        @elseif ($userx->role_id == 2)Admin
                                        @elseif ($userx->role_id == 1)Full-admin
                                        @elseif ($userx->role_id == 3)Editeur
                                        @elseif ($userx->role_id == 4)RH
                                        @elseif ($userx->role_id == 5)Logistique
                                        @endif
                                    </small>
                                </div>

                                <img src="{{ asset('files/profile/' . $userx->image) }}"
                                    class="rounded-circle circle-border m-b-md" alt="profile">
                                <div>
                                    <span>{{ $userx->email }}</span>
                                </div>
                                <a href="{{url('user/'.$user->id.'edit')}}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> Editer</a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-lg-6">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h3><strong>Utilisateur: </strong>{{ $userx->name }}</h3>
                            <form method="POST" action="/user/{{ $userx->id }}">
                                @method('patch')
                                @csrf
                                <!-- Photo de profille -->
                                <div class="col-md-4 text-center">
                                    <div id="upload-demo"></div>
                                </div>
                                <div class="col-md-4" style="padding:5%;">
                                    <input type="file" id="image_file">

                                    <div class="alert alert-success" id="upload-success"
                                        style="display: none;margin-top:10px;"></div>
                                </div>
                                <!-- Name -->
                                <div class="mt-4">
                                    <x-input id="name" class="form-control border-secondary" placeholder="Nom" type="text"
                                        name="name" value="{{ $userx->name }}" required autofocus />
                                </div>

                                <div class="mt-4">
                                    <x-input id="lastname" class="form-control border-secondary" placeholder="Post-nom"
                                        type="text" name="lastname" value="{{ $userx->lastname }}" required autofocus />
                                </div>

                                <div class="mt-4">
                                    <x-input id="nickname" class="form-control border-secondary" placeholder="Prenom"
                                        type="text" name="nickname" value="{{ $userx->nickname }}" required autofocus />
                                </div>

                                <div class="mt-4">
                                    <select id="role_id" class="form-control border-secondary" placeholder="role"
                                        name="role_id" >
                                        <option value="{{ $userx->role_id }}" selected>
                                            @if ($userx->role_id == null)Visitor
                                            @elseif ($userx->role_id == 2)Admin
                                            @elseif ($userx->role_id == 1)Full-admin
                                            @elseif ($userx->role_id == 3)Editeur
                                            @elseif ($userx->role_id == 4)RH
                                            @elseif ($userx->role_id == 5)Logistique
                                            @endif
                                        </option>
                                        <option value="NULL">visiteur</option>
                                        <option value="1">Full-admin</option>
                                        <option value="2">Admin</option>
                                        <option value="3">Editeur</option>
                                        <option value="4">RH</option>
                                        <option value="5">Logistique</option>
                                    </select>
                                </div>

                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-input id="email" class=" form-control border-secondary"
                                        placeholder="mail@example.com" type="email" name="email"
                                        value="{{ $userx->email }}" required />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <x-button class="btn btn-warning text-secondary" id="upload-image">
                                        {{ __('metre à jour') }}
                                    </x-button>

                                </div>

                            </form>
                        </div>

                    </div>
                </div>
                <script type="text/javascript">
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
            
            
                    var resize = $('#upload-demo').croppie({
                        enableExif: true,
                        enableOrientation: true,
                        viewport: { // Default { width: 100, height: 100, type: 'square' } 
                            width: 150,
                            height: 150,
                            type: 'square' //circle
                        },
                        boundary: {
                            width: 200,
                            height: 200
                        }
                    });
            
            
                    $('#image_file').on('change', function() {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            resize.croppie('bind', {
                                url: e.target.result
                            }).then(function() {
                                console.log('jQuery bind complete');
                            });
                        }
                        reader.readAsDataURL(this.files[0]);
                    });
            
            
                    $('#upload-image').on('click', function(ev) {
                        resize.croppie('result', {
                            type: 'canvas',
                            size: 'viewport'
                        }).then(function(img) {
                            $.ajax({
                                url: "{{ route('croppie.upload-image') }}",
                                type: "POST",
                                data: {
                                    "image": img,
                                    "id":{{$userx->id}}
                                },
                                success: function(data) {
            
                                }
                            });
                        });
                    });
                </script>
            @endif
        @endif
    </div>
    @else
        @include('components.oooops')    
        @endif
@endsection
