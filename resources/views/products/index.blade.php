@extends('app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<div><a href="/">Home</a></div>
<a href="{{ route('products.create') }}">New Product</a>
<main class="login-form">
    <div class="container">
        @if(session('message'))
            <div style="color: green;">{{ session('message') }}</div>
        @endif

        <table class="table table-hover">
            <thead>
            <tr class="table-active">
                <th>No.</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Timestamp</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($products as $key =>  $product)
                <tr>
                    <th>{{ $products->firstItem() + $key }}.</th>
                    <td>{{ $product-> name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        {{ $product->category->name }}
                    </td>
                    <td>
                        {{ $product->created_at->format('F d, Y') }}
                    </td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}" type="submit" class="btn btn-secondary btn-ms">Edit</a>

                        <form action="{{ route('products.delete', $product) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-ms">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No data found in table</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</main>

