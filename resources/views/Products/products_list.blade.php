@extends('Header.header')


<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{ asset('css/products_show.css') }}">
	<title>Product List</title>
</head>
<body>
	@section('sidebar')
    @parent
		<div class="container">
			<div class="add">
				<a href="{{route('products_show_add_form')}}">ADD</a>
			</div>
			<table class="table_show">
				<thead>
					<tr>
						<th>Name</th>
						<th>Price</th>
						<th>EDIT</th>   
						<th>Delete</th>                        
					</tr>
				</thead>
				<tbody>
					@foreach ($products as $products) 
						<tr>
							<td>{{$products->name}}</td>
							<td>{{$products->price}}</td>
							<td class="disflex">
								<a href="{{ route('products_show',$products->id)}}">Edit</a>
							</td>
							<td>
								<form action="{{ route('products_delete',$products->id) }}" method="post">
								@csrf
								{{@method_field('DELETE')}}
								<button type="submit" class="noboder">Delete</button>
								</form>
							</td>
						</tr>
					@endforeach    
				</tbody>
			</table>
		</div>

	@endsection
</body>
</html>