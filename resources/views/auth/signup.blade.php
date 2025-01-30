@extends('layout')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-md bg-white shadow-lg rounded-lg">
    <div class="text-center mb-8">
        <h2 class="text-3xl font-bold text-blue-600">Sign Up</h2>
        <p class="text-gray-600 mt-2">Create your account to get started</p>
    </div>

    @if ($errors->any())
    <div class="bg-red-500 text-white px-4 py-2 rounded-md mb-4">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-6">
            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
            <input type="text" name="name" id="name"
                class="w-full px-6 py-3 mt-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                required value="{{ old('name') }}" placeholder="Enter your full name" />
        </div>

        <div class="mb-6">
            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
            <input type="email" name="email" id="email"
                class="w-full px-6 py-3 mt-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                required value="{{ old('email') }}" placeholder="Enter your email" />
        </div>

        <div class="mb-6">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password"
                class="w-full px-6 py-3 mt-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                required placeholder="Choose a password" />
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation"
                class="w-full px-6 py-3 mt-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                required placeholder="Confirm your password" />
        </div>

        <div class="mt-6">
            <button type="submit"
                class="w-full bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300">Sign
                Up</button>
        </div>

        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">Already have an account? <a href="{{ url('auth/login') }}"
                    class="text-blue-500 hover:underline">Login here</a></p>
        </div>
    </form>
</div>
@endsection