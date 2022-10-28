@extends('layouts.master')
@section('title','Products')
{{-- @extends(asset('css/stayle.css')) --}}
@section('content')

<link rel="stylesheet" href="{{ asset('css/stayle.css') }}">
<div>
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
                @can('superadmin')

                <button >Delete</button></form>
                @endcan
                <form action="{{ route("product.edit",$product->id) }}" >
                    <button>Update</button></form>

                </td>
            </tr>


        @endforeach
        {{ $products->links() }}

    </table>

    <table>
        <tr>
            <form action="{{ route("product.show") }} ",method="POST">
                <input type="submit">
            </form>
        </tr>
    </table>


</div>
@endsection
