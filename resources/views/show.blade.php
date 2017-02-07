@extends('layout')

@section('content')

Produit sélectionné :
<div id="id">{{$product->id}}</div>
<ul>
	<li> ID : {{ $product->id }} </li>
	<li> Name : {{ $product->name }} </li>
	<li> Description : {{ $product->description }} </li>
	<li> Price : {{ $product->price / 100 }} € </li>
</ul>
<div class="ui segment">
	Stock :
	<!-- <button id="btnSubtract" class="ui pink button">-</button> -->
	
	<form action="/products">
		<button id="btnSubtract" class="ui pink button">-</button>		
		{{csrf_field()}}
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

<div>
	<button class="ui red button" id="btnTest">LE BOUTON TEST EST ICI</button>
</div>

@endsection