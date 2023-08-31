@extends('app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<div><a href="/">Home</a></div>
<a href="{{ route('providers.create') }}">New Provider</a>
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
                <th>Last Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Document</th>
                <th>Phone</th>
                <th>City</th>
                <th>Timestamp</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($providers as $key =>  $provider)
                <tr>
                    <th>{{ $providers->firstItem() + $key }}.</th>
                    <td>{{ $provider-> name }}</td>
                    <td>{{ $provider->lastname }}</td>
                    <td>{{ $provider->email }}</td>
                    <td>{{ $provider->address }}</td>
                    <td>{{ $provider->document }}</td>
                    <td>{{ $provider->phone }}</td>
                    <td>{{ $provider->city->name }}</td>
                    <td>{{ $provider->created_at->format( 'F d, Y') }}</td>
                    <td>
                        <a href="{{ route('providers.edit', $provider) }}" type="submit" class="btn btn-secondary btn-ms">Edit</a>

                        <form action="{{ route('providers.delete', $provider) }}" method="post">
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

