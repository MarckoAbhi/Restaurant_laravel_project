@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h1>Here is our menu bar</h1>
    </div>
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-bold">
                    Our Menu
                </h2>
                <p class="mt-4 text-gray-600">
                    Explore our diverse and delicious menu
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img alt="A gourmet dish with a beautifully arranged presentation" class="w-full h-48 object-cover"
                        src="{{ asset('images/food3.png') }}" />
                    <div class="p-4">
                        <h3 class="text-xl font-bold">
                            Donute
                        </h3>
                        <p class="mt-2 text-gray-600">
                            A sweet snack.
                        </p>
                        <p class="mt-4 text-red-500 font-bold">
                            $10.00
                        </p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img alt="A gourmet dish with a beautifully arranged presentation" class="w-full h-48 object-cover"
                        src="{{ asset('images/food1.png') }}" />
                    <div class="p-4">
                        <h3 class="text-xl font-bold">
                            Sushi
                        </h3>
                        <p class="mt-2 text-gray-600">
                            A japanese food item.
                        </p>
                        <p class="mt-4 text-red-500 font-bold">
                            $12.00
                        </p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img alt="A gourmet dish with a beautifully arranged presentation" class="w-full h-48 object-cover"
                        src="{{ asset('images/food2.png') }}" />
                    <div class="p-4">
                        <h3 class="text-xl font-bold">
                            Lobster
                        </h3>
                        <p class="mt-2 text-gray-600">
                            A seafood dish.
                        </p>
                        <p class="mt-4 text-red-500 font-bold">
                            $18.00
                        </p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img alt="A gourmet dish with a beautifully arranged presentation" class="w-full h-48 object-cover"
                        src="{{ asset('images/burger.png') }}" />
                    <div class="p-4">
                        <h3 class="text-xl font-bold">
                            Burger
                        </h3>
                        <p class="mt-2 text-gray-600">
                            A fast food item.
                        </p>
                        <p class="mt-4 text-red-500 font-bold">
                            $10.00
                        </p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img alt="A gourmet dish with a beautifully arranged presentation" class="w-full h-48 object-cover"
                        src="{{ asset('images/Pestry.png') }}" />
                    <div class="p-4">
                        <h3 class="text-xl font-bold">
                            Pestry
                        </h3>
                        <p class="mt-2 text-gray-600">
                            A Cake item.
                        </p>
                        <p class="mt-4 text-red-500 font-bold">
                            $8.00
                        </p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img alt="A gourmet dish with a beautifully arranged presentation" class="w-full h-48 object-cover"
                        src="{{ asset('images/Pasta.png') }}" />
                    <div class="p-4">
                        <h3 class="text-xl font-bold">
                            Pasta
                        </h3>
                        <p class="mt-2 text-gray-600">
                            A Chineas dish.
                        </p>
                        <p class="mt-4 text-red-500 font-bold">
                            $10.00
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection