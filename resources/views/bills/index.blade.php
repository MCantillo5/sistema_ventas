@extends('app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<div><a href="/">Home</a></div>
<a  href="{{ route('bills.create') }}">New Bill</a>
<main class="login-form">
    <div class="container">
            @if(session('message'))
                <div style="color: green;">{{ session('message') }}</div>
            @endif

                <table class="table table-hover ">
                <thead>
                <tr class="table-active">
                    <th>No.</th>
                    <th>Subtotal</th>
                    <th>Total</th>
                    <th>Client</th>
                    <th>Product</th>
                    <th>Employee</th>
                    <th>Timestamp</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($bills as $key =>  $bill)
                    <tr>
                        <th >{{ $bills->firstItem() + $key }}.</th>
                        <td>{{ $bill-> subtotal }}</td>
                        <td>{{ $bill->total }}</td>
                        <td>{{ $bill->client->name }}</td>
                        <td>{{ $bill->product->name }}</td>
                        <td>{{ $bill->employee->name }}</td>
                        <td>
                            {{ $bill->created_at->format('F d, Y') }}
                        </td>
                        <td>
                            <div>
                                <a href="{{ route('bills.edit', $bill)}}" class="btn btn-secondary btn-sm" type="submit">Edit</a>
                            </div>
                            <form action="{{ route('bills.delete', $bill) }} " method="post">
                                @csrf
                                <div>
                                    <button type="submit" class="btn btn-primary btn-sm" >
                                        Delete</button>
                                </div>
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
        </table>
    </div>
</main>

