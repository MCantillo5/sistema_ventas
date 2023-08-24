@extends('app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <div style="margin-bottom: 1em">
    <a href="{{ route('categories.index') }}">Category List</a>
</div>
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="card-header text-center">Edit Category</h1>
                        <div class="card-body">
                            @if(session('message'))
                                <div style="color: green;">{{ session('message') }}</div>
                            @endif

                            <form action="{{ route('categories.edit', $category) }}" method="post">
                                @csrf
                                <div style="margin-bottom: 1em;">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Enter category" value="{{ $category->name }}">
                                    @error('name')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <div class="mb-3">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" name="description" id="description" placeholder="Enter description" value="{{ $category->description}}" rows="3"></textarea>
                                        @error('description')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <button type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



