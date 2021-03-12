@extends('layouts.base')

@section('title', 'Draftsman modify')


@section('css')
    <link rel="stylesheet" href="{{ asset('/css/add.css') }}">
@endsection

@section('content')
<form action="/updateDraftsman" method="POST">
    @csrf
    <fieldset>
        <legend>New Draftsman</legend>
        <input type="hidden" name="id" value="{{$draftsman->id}}">
        <label for="name">Name : </label>
        <input type="text" name="name" id="name" value="{{$draftsman->name}}"><br><br>

        <label for="nationality">Nationality : </label>
        <input type="text" name="nationality" id="nationality" value="{{$draftsman->nationality}}"><br><br>

        <label for="birth_year">Birth year : </label>
        <input type="number" name="birth_year" id="birth_year" value="{{$draftsman->birth_year}}"><br><br>

        <input type="submit" value="confirm !">
    </fieldset>
</form>
@endsection