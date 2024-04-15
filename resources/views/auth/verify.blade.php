@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7" style="margin-top: 2%">
                <div class="box">
<<<<<<< HEAD
                    <h3 class="box-title" style="padding: 2%"> </h3>

                    <div class="box-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert"> 
                            </div>
                        @endif
                        <p> </p>
                        <a href="{{ route('verification.resend') }}"> </a>.
=======
                    <h3 class="box-title" style="padding: 2%">Verifica tu direccion de email</h3>

                    <div class="box-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">Se ha enviado un codigo de verificación a tu email
                            </div>
                        @endif
                        <p>Por favor verifica el mensaje enviado a tu email. Si no has recibido un email,</p>
                        <a href="{{ route('verification.resend') }}">has click aqui'</a>.
>>>>>>> ec83b1b5754da92cf48db738d43e545635b39876
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection