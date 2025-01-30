@extends('layout')

@section('content')
<!-- Contact Section -->
<section class="py-12 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-4xl font-bold">
                Contact Us
            </h2>
            <p class="mt-4 text-gray-600">
                Get in touch with us for reservations or inquiries
            </p>
        </div>
        <div class="flex flex-col md:flex-row items-center">
            <img alt="A cozy restaurant interior with elegant table settings"
                class="w-full md:w-1/2 h-auto rounded-lg shadow-lg" src="{{ asset('images/restaurant.png') }}" />
            <div class="mt-8 md:mt-0 md:ml-8">
                <form>
                    <div class="mb-4">
                        <label class="block text-gray-700" for="name">
                            Name
                        </label>
                        <input
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500"
                            id="name" type="text" />
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700" for="email">
                            Email
                        </label>
                        <input
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500"
                            id="email" type="email" />
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700" for="message">
                            Message
                        </label>
                        <textarea
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500"
                            id="message"></textarea>
                    </div>
                    <button class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600" type="submit">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection