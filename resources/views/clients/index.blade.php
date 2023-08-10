<div><a href="/">Home</a></div>
<a href="{{ route('clients.create') }}">New Client</a>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<table cellpadding="10" cellspacing="1" border="1">
    <thead>
    <tr>
        <td>No.</td>
        <td>Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Document</td>
        <td>Phone</td>
        <td>City</td>
        <td>Timestamp</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($clients as $key =>  $client)
        <tr>
            <td>{{ $clients->firstItem() + $key }}.</td>
            <td>{{ $client-> name }}</td>
            <td>{{ $client->lastname }}</td>
            <td>{{ $client->email }}</td>
            <td>{{ $client->document }}</td>
            <td>{{ $client->phone }}</td>
            <td>{{ $client->city->name }}</td>
            <td>{{ $client->created_at->format( 'F d, Y') }}</td>
            <td>
                <a href="{{ route('clients.edit', $client) }}">Edit</a>

                <form action="{{ route('clients.delete', $client) }}" method="post">
                    @csrf
                    <button type="submit">Delete</button>
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
