
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/stayle.css') }}">
</head>
<body>

<table>
    <thead>
        <tr>
            <td>id</td>
            <td>total</td>
            <td>user id</td>
            <td>user name</td>
            <td>action</td>
        </tr>
    </thead>
    @foreach ($products as $product)

        @foreach ($product->orders as $order )

    <tbody>
        <tr class="{{ $loop->even? "bg-even":"" }}">
            <td> {{ $order->id }}</td>
            <td> {{ $order->total }}</td>
            <td> {{ $order->user_id }}</td>
            <td> {{ $order->user->name }}</td>
            @can('edit-order',$order)

            <td><button>edit</button></td>
            @endcan
        </tr>
    </tbody>



        @endforeach


    @endforeach
</table>


</body>
</html>



