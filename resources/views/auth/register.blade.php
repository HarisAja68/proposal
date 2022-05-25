@extends('auth.master')

@section('content')
<div class="col-md-6">
    <div class="card mb-4 mx-4">
        <div class="card-body p-4">
            <h1>Register</h1>
            <p class="text-medium-emphasis">Create your account</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group mb-3"><span class="input-group-text">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                        </svg></span>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Username" name="name" value="{{ old('name') }}" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-3"><span class="input-group-text">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                        </svg></span>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" placeholder="Email Addrees" >

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-3"><span class="input-group-text">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                        </svg></span>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-4"><span class="input-group-text">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                        </svg></span>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repeat Password">
                </div>
                <button class="btn btn-block btn-success" type="submit">Create Account</button>
            </form>
            <a href="{{ route('login') }}" class="btn btn-block btn-primary mt-2" type="submit">Back</a>
        </div>
    </div>
</div>
@endsection
