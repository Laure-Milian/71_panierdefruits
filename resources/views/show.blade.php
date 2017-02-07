@extends('layout')

@section('content')

Produit sélectionné :
<ul>
	<li> ID : {{ $product->id }} </li>
	<li> Name : {{ $product->name }} </li>
	<li> Description : {{ $product->description }} </li>
	<li> Price : {{ $product->price / 100 }} € </li>
</ul>
<div class="ui segment">
	Stock :
	<form action="/products/subtract/{{$product->id}}" method="post">
		{{csrf_field()}}
		<button class="ui pink button">-</button>
	</form>
	<span> {{ $product->stock }} </span>
	<form action="/products/add/{{$product->id}}" method="post">
		{{csrf_field()}}
		<button class="ui pink button">+</button>
	</form>
</div>

<div>
	<a href="/products/edit/{{$product->id}}" class="ui green button">Modifier ce produit</a>

	<form action="/products/delete/{{$product->id}}" method="post">
		{{csrf_field()}}
		<button class="ui blue button">Supprimer ce produit</button>	
	</form>

	<a class="ui violet button" href='/products/create'>
		Ajouter un nouveau produit
	</a>

</div>

@endsection