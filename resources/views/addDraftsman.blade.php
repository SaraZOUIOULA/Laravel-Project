@extends('layouts.base')

@section('title', 'Draftsman')


@section('css')
    <link rel="stylesheet" href="{{ asset('/css/add.css') }}">
@endsection

@section('content')
<form action="/addCharacter" method="POST">
    @csrf
    <fieldset>
        <legend>New Draftsman</legend>
        <label for="name">Name : </label>
        <input type="text" name="name" id="name"><br><br>

        <label for="nationality">Nationality : </label>
        <input type="text" name="nationality" id="nationality"><br><br>

        <label for="birth_year">Birth year : </label>
        <input type="text" name="birth_year" id="birth_year"><br><br>

        <input type="submit" value="confirm !">
    </fieldset>
</form>
@endsection