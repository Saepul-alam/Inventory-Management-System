<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>
        PT Asietex Sinar Indopratama
    </title>

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Bootstrap Icons -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css"
          rel="stylesheet">

    <!-- Font -->

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- AOS -->

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css"
          rel="stylesheet">

    <style>

        *{
            font-family:'Poppins',sans-serif;
        }

        html{
            scroll-behavior:smooth;
        }

        body{
            background:#f5f7fa;
            overflow-x:hidden;
        }

        .navbar{

            transition:.4s;

            background:rgba(0,0,0,.55);

            backdrop-filter:blur(10px);

        }

        .navbar-brand{

            font-weight:700;

            letter-spacing:1px;

            color:#fff!important;

        }

        .nav-link{

            color:#fff!important;

            font-weight:500;

            margin-left:15px;

        }

        .btn-login{

            border-radius:30px;

            padding:10px 25px;

            font-weight:600;

        }

        /* HERO */

        .hero{

            min-height:100vh;

            background:
            linear-gradient(rgba(0,0,0,.65),rgba(0,0,0,.75)),
            url('https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=1600');

            background-size:cover;

            background-position:center;

            display:flex;

            align-items:center;

            color:white;

        }

        .hero h5{

            letter-spacing:4px;

            color:#ffc107;

            font-weight:600;

        }

        .hero h1{

            font-size:64px;

            font-weight:800;

            margin-top:20px;

        }

        .hero p{

            font-size:18px;

            margin-top:25px;

            line-height:1.8;

            color:#ddd;

        }

        .btn-main{

            margin-top:35px;

            border-radius:50px;

            padding:15px 35px;

            font-weight:600;

        }

        .section-title{

            font-weight:700;

            margin-bottom:20px;

            color:#0f4c81;

        }

        .section-subtitle{

            color:#777;

            margin-bottom:50px;

        }

        section{

            padding:90px 0;

        }

        .about-image{

            border-radius:20px;

            overflow:hidden;

            box-shadow:0 20px 45px rgba(0,0,0,.15);

        }

        .about-image img{

            width:100%;

            display:block;

        }

        .about-text{

            font-size:17px;

            line-height:1.9;

            color:#555;

        }

        .about-highlight{

            margin-top:30px;

            display:flex;

            gap:20px;

        }

        .about-box{

            background:#fff;

            border-radius:15px;

            text-align:center;

            flex:1;

            padding:25px;

            box-shadow:0 15px 35px rgba(0,0,0,.08);

        }

        .about-box h3{

            color:#0f4c81;

            font-weight:700;

        }

        .about-box small{

            color:#666;

        }

    </style>

</head>

<body>

<!-- ========================= -->

<!-- NAVBAR -->

<!-- ========================= -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">

    <div class="container">

        <a class="navbar-brand"
           href="#">

            ASIETEX

        </a>

        <button class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#menu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse"
             id="menu">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">

                    <a class="nav-link"
                       href="#home">

                        Home

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link"
                       href="#about">

                        About Us

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link"
                       href="#products">

                        Products

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link"
                       href="#career">

                        Career

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link"
                       href="#contact">

                        Contact

                    </a>

                </li>

                <!-- <li class="nav-item ms-lg-3">

                    <a href="{{ route('login') }}"
                       class="btn btn-warning btn-login">

                        <i class="bi bi-box-arrow-in-right"></i>

                        Login

                    </a>

                </li> -->

            </ul>

        </div>

    </div>

</nav>

<!-- ========================= -->

<!-- HERO -->

<!-- ========================= -->

<section class="hero"
         id="home">

    <div class="container">

        <div class="row">

            <div class="col-lg-7"
                 data-aos="fade-right">

                <h5>

                    WELCOME TO OUR NEW WORLD

                </h5>

                <h1>

                    Textile & Clothing Company

                </h1>

                <p>

                    PT Asietex Sinar Indopratama is an integrated textile company
                    specializing in spinning, twisting, knitting, weaving,
                    dyeing, yarn dyeing, printing, finishing, and garment
                    manufacturing with global quality standards.

                </p>

                <a href="#about"
                   class="btn btn-warning btn-main">

                    Learn More

                </a>

                <a href="{{ route('login') }}"
                   class="btn btn-outline-light btn-main ms-2">

                    Login System

                </a>

            </div>

        </div>

    </div>

</section>

<!-- ========================= -->

<!-- ABOUT -->

<!-- ========================= -->

<section id="about">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6"
                 data-aos="fade-right">

                <div class="about-image">

                    <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?q=80&w=1200">

                </div>

            </div>

            <div class="col-lg-6"
                 data-aos="fade-left">

                <h2 class="section-title">

                    ABOUT PT ASIETEX SINAR INDOPRATAMA

                </h2>

                <p class="about-text">

                    Asietex is an integrated textile company engaged in
                    manufacturing textile products from yarn to fabrics.

                    Approximately 85% of production comes from cotton and rayon
                    fabrics, while the remainder comes from polyester.

                </p>

                <p class="about-text">

                    Supported by sophisticated Asian and European machinery,
                    skilled professionals, and continuous innovation,
                    Asietex consistently delivers high-quality textile
                    products to meet the demands of global markets.

                </p>

                <div class="about-highlight">

                    <div class="about-box">

                        <h3>

                            85%

                        </h3>

                        <small>

                            Cotton & Rayon

                        </small>

                    </div>

                    <div class="about-box">

                        <h3>

                            Global

                        </h3>

                        <small>

                            Market

                        </small>

                    </div>

                    <div class="about-box">

                        <h3>

                            Quality

                        </h3>

                        <small>

                            Guaranteed

                        </small>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ===================================================== -->
<!-- VISION MISSION MOTTO -->
<!-- ===================================================== -->

<section class="bg-white">

    <div class="container">

        <div class="text-center mb-5"
             data-aos="fade-up">

            <h2 class="section-title">
                Vision, Mission & Motto
            </h2>

            <p class="section-subtitle">
                Building the Future of Textile Industry
            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-4"
                 data-aos="zoom-in">

                <div class="card border-0 shadow-lg h-100 rounded-4">

                    <div class="card-body text-center p-5">

                        <div class="display-4 text-primary mb-4">

                            <i class="bi bi-eye-fill"></i>

                        </div>

                        <h3 class="fw-bold mb-4">

                            Vision

                        </h3>

                        <p class="text-muted">

                            To become the innovative partner and delivering
                            one stop shopping for a range of textile products.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-4"
                 data-aos="zoom-in"
                 data-aos-delay="200">

                <div class="card border-0 shadow-lg h-100 rounded-4">

                    <div class="card-body text-center p-5">

                        <div class="display-4 text-success mb-4">

                            <i class="bi bi-bullseye"></i>

                        </div>

                        <h3 class="fw-bold mb-4">

                            Mission

                        </h3>

                        <p class="text-muted">

                            To combine technology, innovation,
                            experience, skills and responsibility
                            to ensure customer satisfaction.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-4"
                 data-aos="zoom-in"
                 data-aos-delay="400">

                <div class="card border-0 shadow-lg h-100 rounded-4">

                    <div class="card-body text-center p-5">

                        <div class="display-4 text-warning mb-4">

                            <i class="bi bi-award-fill"></i>

                        </div>

                        <h3 class="fw-bold mb-4">

                            Motto

                        </h3>

                        <p class="text-muted">

                            Discipline,
                            Accurate and
                            Effective.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ===================================================== -->
<!-- BUSINESS PROCESS -->
<!-- ===================================================== -->

<section id="products">

<div class="container">

<div class="text-center mb-5"
     data-aos="fade-up">

<h2 class="section-title">

Company Business Process

</h2>

<p class="section-subtitle">

Integrated Textile Manufacturing

</p>

</div>

<div class="row g-4">

@php

$services=[

['Spinning','bi-disc-fill'],

['Twisting','bi-arrow-repeat'],

['Knitting','bi-grid-3x3-gap-fill'],

['Weaving','bi-columns-gap'],

['Dyeing','bi-droplet-fill'],

['Yarn Dyeing','bi-palette-fill'],

['Printing','bi-printer-fill'],

['Finishing','bi-stars'],

['Garment','bi-bag-fill']

];

@endphp

@foreach($services as $item)

<div class="col-lg-4 col-md-6"
     data-aos="fade-up">

<div class="card border-0 shadow h-100 rounded-4 service-card">

<div class="card-body text-center p-5">

<div class="display-3 text-primary mb-4">

<i class="bi {{ $item[1] }}"></i>

</div>

<h4 class="fw-bold">

{{ $item[0] }}

</h4>

<p class="text-muted mt-3">

Professional textile manufacturing with
modern machinery and international
quality standards.

</p>

</div>

</div>

</div>

@endforeach

</div>

</div>

</section>

<!-- ===================================================== -->
<!-- WHY CHOOSE US -->
<!-- ===================================================== -->

<section class="bg-light">

<div class="container">

<div class="text-center mb-5"
     data-aos="fade-up">

<h2 class="section-title">

Why Choose Us

</h2>

<p class="section-subtitle">

Reasons why customers trust Asietex

</p>

</div>

<div class="row g-4">

<div class="col-lg-3"
     data-aos="flip-left">

<div class="card border-0 shadow text-center h-100 rounded-4">

<div class="card-body p-4">

<div class="display-4 text-primary mb-3">

<i class="bi bi-gear-fill"></i>

</div>

<h5 class="fw-bold">

Modern Technology

</h5>

<p class="text-muted">

Combination of Asian &
European machinery.

</p>

</div>

</div>

</div>

<div class="col-lg-3"
     data-aos="flip-left"
     data-aos-delay="150">

<div class="card border-0 shadow text-center h-100 rounded-4">

<div class="card-body p-4">

<div class="display-4 text-success mb-3">

<i class="bi bi-people-fill"></i>

</div>

<h5 class="fw-bold">

Professional Team

</h5>

<p class="text-muted">

Experienced workforce
with continuous training.

</p>

</div>

</div>

</div>

<div class="col-lg-3"
     data-aos="flip-left"
     data-aos-delay="300">

<div class="card border-0 shadow text-center h-100 rounded-4">

<div class="card-body p-4">

<div class="display-4 text-warning mb-3">

<i class="bi bi-globe2"></i>

</div>

<h5 class="fw-bold">

Global Market

</h5>

<p class="text-muted">

Products delivered
worldwide.

</p>

</div>

</div>

</div>

<div class="col-lg-3"
     data-aos="flip-left"
     data-aos-delay="450">

<div class="card border-0 shadow text-center h-100 rounded-4">

<div class="card-body p-4">

<div class="display-4 text-danger mb-3">

<i class="bi bi-patch-check-fill"></i>

</div>

<h5 class="fw-bold">

Premium Quality

</h5>

<p class="text-muted">

International quality
assurance.

</p>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- ===================================================== -->
<!-- COMPANY STATISTICS -->
<!-- ===================================================== -->

<section>

<div class="container">

<div class="row text-center g-4">

<div class="col-lg-3"
     data-aos="zoom-in">

<div class="shadow rounded-4 p-5 bg-primary text-white">

<h1 class="fw-bold">

30+

</h1>

<p>

Years Experience

</p>

</div>

</div>

<div class="col-lg-3"
     data-aos="zoom-in"
     data-aos-delay="150">

<div class="shadow rounded-4 p-5 bg-success text-white">

<h1 class="fw-bold">

9

</h1>

<p>

Business Divisions

</p>

</div>

</div>

<div class="col-lg-3"
     data-aos="zoom-in"
     data-aos-delay="300">

<div class="shadow rounded-4 p-5 bg-warning text-dark">

<h1 class="fw-bold">

85%

</h1>

<p>

Cotton & Rayon

</p>

</div>

</div>

<div class="col-lg-3"
     data-aos="zoom-in"
     data-aos-delay="450">

<div class="shadow rounded-4 p-5 bg-danger text-white">

<h1 class="fw-bold">

100+

</h1>

<p>

Global Partners

</p>

</div>

</div>

</div>

</div>

</section>

<!-- ===================================================== -->
<!-- COMPANY GALLERY -->
<!-- ===================================================== -->

<section class="bg-white">

    <div class="container">

        <div class="text-center mb-5" data-aos="fade-up">

            <h2 class="section-title">
                Company Gallery
            </h2>

            <p class="section-subtitle">
                Our Production & Manufacturing Activities
            </p>

        </div>

        <div class="row g-4">

            @php
            $gallery = [
                'https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?w=900',
                'https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=900',
                'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=900',
                'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=900',
                'https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=900',
                'https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=900'
            ];
            @endphp

            @foreach($gallery as $image)

            <div class="col-lg-4 col-md-6" data-aos="zoom-in">

                <div class="gallery-card">

                    <img src="{{ $image }}" class="img-fluid">

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

<!-- ===================================================== -->
<!-- NEWS -->
<!-- ===================================================== -->

<section class="bg-light">

<div class="container">

<div class="text-center mb-5">

<h2 class="section-title">

Company News & Performance

</h2>

<p class="section-subtitle">

Latest Information

</p>

</div>

<div class="row g-4">

@for($i=1;$i<=3;$i++)

<div class="col-lg-4">

<div class="card border-0 shadow h-100 rounded-4">

<img src="https://picsum.photos/600/350?random={{$i}}"
     class="card-img-top">

<div class="card-body">

<span class="badge bg-primary">

Company News

</span>

<h4 class="mt-3 fw-bold">

Continuous Innovation in Textile Industry

</h4>

<p class="text-muted">

Asietex continues to improve production quality,
manufacturing efficiency and global competitiveness.

</p>

</div>

</div>

</div>

@endfor

</div>

</div>

</section>

<!-- ===================================================== -->
<!-- CAREER -->
<!-- ===================================================== -->

<section id="career">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<h2 class="section-title">

Join Our Team

</h2>

<p class="about-text">

Become part of PT Asietex Sinar Indopratama.

We are always looking for talented,
creative and passionate people.

</p>

<ul class="list-unstyled">

<li class="mb-3">

<i class="bi bi-check-circle-fill text-success"></i>

Professional Environment

</li>

<li class="mb-3">

<i class="bi bi-check-circle-fill text-success"></i>

Career Development

</li>

<li class="mb-3">

<i class="bi bi-check-circle-fill text-success"></i>

Competitive Salary

</li>

<li class="mb-3">

<i class="bi bi-check-circle-fill text-success"></i>

Training Program

</li>

</ul>

<a href="#contact"
class="btn btn-primary btn-lg rounded-pill">

Apply Now

</a>

</div>

<div class="col-lg-6 text-center">

<img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=900"
class="img-fluid rounded-4 shadow">

</div>

</div>

</div>

</section>

<!-- ===================================================== -->
<!-- CONTACT -->
<!-- ===================================================== -->

<section id="contact" class="bg-dark text-white">

<div class="container">

<div class="text-center mb-5">

<h2 class="fw-bold">

Contact Us

</h2>

<p>

PT Asietex Sinar Indopratama

</p>

</div>

<div class="row">

<div class="col-lg-6">

<h4>

Head Office

</h4>

<p>

<i class="bi bi-geo-alt-fill"></i>

Jl. Cideng Timur No.36,
Petojo Utara,
Gambir,
Jakarta Pusat 10130,
Indonesia

</p>

<p>

<i class="bi bi-telephone-fill"></i>

+62 21 6386 3999

</p>

<p>

<i class="bi bi-envelope-fill"></i>

contact.us@asietex.co.id

</p>

<hr>

<h4>

Retail Store

</h4>

<p>

Tanah Abang Bukit F/10,
Jakarta Pusat

</p>

<p>

+62 21 3190 9731

</p>

</div>

<div class="col-lg-6">

<div class="ratio ratio-16x9 rounded overflow-hidden">

<iframe
src="https://maps.google.com/maps?q=Jakarta&t=&z=13&ie=UTF8&iwloc=&output=embed"
allowfullscreen>

</iframe>

</div>

</div>

</div>

</div>

</section>

<!-- ===================================================== -->
<!-- FOOTER -->
<!-- ===================================================== -->

<footer class="bg-black text-center text-white py-4">

<div class="container">

<h4 class="fw-bold mb-3">

PT Asietex Sinar Indopratama

</h4>

<p>

Spinning • Twisting • Knitting • Weaving • Dyeing •
Yarn Dyeing • Printing • Finishing • Garment

</p>

<hr>

<p class="mb-0">

© 2026 PT Asietex Sinar Indopratama.
All Rights Reserved.

</p>

</div>

</footer>

<!-- BACK TO TOP -->

<a href="#home"
class="btn btn-primary rounded-circle shadow"
id="topButton">

<i class="bi bi-arrow-up"></i>

</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>

AOS.init({

duration:1000,

once:true

});

window.addEventListener("scroll",function(){

let nav=document.querySelector(".navbar");

if(window.scrollY>100){

nav.style.background="#0f4c81";

}else{

nav.style.background="rgba(0,0,0,.55)";

}

});

</script>