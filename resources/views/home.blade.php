@extends('layouts.base')

@section('title', 'Cartoon characters')


@section('css')
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
@endsection

@section('content')
    <h1>Cartoon's characters</h1>
    <div class='global'>
        @foreach ($characters as $character)
                <div class='character'>
                    <input type="hidden" value={{$character->id}}>
                    <p>Name :  {{$character->name}}</p>
                    <p>Comic Name : {{$character->strip_cartoon}} </p>
                    <p>Draftsman :
                        @if(isset($character->draftsman->name))
                            <a href="/draftsman/{{$character->draftsman_id}}">{{$character->draftsman->name}}</a>
                        @else 
                            inconnu
                        @endif
                    </p>
                    <p>Creation year : {{$character->creation_year}}</p>   
                <div class="button"> 
                    <form action="/deleteCharacter" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$character->id}}">
                        <input class="btn" type="submit" value="delete">
                    </form>
                    <form action="/updateCharacter/{{$character->id}}" method="GET">
                        @csrf
                        <input type="hidden" name="id" value="{{$character->id}}">
                        <input class="btn" type="submit" value="modify">
                    </form>
                </div>
            </div>
        @endforeach  
    </div>
    
@endsection