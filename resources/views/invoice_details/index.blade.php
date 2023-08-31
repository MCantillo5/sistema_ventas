@extends('app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<div><a href="/">Home</a></div>
<a href="{{ route('invoice_details.create') }}">New Invoice Detail</a>
<main class="login-form">
    <div class="container">
        @if(session('message'))
            <div style="color: green;">{{ session('message') }}</div>
        @endif

        <table class="table table-hover">
            <thead>
            <tr class="table-active">
                <th>No.</th>
                <th>Cantidad</th>
                <th>Bill</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($invoice_details as $key =>  $invoice_detail)
                <tr>
                    <th>{{ $invoice_details->firstItem() + $key }}.</th>
                    <td>{{ $invoice_detail-> cantidad }}</td>
                    <td>{{ $invoice_detail->bill->total }}</td>
                    <td>
                        <a href="{{ route('invoice_details.edit', $invoice_detail) }}" type="submit" class="btn btn-secondary btn-ms">Edit</a>

                        <form action="{{ route('invoice_details.delete', $invoice_detail) }}" method="post">
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
