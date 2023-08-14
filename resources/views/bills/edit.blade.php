<div style="margin-bottom: 1em">
    <a href="{{ route('bills.index') }}">Bill List</a>
</div>

<h1>Edit Provider</h1>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<form action="{{ route('bills.edit', $bill) }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="subtotal">Subtotal</label>
        <input type="text" name="subtotal" id="subtotal" placeholder="Enter subtotal" value="{{ $bill->subtotal }}">
        @error('subtotal')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="total">Total</label>
        <input type="text" name="total" id="total" placeholder="Enter total" value="{{  $bill->total }}">
        @error('total')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em">
        <label for="client_id">Client</label>
        <select name="client_id" id="client_id">
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
        <select name="product_id" id="product_id">
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
        <select name="employee_id" id="employee_id">
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
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
