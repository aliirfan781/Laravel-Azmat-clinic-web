<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>drazmatalikhan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <section class="admin">
        <header>

            <div class="top">
                <h2>ADMIN DASHBOARD</h2>
            </div>
        </header>
        <div class="main">
            <aside class="aside">
                <ul>
                    <li>
                        <a href="{{ route('Admin-Services') }}">SERVICES</a>
                        <a href="{{ route('Admin-Blogs') }}">BLOGS</a>
                        <a href="{{ route('Admin-About') }}">ABOUT</a>
                        <a href="">CONTACT</a>
                        <a href="">SCHEDULE</a>
                    </li>
                </ul>


            </aside>


            <div class="page-section">
                @yield('content')
            </div>
        </div>
    </section>

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
