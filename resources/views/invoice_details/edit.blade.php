@extends('app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<div style="margin-bottom: 1em">
    <a href="{{ route('invoice_details.index') }}">Invoice Details List</a>
</div>
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="card-header text-center">Edit InvoiceDetails</h1>
                        <div class="card-body">
                            @if(session('message'))
                                <div style="color: green;">{{ session('message') }}</div>
                            @endif

                            <form action="{{ route('invoice_details.edit', $invoice_detail) }}" method="post">
                                @csrf
                                <div style="margin-bottom: 1em;">
                                    <label for="cantidad">Cantidad</label>
                                    <input class="form-control" type="text" name="cantidad" id="cantidad" placeholder="Cantidad" value="{{ $invoice_detail->cantidad }}">
                                    @error('cantidad')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em">
                                    <label for="bill_id">Bills</label>
                                    <select class="form-control" name="  bill_id" id="bill_id">
                                        <option value="">Select</option>
                                        @foreach($bills as $bill)
                                            <option
                                                @if($bill->id === (int)$invoice_detail->bill_id)
                                                    selected
                                                @endif
                                                value="{{ $bill->id }}">{{ $bill->total }}</option>
                                        @endforeach
                                    </select>
                                    @error('bill_id')
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


