
<!DOCTYPE html>
<html lang="en">
<head>
  <title>STORES_SHOW</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/stores_show.css') }}">
</head>
<body>
<div class="container">
	<h2>STORES_SHOW</h2>
	<div class="container">
		<form action={{ route('stores_edit', $stores->id) }} method="post">
			@csrf
			{{ @method_field('PUT')}}
			<div class="form-group">
				<label for="">name</label>
				<input type="text" name="name" value="{{$stores->name}}">
			</div>
			<div class="form-group">
				<label for="">email</label>
				<input type="text" name="email" value="{{$stores->email}}">
			</div>
			<div class="form-group">
				<input type="submit">
			</div>
		</form>
	</div>
</div>
</body>
</html>
