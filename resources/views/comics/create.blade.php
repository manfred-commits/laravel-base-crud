@extends('layout.base')

@section('pageContent')
<h1>Inserisci un nuovo Comic</h1>

{{-- route to store the created information --}}
<form action="{{route("comics.store")}}" method="POST">
	@csrf
    
	<div class="form-group">
        <label for="title">Titolo</label>
		<input type="text" class="form-control" id="title" name="title" placeholder="Insersci titolo">
	</div>
    <div class="form-group">
        <label for="description">Descrizione Comic</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Insersci la descrizione"></textarea>
    </div>

	<div class="form-group">
		<label for="thumb">link img</label>
		<input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insersci il link img">
	</div>
    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Insersci il prezzo">
    </div>
    <div class="form-group">
		<label for="series">serie</label>
		<input type="text" class="form-control" id="series" name="series" placeholder="Insersci tipo di serie">
	</div>
	<div class="form-group">
		<label for="sale_date">Data di rilascio</label>
		<input type="number" class="form-control" id="sale_date" name="sale_date" placeholder="Insersci la date di rilascio">
	</div>



	<div class="form-group">
		<label for="type">tipo</label>
		<input type="text" class="form-control" id="type" name="type" placeholder="Insersci il tipo di comic">
	</div>

	<button type="submit" class="btn btn-primary">Crea</button>
  </form>

@endsection