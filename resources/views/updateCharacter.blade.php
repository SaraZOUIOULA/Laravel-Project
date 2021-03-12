@extends('layouts.base')

@section('title', 'Upadate Character')


@section('css')
    <link rel="stylesheet" href="{{ asset('/css/add.css') }}">
@endsection

@section('content')
    <form action="/updateCharacter" method="POST">
        @csrf
        <fieldset>
            <legend>You're modifiying <span>{{$character->name}}<span></legend>
            
            <input type="hidden" name="id" value="{{$character->id}}">
            <label for="name">Name : </label>
            <input type="text" name="name" id="name" value="{{$character->name}}"><br><br>

            <label for="strip_cartoon">Comic's name : </label>
            <input type="text" name="strip_cartoon" id="strip_cartoon" value="{{$character->strip_cartoon}}"><br><br>
            
            <label for="draftsman">Draftsman : </label>
            <select name="draftsman_id" id="Draftsman">
            @foreach ($draftsmen as $draftsman)
                    @if($character->draftsman_id == $draftsman->id)
                        <option value="{{$draftsman->id}}" selected>{{$draftsman->name}}</option>
                    @else
                        <option value="{{$draftsman->id}}">{{$draftsman->name}}</option>
                    @endif
            @endforeach
            </select><br><br>

            <label for="creation_year">Creation year : </label>
            <input type="number" name="creation_year" id="creation_year" value="{{$character->creation_year}}"><br><br>

            <input type="submit" value="confirm !">
        </fieldset>
    </form>
@endsection 