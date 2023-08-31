@extends('app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<div><a href="/">Home</a></div>
<a href="{{ route('clients.create') }}">New Client</a>
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
                <th>Last Name</th>
                <th>Email</th>
                <th>Document</th>
                <th>Phone</th>
                <th>City</th>
                <th>Timestamp</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($clients as $key =>  $client)
                <tr>
                    <th>{{ $clients->firstItem() + $key }}.</th>
                    <td>{{ $client-> name }}</td>
                    <td>{{ $client->lastname }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->document }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->city->name }}</td>
                    <td>{{ $client->created_at->format( 'F d, Y') }}</td>
                    <td>
                        <a href="{{ route('clients.edit', $client) }}" type="submit" class="btn btn-secondary -ms">Edit</a>

                        <form action="{{ route('clients.delete', $client) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-primary -ms">Delete</button>
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

