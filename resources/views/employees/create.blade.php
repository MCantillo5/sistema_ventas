@extends('app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <div style="margin-botton: 1em">
    <a href="{{ route('employees.index') }}">Employee list</a>
</div>
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h1 class="card-header text-center">Create Employee</h1>
                    <div class="card-body">
                        @if(session('massage'))
                            <div style="color: green;">{{ session('massage') }}</div>
                        @endif
                        <form action="{{ route('employees.create') }}" method="post">
                            @csrf
                            <div  style="margin-bottom: 1em;">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Enter employee" value="{{ old('name') }}">
                                @error('name')
                                <div style="color:red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div style="margin-bottom: 1em;">
                                <label for="lastname">Last Name</label>
                                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Enter  lastname" value="{{ old('lastname') }}">
                                @error('price')
                                <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div style="margin-bottom: 1em;">
                                <label for="email">Email</label>
                                <input class="form-control" type="text" name="email" id="email" placeholder="Enter email" value="{{ old('email') }}">
                                @error('email')
                                <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div style="margin-bottom: 1em;">
                                <label for="address">Address</label>
                                <input class="form-control" type="text" name="address" id="address" placeholder="Enter address" value="{{ old('address') }}">
                                @error('address')
                                <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div style="margin-bottom: 1em;">
                                <label for="document">Document</label>
                                <input class="form-control" type="text" name="document" id="document" placeholder="Enter document" value="{{ old('document') }}">
                                @error('document')
                                <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div style="margin-bottom: 1em;">
                                <label for="phone">Phone</label>
                                <input class="form-control" type="text" name="phone" id="phone" placeholder="Enter phone" value="{{ old('phone') }}">
                                @error('phone')
                                <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div style="margin-bottom: 1em;">
                                <label for="post">Post</label>
                                <input class="form-control" type="text" name="post" id="post" placeholder="Enter post" value="{{ old('post') }}">
                                @error('post')
                                <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div style="margin-bottom: 1em">
                                <label for="city_id">City</label>
                                <select class="form-control" name="city_id" id="city_id">
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


