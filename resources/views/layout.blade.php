<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>drazmat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="/css/style.css" />
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <p>DR. <span>AZMAT</span></p>
        </div>
        <div class="pages">
            <ul>
                <li>
                    <a href="{{ route('Home') }}">HOME</a>
                    <a href="{{ route('Services') }}">SERVICES</a>
                    <a href="{{ route('Blogs') }}">BLOGS</a>
                    <a href="{{ route('About') }}">ABOUT</a>
                    <a href="{{ route('Contact') }}">CONTACT</a>
                </li>
            </ul>
        </div>
        <div id="bars-icon"><i class="fa fa-bars"></i></div>


        {{-- <div s="fa-solid fa-bars bars-icon"></i>class="authentication">
            <p>SIGN IN</p>
        </div> --}}
    </nav>
    <div>
        @yield('content')
    </div>
    <footer class="footer">
        <p>All rights reserved</p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script src="script.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 120,
        duration: 700,
    });
</script>

</html>
