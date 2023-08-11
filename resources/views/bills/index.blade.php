<div><a href="/">Home</a></div>
<a href="{{ route('bills.create') }}">New Bill</a>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<table cellpadding="10" cellspacing="1" border="1">
    <thead>
    <tr>
        <td>No.</td>
        <td>Subtotal</td>
        <td>Total</td>
        <td>Client</td>
        <td>Product</td>
        <td>Employee</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($bills as $key =>  $bill)
        <tr>
            <td>{{ $bills->firstItem() + $key }}.</td>
            <td>{{ $bill-> subtotal }}</td>
            <td>{{ $bill->total }}</td>
            <td>{{ $bill->client->name }}</td>
            <td>{{ $bill->product->name }}</td>
            <td>{{ $bill->employee->name }}</td>
            <td>
                <a href="{{ route('bills.edit', $bill) }}">Edit</a>

                <form action="{{ route('bills.delete', $bill) }}" method="post">
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