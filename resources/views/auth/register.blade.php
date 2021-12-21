@extends('layouts.auth')
    

@section('titulo-cartao')
    Cadastre-se
@endsection

@section('titulo')
    Registro
@endsection

@section('form')
    <form class="user" action="{{ url('/register') }}" method="POST">
        @csrf
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="name" name="name"
                    placeholder="First Name">
                    @error('name')
                        <span class="btn btn-sm mt-2 bg-warning text-dark">{{$message}}</span>
                    @enderror
            </div>
            <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" id="exampleLastName"
                    placeholder="Last Name">
            </div>
        </div>
        <div class="form-group">
            <input type="email" class="form-control form-control-user" id="email" name="email"
                placeholder="Email Address">
                @error('email')
                    <span class="btn btn-sm mt-2 bg-warning text-dark">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" class="form-control form-control-user"
                    id="password" name="password" placeholder="Password">
                    @error('password')
                        <span class="btn btn-sm mt-2 bg-warning text-dark">{{$message}}</span>
                    @enderror
                </div>
            <div class="col-sm-6">
                <input type="password" class="form-control form-control-user"
                    id="password_confirmation" name="password_confirmation" placeholder="Repeat Password">
                    @error('password_confirmation')
                        <span class="btn btn-sm mt-2 bg-warning text-dark">{{$message}}</span>
                    @enderror
            </div>
        </div>
        <button href="#" class="btn btn-primary btn-user btn-block">Register Account</button>
        {{-- <hr>
        <a href="index.html" class="btn btn-google btn-user btn-block">
            <i class="fab fa-google fa-fw"></i> Register with Google
        </a>
        <a href="index.html" class="btn btn-facebook btn-user btn-block">
            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
        </a> --}}
    </form>

@endsection

@section('link-login-register')
<a class="small" href="{{ route('login') }}">Já possui uma conta? Entre!</a>
@endsection    
                        