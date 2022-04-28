@extends('template.base')

@section('title', 'DC Comics - Comics')

@section('content')
    <main>
        <div class="margin-100 comics-container">
            <h1>CURRENT SERIES</h1>
            @foreach ($comics as $comic)
                <div class="comics-box">
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <h2>{{ $comic['series'] }}</h2>
                </div>
            @endforeach
        </div>
    </main>
@endsection
    