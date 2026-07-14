<!DOCTYPE html>
<html>

<head>

</head>

<body>

@include('partials.navbar')

<div class="container-fluid">

<div class="row">

@include('partials.sidebar')

<main>

@yield('content')

</main>

</div>

</div>

@include('partials.footer')

</body>

</html>