@extends('app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <div style="margin-bottom: 1em">
    <a href="{{ route('cities.index') }}">City List</a>
</div>
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="card-header text-center">Edit City</h1>
                        @if(session('message'))
                            <div style="color: green;">{{ session('message') }}</div>
                        @endif

                        <form action="{{ route('cities.edit', $city) }}" method="post">
                            @csrf
                            <div style="margin-bottom: 1em;">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Enter city" value="{{ $city->name }}">
                                @error('name')
                                <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div style="margin-bottom: 1em">
                                <label for="department_id">Department</label>
                                <select class="form-control" name="department_id" id="department_id">
                                    <option value="">Select</option>
                                    @foreach($departments as $department)
                                        <option
                                            @if($department->id === (int)$city->department_id)
                                                selected
                                            @endif
                                            value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                                @error('department_id')
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
    </main>



