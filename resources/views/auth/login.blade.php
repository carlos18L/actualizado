@extends('layouts.auth_app')

@section('content')
<div class="row">
    <div class="col-md-4 login-sec">
        <h2 class="text-center">Iniciar Sesion</h2>
        <form class="login-form" method="POST" action="{{ route('login') }}">


            @csrf
                @if ($errors->any())
                    <div class="alert alert-danger p-0">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



            <div class="form-group">
                <label for="email" class="text-uppercase">Usuario</label>
                <input type="text" id="email" type="email"
                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                  tabindex="1"
                value="{{ (Cookie::get('email') !== null) ? Cookie::get('email') : old('email') }}" autofocus
                required>
                <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                </div>

                
            </div>
            <div class="form-group">
                <label for="password" class="text-uppercase">Contraseña</label>
                <input id="password" type="password"
                value="{{ (Cookie::get('password') !== null) ? Cookie::get('password') : null }}"
                 
                class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}" name="password"
                tabindex="2" required>
                <div class="invalid-feedback">
                    {{ $errors->first('password') }}
                </div>
            </div>
            <div class="form-check">
            <button type="submit"  class="btn btn-login float-left" tabindex="4">
                Iniciar Sesión
            </button>
        </div>
        </form>
    </div>
    <div class="col-md-8 banner-sec">
       
            <div   role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="assets/images/logoitste.png" alt="First slide" style="display: block; margin: 0 auto;">
                    <div class="d-none d-md-block">
                    </div>
                </div>
                
            </div>
        
    </div>
</div>
@endsection