@extends('layout')

@section('content')

Produit sélectionné :
<ul>
	<li> ID : {{ $product->id }} </li>
	<li> Name : {{ $product->name }} </li>
	<li> Description : {{ $product->description }} </li>
	<li> Price : {{ $product->price }} </li>
	<li> Stock : {{ $product->stock }} </li>	
</ul>

@endsection