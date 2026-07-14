<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Forgot Password | Inventory Management</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI',sans-serif;
        }

        html,
        body{
            width:100%;
            height:100%;
            overflow:hidden;
            background:#eef4fb;
        }

        .page{

            width:100%;

            height:100vh;

            display:flex;

        }

        .left{

            flex:1;

            position:relative;

            background:url('https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=1800&q=80')
            center center/cover no-repeat;

            display:flex;

            align-items:center;

            justify-content:center;

        }

        .left::before{

            content:"";

            position:absolute;

            inset:0;

            background:linear-gradient(
                135deg,
                rgba(11,52,95,.88),
                rgba(7,22,43,.78)
            );

        }

        .hero{

            position:relative;

            z-index:2;

            color:white;

            width:75%;

        }

        .hero h1{

            font-size:56px;

            font-weight:700;

            line-height:1.2;

            margin-bottom:25px;

        }

        .hero p{

            font-size:18px;

            line-height:1.9;

            color:#f5f5f5;

        }

        .right{

            width:520px;

            background:white;

            display:flex;

            align-items:center;

            justify-content:center;

            padding:50px;

        }

        .card{

            width:100%;

        }

        .logo{

            width:90px;

            height:90px;

            border-radius:50%;

            background:#0F4C81;

            color:white;

            display:flex;

            align-items:center;

            justify-content:center;

            margin:auto;

            font-size:34px;

            margin-bottom:20px;

        }

        h2{

            text-align:center;

            font-size:32px;

            color:#16375d;

            margin-bottom:10px;

        }

        .subtitle{

            text-align:center;

            color:#7b8794;

            margin-bottom:35px;

            line-height:1.8;

        }

        .form-group{

            margin-bottom:20px;

        }

        label{

            display:block;

            margin-bottom:8px;

            font-weight:600;

            color:#374151;

        }

        .input-group{

            display:flex;

            align-items:center;

        }

        .icon{

            width:55px;

            height:55px;

            display:flex;

            justify-content:center;

            align-items:center;

            background:#f4f6fb;

            border:1px solid #dce5ef;

            border-right:none;

            border-radius:12px 0 0 12px;

            color:#0F4C81;

        }

        input{

            width:100%;

            height:55px;

            border:1px solid #dce5ef;

            border-radius:0 12px 12px 0;

            padding:0 18px;

            font-size:15px;

            outline:none;

        }

        input:focus{

            border-color:#0F4C81;

        }

        .btn{

            width:100%;

            height:56px;

            border:none;

            border-radius:14px;

            background:linear-gradient(135deg,#0F4C81,#1D70B8);

            color:white;

            font-size:16px;

            font-weight:700;

            cursor:pointer;

            transition:.3s;

            margin-top:10px;

        }

        .btn:hover{

            transform:translateY(-2px);

            box-shadow:0 15px 30px rgba(15,76,129,.25);

        }

        .back{

            text-align:center;

            margin-top:25px;

        }

        .back a{

            text-decoration:none;

            color:#0F4C81;

            font-weight:600;

        }

        .alert{

            background:#dcfce7;

            color:#166534;

            padding:15px;

            border-radius:10px;

            margin-bottom:20px;

        }

        .error{

            color:red;

            font-size:13px;

            margin-top:6px;

        }

        @media(max-width:992px){

            .left{
                display:none;
            }

            .right{

                width:100%;

            }

        }

    </style>

</head>

<body>

<div class="page">

    <div class="left">

        <div class="hero">

            <h1>

                Forgot Your Password?

            </h1>

            <p>

                Don't worry. Enter your registered email address and we'll send you a secure password reset link so you can access your Inventory Management account again.

            </p>

        </div>

    </div>

    <div class="right">

        <div class="card">

            <div class="logo">

                <i class="fas fa-key"></i>

            </div>

            <h2>

                Reset Password

            </h2>

            <div class="subtitle">

                Receive a password reset link in your email.

            </div>

            @if(session('status'))

                <div class="alert">

                    {{ session('status') }}

                </div>

            @endif

            <form method="POST"
                  action="{{ route('password.email') }}">

                @csrf

                <div class="form-group">

                    <label>Email Address</label>

                    <div class="input-group">

                        <div class="icon">

                            <i class="fas fa-envelope"></i>

                        </div>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Enter your email"
                            required>

                    </div>

                    @error('email')

                        <div class="error">

                            {{ $message }}

                        </div>

                    @enderror

                </div>

                <button class="btn">

                    <i class="fas fa-paper-plane"></i>

                    Send Password Reset Link

                </button>

            </form>

            <div class="back">

                <a href="{{ route('login') }}">

                    <i class="fas fa-arrow-left"></i>

                    Back to Login

                </a>

            </div>

        </div>

    </div>

</div>

</body>

</html>