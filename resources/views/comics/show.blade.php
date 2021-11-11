@extends('layout.base')

@section('pageContent')
    <h1>{{$comic['title']}}</h1>
    <p>
        {!!$comic['description']!!}
    </p>
    <h3>Prezzo: {{$comic['price']}}</h3>
@endsection
