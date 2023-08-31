@extends('app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<div><a href="/">Home</a></div>
<a href="{{ route('departments.create') }}">New Department</a>
<main class="login-form">
    <div class="container">
        @if(session('message'))
            <div style="color: green;">{{ session('message') }}</div>
        @endif

        <table class="table table-hover">
            <thead>
            <tr class="table-action">
                <th>No.</th>
                <th>Name</th>
                <th>Timestamp</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($departments as $key =>  $department)
                <tr>
                    <th>{{ $departments->firstItem() + $key }}.</th>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->created_at->format( 'F d, Y') }}</td>
                    <td>
                        <a href="{{ route('departments.edit', $department) }}" type="submit" class="btn btn-secondary btn-sm">Edit</a>

                        <form action="{{ route('departments.delete', $department) }}" method="post">
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

