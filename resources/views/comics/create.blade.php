@extends('layout.base')

@section('pageContent')
<h1>Inserisci un nuovo Comic</h1>

{{-- route to store the created information --}}
<form action="{{route("comics.store")}}" method="POST">
	@csrf
    
	<div class="form-group">
        <label for="title">Titolo</label>
		<input type="text" class="form-control" id="title" name="title" placeholder="Insersci titolo">
		@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>
    <div class="form-group">
        <label for="description">Descrizione Comic</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Insersci la descrizione"></textarea>
		@error('description')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
    </div>

	<div class="form-group">
		<label for="thumb">link img</label>
		<input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insersci il link img">
		@error('thumb')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>
    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Insersci il prezzo">
		@error('price')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
    </div>
    <div class="form-group">
		<label for="series">serie</label>
		<input type="text" class="form-control" id="series" name="series" placeholder="Insersci tipo di serie">
		@error('series')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>
	<div class="form-group">
		<label for="sale_date">Data di rilascio</label>
		<input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Insersci la date di rilascio">
		@error('sale_date')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>



	<div class="form-group">
		<label for="type">tipo</label>
		<input type="text" class="form-control" id="type" name="type" placeholder="Insersci il tipo di comic">
		@error('type')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<button type="submit" class="btn btn-primary">Crea</button>
  </form>

@endsection