<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Zmdrde</h1>
    @foreach($products as $product)
  <tr>
              <th>{{$product->id}}</th>
              <th>{{$product->price}}</th>

  </tr>

@endforeach
    
    
</body>
</html>