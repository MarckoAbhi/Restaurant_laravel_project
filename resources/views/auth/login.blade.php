@extends('layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="text-center mb-8">
        <h2 class="text-3xl font-bold">Login</h2>
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

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
            <input type="email" name="email" id="email" class="w-full px-4 py-2 mt-2 border rounded-md" required
                value="{{ old('email') }}" />
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password" class="w-full px-4 py-2 mt-2 border rounded-md"
                required />
        </div>

        <div class="mb-4 flex justify-between items-center">
            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2" />
                <label for="remember" class="text-sm">Remember Me</label>
            </div>
            <a href="{{ route('password.request') }}" class="text-sm text-blue-500 hover:underline">Forgot Password?</a>
        </div>

        <div class="mt-6">
            <button type="submit"
                class="w-full bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-700">Login</button>
        </div>

        <div class="mt-4 text-center">
            <p class="text-sm">Don't have an account? <a href="{{ route('register') }}"
                    class="text-blue-500 hover:underline">Sign up here</a></p>
        </div>
    </form>
</div>
@endsection