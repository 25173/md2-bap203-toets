@extends('layouts/master')
@section('content')
<ul>
    @foreach($links as $link)

        <li>{{$link->title}}</li>
        <li>{{$link->url}}</li>
        <li>{{$link->description}}</li>

    @endforeach
</ul>
@endsection
