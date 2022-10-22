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
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
            <th>amount</th>
            <th>created_at</th>
            <th>action</th>
        </tr>
        @foreach ($products as $product)
            {{-- @dd($loop) --}}
        <tr class="{{ $loop->even? "bg-even":"" }}">
            <td>{{ $product->id}}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->amount }}</td>
            <td>{{ $product->created_at }}</td>

            <td>
                <form action="{{ route("product.destroy",$product->id) }}" method="POST">
                    @method("DELETE")
                    @csrf
                <button >Delete</button></form>
                <form action="{{ route("product.edit",$product->id) }}" >
                <button>Update</button></form>

            </td>
        </tr>


        @endforeach

    </table>

    <table>
        <tr>
                <form action="{{ route("product.show") }} ",method="POST">
                <input type="submit">
                </form>
        </tr>
    </table>



</body>
</html>
