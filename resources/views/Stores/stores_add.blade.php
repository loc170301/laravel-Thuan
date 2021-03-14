<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Store ADD</h2>
  <p>Change</p>
  <form action={{ route('stores_add') }} method="post">
    @csrf
    <div class="form-group">
      <label>name:</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
      <label>email:</label>
      <input type="text" class="form-control" name="email">
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <button type="submit">submit</button>
  </form>

</div>

</body>
</html>
