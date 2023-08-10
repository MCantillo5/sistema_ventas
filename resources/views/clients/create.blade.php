<div style="margin-botton: 1em">
    <a href="{{ route('clients.index') }}">Client list</a>
</div>

<h1>Create Client</h1>

@if(session('massage'))
    <div style="color: green;">{{ session('massage') }}</div>
@endif

<form action="{{ route('clients.create') }}" method="post">
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
    <div>
        <button type="submit">Submit</button>
    </div>
</form>

