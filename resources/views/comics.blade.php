@extends('template.base')

@section('title', 'DC Comics - Comics')

@section('content')
    @foreach ($comics as $comic)
        <img src="{{ $comic['thumb'] }}" alt="">
    @endforeach
@endsection
    