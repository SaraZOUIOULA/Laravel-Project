@extends('layouts.base')

@section('title', 'Cartoon characters')


@section('css')
    <link rel="stylesheet" href="{{ asset('/css/draftsman.css') }}">
@endsection

@section('content')
    <div class='draftsman'>
        <input type="hidden" name="id" value="{{$draftsman->id}}">
        <p>Name: {{$draftsman->name}}</p>
        <p>Nationality: {{$draftsman->nationality}}</p>
        <p>Birth year: {{$draftsman->birth_year}}</p>
    <div>
    <div class="button"> 
        <form action="/deleteDraftsman" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$draftsman->id}}">
            <input type="submit" value="delete">
        </form>
        <form action="/updateDraftsman/{{$draftsman->id}}" method="GET">
            @csrf
            <input type="hidden" name="id" value="{{$draftsman->id}}">
            <input type="submit" value="modify">
        </form>
    </div>
@endsection