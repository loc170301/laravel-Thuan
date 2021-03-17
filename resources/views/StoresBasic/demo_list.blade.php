{{-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DEMO LIST</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>CITY</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($sb as $sb) 
                <tr>
                    <td>{{$sb->city}}</td>
                </tr>
            @endforeach   
        </tbody>
    </table>
</body>
</html> --}}

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
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
        <tr>
            <td>CITY</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($sb as $sb) 
            <tr>
                <td>{{$sb->city}}</td>
                <td class="disflex">
                    <a href="{{ route('sb_show',$sb->id)}}">Edit</a>
                </td>
                <td>
                    <form action="{{ route('sb_delete',$sb->id) }}" method="post">
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

</body>
</html>
