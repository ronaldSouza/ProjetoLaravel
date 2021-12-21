@extends('layouts.auth')
    @section('titulo')
        Login
    @endsection

    @section('titulo-cartao')
        Seja Bem-vindo, Novamente
    @endsection



    @section('form')
    <form class="user" action="{{ url('/login') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="email" class="form-control form-control-user"
                id="email" name="email" aria-describedby="emailHelp"
                placeholder="Enter Email Address...">
            @error('email')
                <span class="btn btn-sm d-block mt-2 bg-warning text-dark">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-user"
            id="password" name="password" placeholder="Password">
            @error('password')
                <span class="btn btn-sm d-block mt-2 bg-warning text-dark">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox small">
                <input type="checkbox" class="custom-control-input" id="customCheck">
                <label class="custom-control-label" for="customCheck">Remember Me</label>
            </div>
        </div>
        <button href="#" class="btn btn-primary btn-user btn-block" type="submit">Login</button>
        {{-- <hr>
        <a href="index.html" class="btn btn-google btn-user btn-block">
            <i class="fab fa-google fa-fw"></i> Login with Google
        </a>
        <a href="index.html" class="btn btn-facebook btn-user btn-block">
            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
        </a> --}}
    </form>
    @endsection   
    
    
    @section('link-login-register')
        <a class="small" href="{{ route('register') }}">Create an Account!</a>
    @endsection
                                            