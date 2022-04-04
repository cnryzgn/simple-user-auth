<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Auth</title>
</head>
<body>
    <ul class="nav shadow-sm p-2 bg-dark justify-content-end">
        <li class="nav-item">
            <a class="nav-link text-light" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>

        @guest
            <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="{{ route('login.index') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="{{ route('register.index') }}">Register</a>
            </li>
        @endguest

        @auth
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn nav-link text-light">Logout</button>
                </form>
            </li>                    
        @endauth
        
    </ul>

    @yield('content')

</body>
</html>