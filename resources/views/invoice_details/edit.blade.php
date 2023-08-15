<div style="margin-bottom: 1em">
    <a href="{{ route('invoice_details.index') }}">InvoiceDetails List</a>
</div>

<h1>Edit InvoiceDetails</h1>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<form action="{{ route('invoice_details.edit', $invoice_detail) }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="cantidad">Cantidad</label>
        <input type="text" name="cantidad" id="cantidad" placeholder="Enter Cantidad" value="{{ $invoice_detail->cantidad }}">
        @error('cantidad')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em">
        <label for="bill_id">Bills</label>
        <select name="  bill_id" id="bill_id">
            <option value="">Select</option>
            @foreach($bills as $bill)
                <option
                    @if($bill->id === (int)$invoice_detail->bill_id)
                        selected
                    @endif
                    value="{{ $bill->id }}">{{ $bill->name }}</option>
            @endforeach
        </select>
        @error('bill_id')
        <div style="color: red;">{{  $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
