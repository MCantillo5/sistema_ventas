<div style="margin-botton: 1em">
    <a href="{{ route('providers.index') }}">Provider list</a>
</div>

<h1>Create Provider</h1>

@if(session('massage'))
    <div style="color: green;">{{ session('massage') }}</div>
@endif

<form action="{{ route('providers.create') }}" method="post">
    @csrf
    <div  style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter Name" value="{{ old('name') }}">
        @error('name')
        <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname" placeholder="Enter  lastname" value="{{ old('lastname') }}">
        @error('price')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Enter email" value="{{ old('email') }}">
        @error('email')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" placeholder="Enter address" value="{{ old('address') }}">
        @error('address')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="document">Document</label>
        <input type="text" name="document" id="document" placeholder="Enter document" value="{{ old('document') }}">
        @error('document')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" placeholder="Enter phone" value="{{ old('phone') }}">
        @error('phone')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em">
        <label for="city_id">City</label>
        <select name="city_id" id="city_id">
            <option value="">Select</option>
            @foreach($cities as $city)
                <option
                    @if($city->id === (int)old('city_id'))
                        selected
                    @endif
                    value="{{ $city->id }}">{{ $city->name }}
                </option>
            @endforeach
        </select>
        @error('city_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em">
        <label for="product_id">Product</label>
        <select name="product_id" id="product_id">
            <option value="">Select</option>
            @foreach($products as $product)
                <option
                    @if($product->id === (int)old('product_id'))
                        selected
                    @endif
                    value="{{ $product->id }}">{{ $product->name }}
                </option>
            @endforeach
        </select>
        @error('product_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>

