@extends('layouts.app')

@section('page_content')

    @foreach ($comics as $comic)
        <h1>{{ $comic['title'] }}</h1>
    @endforeach


@dump($comics);

@endsection

