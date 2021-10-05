@extends('layouts.mail')

@section('content')
<h1>Bonjour {{ $exp_nom }},</h1>
<p>{{$mail_message}}</p>
<p>Cliquer sur le boutton "Ajouter au Nwesletter" pour resevoir regulierement les nouvelles de la Fondation Panzi</p>
<a class="btn btn-primary" href="" type="button">Ajouter au Nwesletter</a>

<p>les service de la communication </p>

@endsection