@extends('layout.base')

@section('pageContent')
<h1>Modifica il comic: {{$comic['title']}} </h1>

{{-- route to update --}}
<form action="{{route("comics.update", $comic['id'])}}" method="POST">
	@csrf
    @method('PUT')

	<div class="form-group">
        <label for="title">Titolo</label>
		<input type="text" class="form-control" id="title" name="title" placeholder="Insersci titolo" value="{{$comic['title']}}">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Descrizione Comic</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Insersci la descrizione">{{$comic['description']}}</textarea>
        @error('description')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
    </div>

	<div class="form-group">
		<label for="thumb">link img</label>
		<input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insersci il link img" value="{{$comic['thumb']}}">
        @error('thumb')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
    </div>
    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Insersci il prezzo" value="{{$comic['price']}}">
        @error('price')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
    </div>
    <div class="form-group">
		<label for="series">serie</label>
		<input type="text" class="form-control" id="series" name="series" placeholder="Insersci tipo di serie" value="{{$comic['series']}}">
        @error('series')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
    </div>
	<div class="form-group">
		<label for="sale_date">Data di rilascio</label>
		<input value="{{$comic['sale_date']}}" type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Insersci la data di rilascio">
        @error('sale_date')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
    </div>

	<div class="form-group">
		<label for="type">tipo</label>
		<input type="text" class="form-control" id="type" name="type" placeholder="Insersci il tipo di comic" value="{{$comic['type']}}">
        @error('type')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
    </div>

	<button type="submit" class="btn btn-primary">Modifica</button>
  </form>

@endsection