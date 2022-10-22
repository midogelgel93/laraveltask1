<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form action="{{ route("product.create") }}" method="POST">
    @csrf
    <input type="text" name="name" value="" placeholder="Product Name">
    <input type="text" name="price" value="" placeholder="Product Price">
    <input type="number" name="amount" value="" placeholder="Product Amount">
    <input type="submit" method="POST">
</form>

</body>
</html>
