@extends('app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <div style="margin-bottom: 1em">
    <a href="{{ route('products.index') }}">Product List</a>
</div>
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="card-header text-center">Edit Product</h1>
                        <div class="card-body">
                            @if(session('message'))
                                <div style="color: green;">{{ session('message') }}</div>
                            @endif
                            <form action="{{ route('products.edit', $product) }}" method="post">
                                @csrf
                                <div style="margin-bottom: 1em;">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Enter category" value="{{ $product->name }}">
                                    @error('name')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="price">Price</label>
                                    <input class="form-control" type="text" name="price" id="price" placeholder="Enter price" value="{{  $product->price }}">
                                    @error('price')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em">
                                    <label for="category_id">Category</label>
                                    <select class="form-control" name="category_id" id="category_id">
                                        <option value="">Select</option>
                                        @foreach($categories as $category)
                                            <option
                                                @if($category->id === (int)$product->category_id)
                                                    selected
                                                @endif
                                                value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <div style="color: red;">{{  $message }}</div>
                                    @enderror
                                </div>
                                <div class="d-grid gap-2 col-12 mx-auto">
                                    <button class="btn btn-secondary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


