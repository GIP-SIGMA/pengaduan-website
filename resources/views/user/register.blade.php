
@extends('layout.user')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <style>
        body {
            background-color: #C6E7FF;
        }
        .btn-purple {
            background-color: #4A628A;
        }
        .btn-purple:hover {
            background-color: #6a70fc;
        }
        .toggle .password{
            position: absolute;
            top: 66%;
            right: 28px;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 1.2em;
            color: #888;
        }

    </style>
@endsection

@section('title', 'Rehub - E-Report Hub')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h2 class="text-center text-white mb-0 mt-5">REHUB</h2>
            <p class="text-center text-white mb-5">E-Report Hub</p>
            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="text-center mb-5">Create Account</h2>
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="number" name="nik" placeholder="Ur NIK" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Ur NAME" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="Email" placeholder="Ur Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Ur Password" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <input type="number" name="telp" placeholder="Ur Number Telp" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-purple text-white mt-5" style="width: 100%">Register</button>
                        <div>
                            <p class="text-center mt-3">Already Have Account? <a href="/login">Login Here</a></p>
                        </div>
                        <a href="/" class="btn btn-warning mt-3 text-white w-100">Back To Home</a>
                    </form>
                </div>
            </div>
            @if (Session::has('pesan'))
                <div class="alert alert-danger mt-2">
                    {{ Session::get('pesan') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection