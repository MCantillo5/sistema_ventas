@extends('app')
@section('content')
    <main class="signup-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Registrate!</h3>
                        <div class="card-body">
                            <form action="{{ route('register.custom') }}" method="post">
                                @csrf
                                <div class="form-group  mb-3">
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"  required autofocus>

                                    @if($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group  mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control" name="email"  required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="remember">Recordarme</label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Registrame!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>