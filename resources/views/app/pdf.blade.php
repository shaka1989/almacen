<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<link rel="stylesheet" href="{{ asset('css/pdf.css') }}">


	</head>
	<body>
		


		<div class="container">
			
					
			<h1>Listado de productos en el almacen</h1>


			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Cantidad</th>
						<th>Valor</th>
						<th>Número de Ventas</th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $product)
					<tr>
						<td>{{ $product->name}}</td>
						<td>{{ $product->quanty}}</td>
						<td>${{ number_format($product->value, 0, '', '.')}}</td>
						<td>{{ $product->sales}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>

		
		</div>

		
	</body>
</html>