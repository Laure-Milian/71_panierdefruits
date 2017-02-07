@extends('layout')

@section('content')

<form class="ui form" action="/products/createProduct" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="field">
	<label for="name">Nom de produit :</label>
		<input id="name" name="name" type="text">
	</div>	
	<div class="field">
		<label for="description">Description :</label>
		<input id="description" name="description" type="text">
	</div>
	<div class="field">
		<label for="price">Prix (en centimes) :</label>
		<input id="price" name="price" type="text">
	</div>
	<div class="field">
		<label for="stock">Stock :</label>
		<input id="stock" name="stock" type="text">
	</div>
	<button class="ui yellow button" type="submit">
		Ajouter ce produit
	</button>
</form>

@endsection