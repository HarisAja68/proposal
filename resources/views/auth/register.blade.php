@extends('auth.master')

@section('content')
<div class="col-md-6">
    <div class="card mb-4 mx-4">
        <div class="card-body p-4">
            <h1>Register</h1>
            <p class="text-medium-emphasis">Create your account</p>
            <div class="input-group mb-3"><span class="input-group-text">
                    <svg class="icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                    </svg></span>
                <input class="form-control" type="text" placeholder="Username">
            </div>
            <div class="input-group mb-3"><span class="input-group-text">
                    <svg class="icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                    </svg></span>
                <input class="form-control" type="text" placeholder="Email">
            </div>
            <div class="input-group mb-3"><span class="input-group-text">
                    <svg class="icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                    </svg></span>
                <input class="form-control" type="password" placeholder="Password">
            </div>
            <div class="input-group mb-4"><span class="input-group-text">
                    <svg class="icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                    </svg></span>
                <input class="form-control" type="password" placeholder="Repeat password">
            </div>
            <button class="btn btn-block btn-success" type="submit">Create Account</button>
            <a href="{{ route('login') }}" class="btn btn-block btn-primary" type="submit">Back</a>
        </div>
    </div>
</div>
@endsection
