@extends('layout')

@section('content')

<h2>Vous êtes en train de modifier le produit {{ $product->name }} </h2>

<form class="ui form" action="/products/editProduct/{{$product->id}}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="field">
	<label for="name">Nom de produit :</label>
		<input id="name" name="name" type="text" value="{{$product->name}}">
	</div>	
	<div class="field">
		<label for="description">Description :</label>
		<input id="description" name="description" type="text" value="{{$product->description}}">
	</div>
	<div class="field">
		<label for="price">Prix (en centimes) :</label>
		<input id="price" name="price" type="text" value="{{$product->price}}">
	</div>
	<div class="field">
		<label for="stock">Stock :</label>
		<input id="stock" name="stock" type="text" value="{{$product->stock}}">
	</div>
	<button class="ui orange button" type="submit">
		Enregistrer les modifications
	</button>
</form>

@endsection