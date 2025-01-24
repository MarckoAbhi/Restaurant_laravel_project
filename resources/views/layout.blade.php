<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&family=Poppins:wght@400;700&display=swap"
        rel="stylesheet">
    <title>Restaurant</title>
    <style>
    * {
        font-family: "Poppins", sans-serif;
    }

    .recipe-card {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .recipe-image {
        width: 50%;
        height: auto;
    }

    .recipe-info {
        width: 60%;
        padding: 20px;
        background-color: #f7f7f7;
        height: 36rem;
        left: 0;
    }

    .recipe-title {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .recipe-description {
        font-size: 16px;
    }

    .carousel-item img {
        width: 60%;
        height: 30rem;
        object-fit: cover;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding-left: 20px;
        padding-right: 20px;
    }

    @media (max-width: 992px) {
        .carousel-item img {
            width: 60%;
            height: 30rem;
        }
    }

    @media (max-width: 768px) {
        .carousel-item img {
            width: 100%;
            height: 30rem;
        }
    }

    #mobile-menu {
        position: absolute;
        top: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.8);
        width: 100%;
        padding: 1rem;
        display: none;
    }

    nav {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
    }

    body {
        padding-top: 80px;
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <!-- Navbar (fixed at top) -->
        <nav class="bg-yellow-400 p-4">
            <div class="container mx-auto flex justify-between items-center">
                <a class="text-white text-2xl font-bold" href="/"
                    style="font-family: 'Leckerli One', serif; font-size: 3rem;">
                    Restaurant
                </a>
                <div class="hidden md:flex space-x-4">
                    <a class="text-purple-600 hover:text-white font-semibold" href="/">Home</a>
                    <a class="text-purple-600 hover:text-white font-semibold" href="{{ url('menu') }}">Menu</a>
                    <a class="text-purple-600 hover:text-white font-semibold" href="{{ url('/about') }}">About</a>
                    <a class="text-purple-600 hover:text-white font-semibold" href="{{ url('menu/cart') }}">Cart</a>
                    <a class="text-purple-600 hover:text-white font-semibold" href="{{ url('/contact') }}">Contact</a>
                    <a class="text-purple-600 hover:text-white font-semibold" href="{{ url('menu/login') }}">Login</a>
                    <a class="text-purple-600 hover:text-white font-semibold" href="{{ url('menu/signup') }}">Sign
                        Up</a>
                </div>
                <div class="md:hidden">
                    <button class="text-gray-300 focus:outline-none" id="menu-btn">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
            <!-- Mobile menu hidden by default -->
            <div class="hidden md:hidden" id="mobile-menu">
                <a class="block text-gray-300 hover:text-white px-2 py-1" href="#">Home</a>
                <a class="block text-gray-300 hover:text-white px-2 py-1" href="{{ url('menu') }}">Menu</a>
                <a class="block text-gray-300 hover:text-white px-2 py-1" href="#">About</a>
                <a class="block text-gray-300 hover:text-white px-2 py-1" href="#">Contact</a>
                <a class="block text-gray-300 hover:text-white px-2 py-1" href="#">Login</a>
                <a class="block text-gray-300 hover:text-white px-2 py-1" href="#">Sign Up</a>
            </div>
        </nav>

        <div class="container-fluid px-4">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="bg-yellow-400 p-4">
            <div class="container mx-auto text-center text-gray-400">
                <p>© 2025 Restaurant. All rights reserved.</p>
            </div>
        </footer>
    </div>

    <!-- Mobile Menu Toggle Script -->
    <script>
    document.getElementById('menu-btn').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden'); // Toggles visibility of the mobile menu
    });
    </script>
</body>

</html>