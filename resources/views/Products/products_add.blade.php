@extends('Header.header')
@extends('Footer.footer')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
</head>
<body>
  @section('sidebar')
    @parent
      <div class="container">
    
        <h2>Products ADD</h2>
        <p>Change</p>
        <form action={{ route('products_add') }} method="post">
          @csrf
          <div class="form-group">
            <label>name:</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label>price:</label>
            <input type="text" class="form-control" name="price">
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
  @endsection
    
  @section('footer')
    @parent
      
  @endsection
</body>
</html>
