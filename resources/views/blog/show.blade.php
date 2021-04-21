@extends('layouts.layout')

@section("content")

    <h3>{{$article->titre}}</h3>
    <p> {{$article->article}} </p>

@endsection