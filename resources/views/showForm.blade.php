@extends('layouts/master')

@section('content')
    <form action="{{route('save_link')}} " method="post" >
        @csrf
        @if($errors->count())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{$error}} <br>
                @endforeach
            </div>
        @endif
            <label for="title">titel</label>
            <input type="text"  name="title" placeholder="vul hier de titel in" >
        <br>

            <label for="discription">Omschrijving</label>
            <textarea name="description" placeholder="vul hier de omschrijving in">
            </textarea>
        <br>
            <label for="url">url</label>
            <input type="text" name="url" id="url" placeholder="typ hier je url in">
        <br>
        <button type="submit" class="btn btn-primary">Opsturen</button>

    </form>

@endsection