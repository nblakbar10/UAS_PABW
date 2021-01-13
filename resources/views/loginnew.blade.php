
@extends('layout/main')
@section('title','Login')
@section('container')
<link rel="stylesheet" href="{{asset('css/material-design-iconic-font.min.css')}}">
<div class="container">
    <div class="signin-content">
        <div class="signin-form">
            <h2 class="form-title">Sign up</h2>
            <form method="POST" class="register-form" id="login-form">
                <div class="form-group">
                    <label for="username"></label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                    <label for="password"></label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group form-button">
                    <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
            </form>
        </div>
    </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $mysqli = new mysqli("localhost", "root", "", "pabw");


    $sql = DB::table('user')->get();
    #$sql = "SELECT * FROM user where username='" . $_GET['username'] . "' and password='" . $_GET['password'] . "'";
    $result = $mysqli->query($sql);

    if (!empty($result) && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            session_start();
            $_SESSION["username"] = $row['username'];
            $_SESSION["password"] = $row['password'];
            header("Location: /selamatdatang");
        }
    } else {
       ## echo "Username dan Password salah";
    }
}
?>

<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/main-sign-in.js')}}"></script>
@endsection