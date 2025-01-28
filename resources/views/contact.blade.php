@extends('layout')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="text-center mb-8">
        <h2 class="text-3xl md:text-4xl font-bold">Contact Us</h2>
        <p class="mt-4 text-gray-600">We'd love to hear from you. Get in touch with us through the form below or via our
            contact details!</p>
    </div>

    <!-- Contact Form Section -->
    <div class="bg-white shadow-md rounded-lg p-6 mb-8">
        <h3 class="text-2xl font-semibold text-gray-800">Send Us a Message</h3>
        <form action="#" method="POST" class="mt-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Name Field -->
                <div class="relative">
                    <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
                    <input type="text" name="name" id="name"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition-all"
                        required>
                </div>

                <!-- Email Field -->
                <div class="relative">
                    <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
                    <input type="email" name="email" id="email"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition-all"
                        required>
                </div>
            </div>

            <!-- Message Field -->
            <div class="mt-6">
                <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label>
                <textarea name="message" id="message" rows="4"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition-all"
                    required></textarea>
            </div>

            <div class="mt-6 text-right">
                <button type="submit"
                    class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Send
                    Message</button>
            </div>
        </form>
    </div>

    <!-- Contact Information Section -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <h3 class="text-2xl font-semibold text-gray-800">Other Ways to Reach Us</h3>
        <p class="mt-4 text-gray-600">If you'd prefer to get in touch via phone or email, here are our contact details:
        </p>

        <div class="mt-6">
            <p class="text-gray-700"><b>Phone:</b> +1 (123) 456-7890</p>
            <p class="text-gray-700"><b>Email:</b> contact@ourrestaurant.com</p>
            <p class="text-gray-700"><b>Address:</b> 123 Food St, Culinary City, FC 12345</p>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="bg-blue-500 text-white rounded-lg py-6 mt-8 text-center">
        <h4 class="text-xl font-semibold">We’re Here to Help</h4>
        <p class="mt-4 text-gray-200">Have any questions or inquiries? Don’t hesitate to reach out to us using the form
            or the contact details above!</p>
    </div>


    @endsection