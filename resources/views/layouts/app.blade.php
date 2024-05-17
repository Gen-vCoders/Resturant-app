<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fcefee;
        }

        header {
            position: relative;
            background-size: cover;
            background-position: center;
            background-image: url('images/landing-image.jpg')
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 20 15px;
        }

        nav ul li a {
            color: black;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
        }

        .hero {
            position: relative;
            text-align: center;
            color: white;
        }

        .brand-img {
            width: 15%;
            border-radius: 20px;
            margin: 20px 0px 0px 40px;
        }

        .shop-btn {
            margin: 20px 45px 15px 50px;
            border-radius: 20px;
        }

        .header-btn-group {
            position: relative;
            top: 120px;
        }

        .hero-text {
            transform: translate(-50%, -50%);
            margin-top: 157px;
            height: 300px;
            color: black;
            width: 45%;
            position: relative;
            left: 380px;
            font-family: "Poetsen One", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .hero-text h1 {
            font-size: 50px;
            margin: 0;
        }

        .hero-text p {
            position: absolute;
            font-size: 20px;
            left: 0px;
            margin-bottom: 45px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background: #333;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #555;
        }

        section {
            padding: 50px 20px;
            text-align: center;
        }

        .offer-grid,
        .herald-grid,
        .shop-grid,
        .gallery-grid {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .offer-item,
        .herald-item,
        .shop-item,
        .gallery-item {
            width: 200px;
            padding: 20px;
            background: #f4f4f4;
            border-radius: 8px;
            text-align: center;
        }

        .herald-item img,
        .shop-item img,
        .gallery-item img {
            width: 100%;
            border-radius: 8px;
        }

        .stats {
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            gap: 50px;
            padding: 50px 20px;
        }

        .stat-item {
            text-align: center;
        }

        footer {
            background: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .footer-logo img {
            width: 100px;
        }

        .footer-social img {
            width: 20px;
            margin: 0 10px;
        }
    </style>
</head>

<body>
    <header>
        @include('component.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('component.footer')
    </footer>

    <!-- Add your JavaScript links here -->
</body>

</html>
