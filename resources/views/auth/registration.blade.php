<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Caritas EU | New User </title>

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
    <form class="col-6 form-signin" action="{{ route('registration') }}" method="POST">
        @csrf

        <h1 class="h3 mb-3 font-weight-normal">User Registration</h1>
        {{-- ######################### UserName ######################## --}}
        <label for="userName">Full Name</label>
        <input type="text" name="userName" id="userName" class="form-control" placeholder="User Name" required
            autofocus>
        @if ($errors->has('userName'))
            <span class="text-danger">{{ $errors->first('userName') }}</span>
        @endif

        {{-- ######################### Email ######################## --}}
        <label for="Email">Email address</label>
        <input type="email" name="Email" id="Email" class="form-control" placeholder="Email address" required>
        @if ($errors->has('Email'))
            <span class="text-danger">{{ $errors->first('Email') }}</span>
        @endif

        {{-- ######################### Password ######################## --}}
        <label for="inputPassword">Password</label>
        <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password"
            required>
        @if ($errors->has('inputPassword'))
            <span class="text-danger">{{ $errors->first('inputPassword') }}</span>
        @endif
        {{-- ######################### Repeat Password ######################## --}}
        <label for="repPassword">Password</label>
        <input type="password" name="repPassword" id="repPassword" class="form-control" placeholder=" Repeat Password"
            required>

        {{-- ######################### Group ######################## --}}
        <label for="group">Full Name</label>
        <input type="text" name="group" id="group" class="form-control" placeholder="enter Group no" required>
        @if ($errors->has('group'))
            <span class="text-danger">{{ $errors->first('group') }}</span>
        @endif

        <div class="checkbox mb-3">
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Create New User</button>
    </form>

    <footer>
        <p class="mt-5 mb-3 text-danger text-center">Caritas Egypt&copy; | People Comes First</p>
    </footer>

</body>

</html>
