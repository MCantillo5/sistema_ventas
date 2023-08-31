@extends('app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<div><a href="/">Home</a></div>
<a href="{{ route('categories.create') }}">New Category</a>
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
                <th>Description</th>
                <th>Timestamp</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($categories as $key =>  $category)
                <tr>
                    <th>{{ $categories->firstItem() + $key }}.</th>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->created_at->format( 'F d, Y') }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category) }}" type="submit" class="btn btn-secondary btn-sm">Edit</a>

                        <form action="{{ route('categories.delete', $category) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-sm">Delete</button>
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

