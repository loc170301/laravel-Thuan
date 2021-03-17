@extends('Header.header')


<!DOCTYPE html>
<html lang="en">
<head>
  <title>products_SHOW</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/products_show.css') }}">
</head>
<body>
@section('sidebar')
@parent
	<div class="container">
		<h2>products_SHOW</h2>
		<div class="container">
			<form action={{ route('products_edit', $products->id) }} method="post">
				@csrf
				{{ @method_field('PUT')}}
				<div class="form-group">
					<label for="">name</label>
					<input type="text" name="name" value="{{$products->name}}">
				</div>
				<div class="form-group">
					<label for="">price</label>
					<input type="text" name="price" value="{{$products->price}}">
				</div>
				<div class="form-group">
					<input type="submit">
				</div>
			</form>
		</div>
	</div>
@endsection
</body>
</html>
