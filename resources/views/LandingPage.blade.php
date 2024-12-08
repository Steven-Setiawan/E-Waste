@extends('layout.layout')

@section('content')
    <body>
        <style>
            body {
                background-image: url('{{ asset('img/bg/Landing_enhanced.png') }}');
                background-size: cover;
                background-position: center;
                background-attachment: scroll;
                height: 100%;
                margin: 15px;
                color: white;
            }

            .landing-page-text {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
                font-size: 2rem;
            }
        </style>
        <div class="container" style="height: 60vh;">
            <div class="row h-100 justify-content-end align-items-center" style="margin-top: 20%">
                <div class="col-6 text-center">
                    <a href="{{ route('Login.index') }}" class="btn btn-primary rounded-pill" data-mdb-ripple-init
                        style="width: 200px; height: 50px; font-size: 25px;">
                        Login
                    </a>
                    <a href="{{ route('Register.create') }}" class="btn btn-primary rounded-pill" data-mdb-ripple-init
                        style="width: 200px; height: 50px; font-size: 25px; margin-left: 20px">
                        Register
                    </a>
                </div>
            </div>
        </div>

    </body>
@endsection
