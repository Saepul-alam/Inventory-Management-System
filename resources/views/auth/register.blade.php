<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register - Inventory Management</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{

    font-family:'Segoe UI',sans-serif;

    background:#eef3f9;

}

.register-container{

    display:flex;

    min-height:100vh;

}

.left-side{

    flex:1.2;

    position:relative;

    background:url("https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?auto=format&fit=crop&w=1800&q=80")
    center center/cover no-repeat;

    display:flex;

    justify-content:center;

    align-items:center;

    overflow:hidden;

}

.left-side::before{

    content:"";

    position:absolute;

    inset:0;

    background:rgba(10,40,75,.78);

}

.hero-content{

    position:relative;

    color:white;

    width:80%;

    z-index:10;

}

.hero-title{

    font-size:54px;

    font-weight:700;

    line-height:1.2;

    margin-bottom:20px;

}

.hero-subtitle{

    font-size:18px;

    opacity:.9;

    line-height:1.8;

}

.right-side{

    width:500px;

    display:flex;

    justify-content:center;

    align-items:center;

    padding:60px;

    background:linear-gradient(
        180deg,
        #f8fbff,
        #edf4fb
    );

}

.register-box{

    width:100%;

    background:white;

    border-radius:25px;

    padding:45px;

    box-shadow:0 25px 60px rgba(0,0,0,.08);

}

.company-logo{

    width:90px;

    height:90px;

    border-radius:50%;

    background:#0F4C81;

    color:white;

    display:flex;

    justify-content:center;

    align-items:center;

    font-size:34px;

    margin:auto auto 25px;

}

.register-title{

    text-align:center;

    font-size:30px;

    font-weight:700;

    color:#183153;

}

.register-subtitle{

    text-align:center;

    color:#7b8794;

    margin-bottom:35px;

}

.form-label{

    font-weight:600;

    color:#1f2d3d;

    margin-bottom:8px;

}

.input-group{

    margin-bottom:5px;

}

.input-group-text{

    background:#f4f7fb;

    border:1px solid #dce5ef;

    color:#0F4C81;

    border-radius:12px 0 0 12px;

}

.form-control{

    height:54px;

    border:1px solid #dce5ef;

    border-left:none;

    border-radius:0 12px 12px 0;

    box-shadow:none;

}

.form-control:focus{

    border-color:#0F4C81;

    box-shadow:0 0 0 .2rem rgba(15,76,129,.15);

}

.register-btn{

    width:100%;

    height:56px;

    border:none;

    border-radius:14px;

    font-size:16px;

    font-weight:700;

    color:white;

    background:linear-gradient(
        135deg,
        #0F4C81,
        #1B6CA8
    );

    transition:.3s;

}

.register-btn:hover{

    transform:translateY(-2px);

    box-shadow:0 10px 25px rgba(15,76,129,.25);

}

.login-link{

    margin-top:25px;

    text-align:center;

    color:#666;

}

.login-link a{

    color:#0F4C81;

    font-weight:700;

    text-decoration:none;

}

.login-link a:hover{

    text-decoration:underline;

}

    </style>

</head>

<body>

<div class="register-container">

    <div class="left-side">

        <div class="hero-content">

            <h1 class="hero-title">

                Join Our
                <br>
                Inventory System

            </h1>

            <p class="hero-subtitle">

                Create your account to access the Inventory Management System of
                <strong>PT Asietex Sinar Indopratama</strong>.

            </p>

        </div>

    </div>

    <div class="right-side">

        <div class="register-box">

            <div class="company-logo">

                <i class="fas fa-boxes-stacked"></i>

            </div>

            <h2 class="register-title">

                Create Account

            </h2>

            <p class="register-subtitle">

                Fill in your information below

            </p>

            <form method="POST" action="{{ route('register') }}">

    @csrf

    <div class="form-group mb-3">

        <label class="form-label">
            Full Name
        </label>

        <div class="input-group">

            <span class="input-group-text">

                <i class="fas fa-user"></i>

            </span>

            <input
                type="text"
                name="name"
                class="form-control"
                value="{{ old('name') }}"
                placeholder="Enter your full name"
                required
                autofocus>

        </div>

        @error('name')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>



    <div class="form-group mb-3">

        <label class="form-label">
            Email Address
        </label>

        <div class="input-group">

            <span class="input-group-text">

                <i class="fas fa-envelope"></i>

            </span>

            <input
                type="email"
                name="email"
                class="form-control"
                value="{{ old('email') }}"
                placeholder="Enter your email"
                required>

        </div>

        @error('email')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>



    <div class="form-group mb-3">

        <label class="form-label">
            Password
        </label>

        <div class="input-group">

            <span class="input-group-text">

                <i class="fas fa-lock"></i>

            </span>

            <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Enter password"
                required>

        </div>

        @error('password')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>



    <div class="form-group mb-4">

        <label class="form-label">
            Confirm Password
        </label>

        <div class="input-group">

            <span class="input-group-text">

                <i class="fas fa-shield-alt"></i>

            </span>

            <input
                type="password"
                name="password_confirmation"
                class="form-control"
                placeholder="Repeat password"
                required>

        </div>

    </div>



    <button
        class="register-btn"
        type="submit">

        <i class="fas fa-user-plus me-2"></i>

        Create Account

    </button>



    <div class="login-link">

        Already have an account?

        <a href="{{ route('login') }}">

            Sign In

        </a>

    </div>

</form>

        </div>

    </div>

</div>

</body>

</html>