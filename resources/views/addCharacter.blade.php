@extends('layouts.base')

@section('title', 'Add new character')


@section('css')
    <link rel="stylesheet" href="{{ asset('/css/add.css') }}">
@endsection

@section('content')
    <form action="/addCharacter" method="POST">
        @csrf
        <fieldset>
            <legend>New Character</legend>
            <label for="name">Name : </label>
            <input type="text" name="name" id="name"><br><br>

            <label for="strip_cartoon">Comic's name : </label>
            <input type="text" name="strip_cartoon" id="strip_cartoon"><br><br>
            
            <label for="draftsman">Draftsman : </label>
            <select name="draftsman_id" id="draftsman">
                @foreach ($draftsmen as $draftsman)
                    <option value="{{$draftsman->id}}">{{$draftsman->name}}</option>
                @endforeach
            </select><br><br>

            <label for="creation_year">Creation year : </label>
            <input type="number" name="creation_year" id="creation_year"><br><br>

            <input type="submit" value="confirm !">
        </fieldset>
    </form>
@endsection 