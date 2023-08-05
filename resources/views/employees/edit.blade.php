<div style="margin-bottom: 1em">
    <a href="{{ route('employees.index') }}">Employee List</a>
</div>

<h1>Edit Employee</h1>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<form action="{{ route('employees.edit', $employee) }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter name" value="{{ $employee->name }}">
        @error('name')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname" placeholder="Enter lastname" value="{{  $employee->lastname }}">
        @error('lastname')
        <div style="color: red;">{{ $massage }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Enter email" value="{{  $employee->email }}">
        @error('email')
        <div style="color: red;">{{ $massage }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="address">Address</label>
        <input type="text" name="price" id="price" placeholder="Enter address" value="{{  $employee->address }}">
        @error('address')
        <div style="color: red;">{{ $massage }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="document">Document</label>
        <input type="text" name="document" id="document" placeholder="Enter document" value="{{  $employee->document }}">
        @error('document')
        <div style="color: red;">{{ $massage }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" placeholder="Enter phone" value="{{  $employee->phone }}">
        @error('phone')
        <div style="color: red;">{{ $massage }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="post">Post</label>
        <input type="text" name="post" id="post" placeholder="Enter post" value="{{  $employee->post }}">
        @error('post')
        <div style="color: red;">{{ $massage }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em">
        <label for="city_id">City</label>
        <select name="city_id" id="city_id">
            <option value="">Select</option>
            @foreach($cities as $city)
                <option
                    @if($city->id === (int)$employee->city_id)
                        selected
                    @endif
                    value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
        </select>
        @error('city_id')
        <div style="color: red;">{{  $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
