@extends('layouts.app')

@section('page_content')

    @foreach ($comics as $comic)
        <h1>{{ $comic['title'] }}</h1>
        <img src="{{ $comic['thumb'] }}" alt="">
    @endforeach


@dump($comics);

@endsection