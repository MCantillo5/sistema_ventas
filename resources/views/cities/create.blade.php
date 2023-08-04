<div style="margin-botton: 1em">
    <a href="{{ route('cities.index') }}">City list</a>
</div>

<h1>Create City</h1>

@if(session('massage'))
    <div style="color: green;">{{ session('massage') }}</div>
@endif

<form action="{{ route('cities.create') }}" method="post">
    @csrf
    <div  style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter city" value="{{ old('name') }}">
        @error('name')
        <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em">
        <label for="department_id">Department</label>
        <select name="department_id" id="category_id">
            <option value="">Select</option>
            @foreach($departments as $department)
                <option
                    @if($department->id === (int)old('department_id'))
                        selected
                    @endif
                    value="{{ $department->id }}">{{ $department->name }}
                </option>
            @endforeach
        </select>
        @error('$department_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>

