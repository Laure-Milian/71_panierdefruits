@extends('layout')

@section('content')

Produit sélectionné :
<ul>
	<li> ID : <span id="id">{{ $product->id }}</span> </li>
	<li> Name : {{ $product->name }} </li>
	<li> Description : {{ $product->description }} </li>
	<li> Price : {{ $product->price / 100 }} € </li>
</ul>
<div class="ui segment">
	Stock :	
	<button id="btnSubtract" class="ui pink button">-</button>		
	<span id="stock">{{ $product->stock }}</span>
	<button id="btnAdd" class="ui pink button">+</button>
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