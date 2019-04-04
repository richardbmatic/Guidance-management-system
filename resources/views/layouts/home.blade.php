@extends('master')

@section('content')
<div class="text-center mb-5">
    <span>Welcome back! Please login your account.</span>
</div>
<form class="w-50 m-auto" method="POST" action="{{ route('login') }}" >
    @csrf

    <div class="form-group">
        <input 
            type="email" 
            class="form-control{{ $errors->has('email') ? '  is-invalid' : '' }}" 
            name="email" 
            value="{{ old('email') }}" 
            required autofocus
        >

        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group">
        <input 
            type="password" 
            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
            name="password" 
            required
        >

        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
    <div class="text-right">
        <a href="#">
            <small>Forgot password</small>
        </a>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-outline-primary">Login</button>
    </div>
</form>
<div class="row text-center buttons-registration mt-3">
    <div class="col-md">
        <button type="submit" class="btn btn-outline-primary">
            Register Student
        </button>
    </div>
    <div class="col-md">
        <button type="submit" class="btn btn-outline-primary">
            Register Teacher
        </button>
    </div>
    <div class="col-md">
        <button type="submit" class="btn btn-outline-primary">
            Register Service Officer
        </button>
    </div>
</div>
@endsection
