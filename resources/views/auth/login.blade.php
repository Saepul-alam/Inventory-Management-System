<x-guest-layout>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background:#f5f7fb;
            overflow:hidden;
        }

        .login-wrapper{
            width:100%;
            min-height:100vh;
            display:flex;
        }

        /* =========================
            LEFT SIDE
        ==========================*/

        .left-side{
            flex:1.2;
            position:relative;
            background:url("https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?auto=format&fit=crop&w=1800&q=80") center center/cover no-repeat;
            display:flex;
            align-items:center;
            justify-content:center;
            overflow:hidden;
        }

        .left-side::before{
            content:"";
            position:absolute;
            inset:0;
            background:linear-gradient(
                135deg,
                rgba(8,40,85,.92),
                rgba(15,76,129,.82)
            );
        }

        .hero-content{
            position:relative;
            z-index:2;
            max-width:650px;
            color:#fff;
            padding:60px;
            animation:fadeLeft .8s ease;
        }

        .hero-content h5{
            font-size:15px;
            text-transform:uppercase;
            letter-spacing:3px;
            color:#FFD166;
            margin-bottom:18px;
        }

        .hero-content h1{
            font-size:52px;
            font-weight:700;
            line-height:1.15;
            margin-bottom:20px;
        }

        .hero-content p{
            font-size:17px;
            line-height:30px;
            opacity:.92;
            margin-bottom:35px;
        }

        .hero-feature{
            display:flex;
            align-items:center;
            margin-bottom:16px;
            font-size:16px;
        }

        .hero-feature i{
            width:42px;
            height:42px;
            border-radius:50%;
            background:rgba(255,255,255,.15);
            display:flex;
            align-items:center;
            justify-content:center;
            margin-right:15px;
            color:#FFD166;
        }

        /* ==========================
            RIGHT SIDE
        ===========================*/

        .right-side{
            width:470px;
            background:#ffffff;
            display:flex;
            align-items:center;
            justify-content:center;
            padding:60px;
        }

        .login-box{
            width:100%;
            max-width:380px;
            animation:fadeRight .8s ease;
        }

        .company-logo{
            width:90px;
            height:90px;
            border-radius:50%;
            background:#0F4C81;
            display:flex;
            align-items:center;
            justify-content:center;
            margin:auto;
            color:white;
            font-size:34px;
            box-shadow:0 15px 35px rgba(0,0,0,.15);
        }

        .login-title{
            text-align:center;
            margin-top:25px;
            margin-bottom:8px;
            font-size:32px;
            font-weight:700;
            color:#183153;
        }

        .login-subtitle{
            text-align:center;
            color:#7b8ca8;
            margin-bottom:45px;
            line-height:26px;
        }

        .form-label{

    display:block;
    margin-bottom:10px;
    font-weight:600;
    color:#183153;

}

.input-group-custom{

    display:flex;
    align-items:center;
    border:1px solid #d8e2ef;
    border-radius:14px;
    overflow:hidden;
    transition:.3s;
    background:#fff;

}

.input-group-custom:focus-within{

    border-color:#0F4C81;
    box-shadow:0 0 0 5px rgba(15,76,129,.10);

}

.input-icon{

    width:58px;
    text-align:center;
    color:#0F4C81;
    font-size:18px;

}

.form-control-custom{

    flex:1;
    border:none;
    outline:none;
    height:56px;
    font-size:15px;
    background:transparent;

}

.login-btn{

    width:100%;
    border:none;
    height:56px;
    border-radius:14px;
    margin-top:20px;
    font-size:17px;
    font-weight:600;
    cursor:pointer;
    color:white;

    background:linear-gradient(
        135deg,
        #0F4C81,
        #1B6CA8
    );

    transition:.35s;

}

.login-btn:hover{

    transform:translateY(-3px);

    box-shadow:0 15px 30px rgba(15,76,129,.30);

}

.remember-area{

    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-top:18px;
    margin-bottom:20px;
    font-size:14px;

}

.remember-label{

    display:flex;
    align-items:center;
    gap:8px;

}

.remember-label input{

    width:17px;
    height:17px;

}

.forgot-link{

    color:#0F4C81;
    text-decoration:none;
    font-weight:600;

}

.forgot-link:hover{

    color:#FFB400;

}

.register-link{

    text-align:center;
    margin-top:30px;
    color:#6c7a89;

}

.register-link a{

    color:#0F4C81;
    text-decoration:none;
    font-weight:700;

}

.register-link a:hover{

    color:#FFB400;

}

        /* ==========================
            ANIMATION
        ===========================*/

        @keyframes fadeLeft{

            from{
                opacity:0;
                transform:translateX(-60px);
            }

            to{
                opacity:1;
                transform:translateX(0);
            }

        }

        @keyframes fadeRight{

            from{
                opacity:0;
                transform:translateX(60px);
            }

            to{
                opacity:1;
                transform:translateX(0);
            }

        }

        /* ==========================
            RESPONSIVE
        ===========================*/

        @media(max-width:992px){

            body{
                overflow:auto;
            }

            .left-side{
                display:none;
            }

            .right-side{
                width:100%;
                min-height:100vh;
            }

        }

    </style>

    <div class="login-wrapper">

        {{-- =============================
            HERO SECTION
        ============================== --}}

        <div class="left-side">

            <div class="hero-content">

                <h5>
                    PT ASIETEX SINAR INDOPRATAMA
                </h5>

                <h1>
                    Welcome to Our New World
                    <br>
                    Textile & Clothing Company
                </h1>

                <p>
                    Asietex is an integrated textile company engaged in the
                    manufacture of textile products from yarn to fabrics with
                    modern technology, innovation and international quality
                    standards.
                </p>

                <div class="hero-feature">
                    <i class="fas fa-industry"></i>
                    <span>Integrated Textile Manufacturing</span>
                </div>

                <div class="hero-feature">
                    <i class="fas fa-shirt"></i>
                    <span>Spinning • Knitting • Weaving • Garment</span>
                </div>

                <div class="hero-feature">
                    <i class="fas fa-award"></i>
                    <span>High Quality Products for Global Market</span>
                </div>

            </div>

        </div>

        {{-- =============================
            LOGIN CARD
        ============================== --}}

        <div class="right-side">

            <div class="login-box">

                <div class="company-logo">
                    <i class="fas fa-building"></i>
                </div>

                <h2 class="login-title">
                    Welcome Back
                </h2>

                <p class="login-subtitle">
                    Sign in to access the Inventory Management System
                    of PT Asietex Sinar Indopratama.
                </p>

                <x-auth-session-status class="mb-4" :status="session('status')" />

<form method="POST" action="{{ route('login') }}">

    @csrf

    <div class="form-group mb-4">

        <label class="form-label">
            Email Address
        </label>

        <div class="input-group-custom">

            <span class="input-icon">
                <i class="fas fa-envelope"></i>
            </span>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
                class="form-control-custom"
                placeholder="Enter your email">

        </div>

        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger"/>

    </div>

    <div class="form-group mb-3">

        <label class="form-label">
            Password
        </label>

        <div class="input-group-custom">

            <span class="input-icon">
                <i class="fas fa-lock"></i>
            </span>

            <input
                type="password"
                name="password"
                required
                class="form-control-custom"
                placeholder="Enter your password">

        </div>

        <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger"/>

    </div>

    <div class="remember-area">

        <label class="remember-label">

            <input
                type="checkbox"
                name="remember">

            <span>
                Remember Me
            </span>

        </label>

        @if (Route::has('password.request'))

            <a
                href="{{ route('password.request') }}"
                class="forgot-link">

                Forgot Password?

            </a>

        @endif

    </div>

    <button class="login-btn">

        <i class="fas fa-right-to-bracket me-2"></i>

        Sign In

    </button>

    @if(Route::has('register'))

    <div class="register-link">

        Don't have an account?

        <a href="{{ route('register') }}">

            Create Account

        </a>

    </div>

    @endif

</form>

            </div>

        </div>

    </div>
</x-guest-layout>