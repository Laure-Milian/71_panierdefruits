@extends('layout')

@section('content')

Mes produits :
<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Description</th>
		<th>Price</th>
		<th>Strock</th>
	</tr>
	@foreach ($products as $product)
	<tr>
		<td>{{ $product->id }}</td>
		<td>{{ $product->name }}</td>
		<td>{{ $product->description }}</td>
		<td>{{ $product->price / 100 }}</td>
		<td>{{ $product->stock }}</td>
		<td>
			<a href="/products/show/{{$product->id}}">
				En savoir plus sur nos {{ $product->name }}
			</a>
		</td>
	</tr>
	@endforeach
</table>

<div>
	<a class="ui violet button" href='/products/create'>
		Ajouter un nouveau produit
	</a>	
</div>

@stop
