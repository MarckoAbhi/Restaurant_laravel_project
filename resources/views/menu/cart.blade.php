@extends('layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="text-center mb-8">
        <h2 class="text-3xl md:text-4xl font-bold">Your Cart</h2>
    </div>

    @if (session('success'))
    <div class="bg-green-500 text-white px-4 py-2 rounded-md mb-4">
        {{ session('success') }}
    </div>
    @endif

    @if ($cartItems->count() > 0)
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach ($cartItems as $cartItem)
        @if ($cartItem->menu)
        <!-- Ensure menu is not null -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            @if ($cartItem->menu->image)
            <img alt="{{ $cartItem->menu->name }}" class="w-full h-48 object-cover"
                src="{{ asset('storage/' . $cartItem->menu->image) }}" />
            @endif
            <div class="p-4">
                <h3 class="text-xl font-bold">{{ $cartItem->menu->name }}</h3>
                <p class="mt-2 text-gray-600">Price: ${{ number_format($cartItem->menu->price, 2) }}</p>
            </div>
        </div>
        @endif
        @endforeach
    </div>

    <div class="mt-6 flex justify-between items-center">
        <p class="text-xl font-bold">Total Price: ${{ number_format($totalPrice, 2) }}</p>

        <!-- Clear Cart Button -->
        <form action="{{ route('cart.clear') }}" method="POST">
            @csrf
            <button type="submit"
                class="bg-red-500 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition duration-300">
                Clear Cart
            </button>
        </form>
    </div>
    @else
    <p class="text-center text-gray-600">Your cart is empty.</p>
    @endif
</div>
@endsection