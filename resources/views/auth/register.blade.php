@extends('master')
@section('title', 'Register Sistem Bengkel')
@section('content')
     <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
    </style>
    <link rel="stylesheet" href="{{asset('assets/css/custom_signin.css')}}">
    <main class="form-signin">
        <form>
            <h1 class="h3 mb-3 fw-normal text-center">Register System Bengkel</h1>

            <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2023 Kelompok Bengkel</p>
        </form>
</main>
@endsection