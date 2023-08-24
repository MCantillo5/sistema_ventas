@extends('app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<div style="margin-bottom: 1em">
    <a href="{{ route('bills.index') }}">Bill List</a>
</div>
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="card-header text-center">Create Bill</h1>
                        <div class="card-body">
                            @if(session('message'))
                                <div style="color: green;">{{ session('message') }}</div>
                            @endif

                            <form action="{{ route('bills.edit', $bill) }}" method="post">
                                @csrf
                                <div style="margin-bottom: 1em;">
                                    <label for="subtotal">Subtotal</label>
                                    <input class="form-control" type="text" name="subtotal" id="subtotal" placeholder="Subtotal" value="{{ $bill->subtotal }}">
                                    @error('subtotal')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="total">Total</label>
                                    <input class="form-control" type="text" name="total" id="total" placeholder="Total" value="{{  $bill->total }}">
                                    @error('total')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em">
                                    <label for="client_id">Client</label>
                                    <select class="form-control" name="client_id" id="client_id">
                                        <option value="">Select</option>
                                        @foreach($clients as $client)
                                            <option
                                                @if($client->id === (int)$bill->city_id)
                                                    selected
                                                @endif
                                                value="{{ $client->id }}">{{ $client->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('client_id')
                                    <div style="color: red;">{{  $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em">
                                    <label for="product_id">Product</label>
                                    <select class="form-control" name="product_id" id="product_id">
                                        <option value="">Select</option>
                                        @foreach($products as $product)
                                            <option
                                                @if($product->id === (int)$bill->city_id)
                                                    selected
                                                @endif
                                                value="{{ $product->id }}">{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('product_id')
                                    <div style="color: red;">{{  $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em">
                                    <label for="employee_id">Employee</label>
                                    <select class="form-control" name="employee_id" id="employee_id">
                                        <option value="">Select</option>
                                        @foreach($employees as $employee)
                                            <option
                                                @if($employee->id === (int)$bill->city_id)
                                                    selected
                                                @endif
                                                value="{{ $employee->id }}">{{ $employee->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('employee_id')
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


