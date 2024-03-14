<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Caritas EU | Sign in </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap-4.0.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">





    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/signin.css') }}" rel="stylesheet">
</head>

<body>



    <img class="col-6 mb-4" src="{{ asset('assets/images/Caritas Egypt.png') }}" alt="Caritas Logo" width="600"
        height="800">
    <form class="col-6 form-signin" method="POST" action="{{ route('login') }}">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1>

        <label for="email" class="sr-only">Email address</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required
            autofocus>
        @error('email')
            <span class="text-danger"> {{ $message }}</span>
        @enderror

        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        @error('password')
            <span class="text-danger"> {{ $message }}</span>
        @enderror

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

    <footer>
        <p class="mt-5 mb-3 text-danger text-center ">Caritas Egypt&copy; | People Comes First</p>
    </footer>

</body>

</html>
