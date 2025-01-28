@extends('layout')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="text-center mb-8">
        <h2 class="text-3xl md:text-4xl font-bold">About Us</h2>
        <p class="mt-4 text-gray-600">Learn more about who we are and what we do</p>
    </div>

    <!-- Mission Section -->
    <div class="bg-white shadow-md rounded-lg p-6 mb-8">
        <h3 class="text-2xl font-semibold text-gray-800">Our Mission</h3>
        <p class="mt-4 text-gray-600">
            We aim to provide the best dining experience, offering fresh, delicious, and high-quality meals
            for our customers. Our goal is to create a place where food brings people together, serving meals
            that not only satisfy hunger but also nourish the soul.
        </p>
    </div>

    <!-- Team Section -->
    <div class="bg-white shadow-md rounded-lg p-6 mb-8">
        <h3 class="text-2xl font-semibold text-gray-800">Meet Our Team</h3>
        <p class="mt-4 text-gray-600">
            Our team consists of passionate chefs, staff, and managers who work tirelessly to ensure
            that every dish is prepared with care, and every customer receives top-notch service.
        </p>

        <!-- Team Members -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-6">
            <div class="text-center">
                <img src="{{ asset('images/chef1.png') }}" alt="Chef 1" class="w-32 h-32 rounded-full mx-auto">
                <h4 class="mt-4 text-xl font-semibold text-gray-800">Chef John Doe</h4>
                <p class="text-gray-600">Head Chef</p>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/chef2.png') }}" alt="Chef 2" class="w-32 h-32 rounded-full mx-auto">
                <h4 class="mt-4 text-xl font-semibold text-gray-800">Chef Jane Smith</h4>
                <p class="text-gray-600">Sous Chef</p>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/chef3.png') }}" alt="Chef 3" class="w-32 h-32 rounded-full mx-auto">
                <h4 class="mt-4 text-xl font-semibold text-gray-800">Mark Williams</h4>
                <p class="text-gray-600">Restaurant Manager</p>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="bg-white shadow-md rounded-lg p-6 mb-8">
        <h3 class="text-2xl font-semibold text-gray-800">Contact Us</h3>
        <p class="mt-4 text-gray-600">Have any questions or want to reach out? Feel free to contact us using the details
            below:</p>

        <div class="mt-6">
            <p class="text-gray-700"><b>Phone:</b> +1 (123) 456-7890</p>
            <p class="text-gray-700"><b>Email:</b> contact@ourrestaurant.com</p>
            <p class="text-gray-700"><b>Address:</b> 123 Food St, Culinary City, FC 12345</p>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="bg-blue-500 text-white rounded-lg py-6 mt-8 text-center">
        <h4 class="text-xl font-semibold">Visit Us or Make a Reservation</h4>
        <p class="mt-4 text-gray-200">Come experience the best of what we offer. We can't wait to serve you!</p>

    </div>
</div>
@endsection