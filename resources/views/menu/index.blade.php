@extends('layout')

@section('content')
<div
    class="card-header flex justify-between items-center py-4 px-6 bg-gray-100 rounded-t-lg shadow-md sticky top-0 z-10">
    <h1 class="text-2xl font-semibold text-gray-800"><b>Here is our menu bar</b></h1>
    <a href="{{ route('menu.create') }}"
        class="bg-blue-500 text-white px-6 py-2 rounded-lg text-sm font-semibold hover:bg-blue-600 transition duration-300">
        Add New Item
    </a>
</div>

<section class="py-12">
    <div class="container mx-auto px-4">
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-4xl font-bold">Our Menu</h2>
            <p class="mt-4 text-gray-600">Explore our diverse and delicious menu</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($menuItems as $item)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img alt="{{ $item->name }}" class="w-full h-48 object-cover"
                    src="{{ asset('storage/' . $item->image) }}" />
                <div class="p-4">
                    <h3 class="text-xl font-bold">{{ $item->name }}</h3>
                    <p class="mt-2 text-gray-600">{{ $item->description }}</p>
                    <p class="mt-4 text-red-500 font-bold">${{ number_format($item->price, 2) }}</p>

                    <div class="flex justify-between mt-4">
                        <!-- Add to Cart Button -->


                        <!-- Delete Button -->
                        <form action="{{ route('menu.destroy', $item->id) }}" method="POST"
                            onsubmit="return confirmDelete(event, '{{ $item->name }}')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-500 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition duration-300">
                                Delete Item
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script>
function confirmDelete(event, itemName) {
    if (!confirm('Are you sure you want to delete "' + itemName + '"?')) {
        event.preventDefault();
    }
}
</script>
@endsection