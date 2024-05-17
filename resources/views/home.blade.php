<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <section class="offer">
        <h2>OUR DELICIOUS OFFER</h2>
        <div class="offer-grid">
            <div class="offer-item">
                <h3>Types of Coffee</h3>
                <p>Various types of coffee beans from around the world.</p>
            </div>
            <div class="offer-item">
                <h3>Bean Varieties</h3>
                <p>Explore different varieties of coffee beans.</p>
            </div>
            <div class="offer-item">
                <h3>Coffee & Pastry</h3>
                <p>Perfect pairings of coffee and pastries.</p>
            </div>
            <div class="offer-item">
                <h3>Coffee To-Go</h3>
                <p>Enjoy your coffee on the go.</p>
            </div>
        </div>
    </section>

    <section class="herald">
        <h2>THE COFFEE HERALD</h2>
        <div class="herald-grid">
            <div class="herald-item">
                <img src="prep-techniques.jpg" alt="Prep Techniques">
                <h3>Prep Techniques</h3>
                <p>Learn various coffee preparation techniques.</p>
            </div>
            <div class="herald-item">
                <img src="french-press.jpg" alt="French Press">
                <h3>French Press</h3>
                <p>Master the art of French Press coffee.</p>
            </div>
            <div class="herald-item">
                <img src="turkish-brew.jpg" alt="Turkish Brew">
                <h3>Turkish Brew</h3>
                <p>Discover the traditional Turkish brewing method.</p>
            </div>
        </div>
    </section>

    <section class="stats">
        <div class="stat-item">
            <h3>250</h3>
            <p>Varieties of Coffee</p>
        </div>
        <div class="stat-item">
            <h3>123</h3>
            <p>Hours of Tasting</p>
        </div>
        <div class="stat-item">
            <h3>321</h3>
            <p>Coffee Markets</p>
        </div>
        <div class="stat-item">
            <h3>220</h3>
            <p>Coffee Brands</p>
        </div>
    </section>

    <section class="shop">
        <h2>ONLINE COFFEE SHOP</h2>
        <div class="shop-grid">
            <div class="shop-item">
                <img src="ethiopia.jpg" alt="Ethiopia Coffee">
                <h3>Ethiopia Coffee</h3>
            </div>
            <div class="shop-item">
                <img src="kenya.jpg" alt="Kenya Coffee">
                <h3>Kenya Coffee</h3>
            </div>
            <div class="shop-item">
                <img src="colombia.jpg" alt="Colombia Coffee">
                <h3>Colombia Coffee</h3>
            </div>
            <div class="shop-item">
                <img src="guatemala.jpg" alt="Guatemala Coffee">
                <h3>Guatemala Coffee</h3>
            </div>
        </div>
    </section>

    <section class="gallery">
        <h2>OUR SWEET GALLERY</h2>
        <div class="gallery-grid">
            <div class="gallery-item"><img src="" alt="Gallery 1"></div>
            <div class="gallery-item"><img src="" alt="Gallery 2"></div>
            <div class="gallery-item"><img src="" alt="Gallery 3"></div>
            <div class="gallery-item"><img src="" alt="Gallery 4"></div>
            <div class="gallery-item"><img src="" alt="Gallery 5"></div>
            <div class="gallery-item"><img src="" alt="Gallery 6"></div>
            <div class="gallery-item"><img src="" alt="Gallery 7"></div>
            <div class="gallery-item"><img src="" alt="Gallery 8"></div>
        </div>
    </section>
@endsection
