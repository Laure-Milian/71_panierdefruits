<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Liste</title>
</head>
<body>
	
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
			</tr>
		@endforeach
	</table>

</body>
</html>