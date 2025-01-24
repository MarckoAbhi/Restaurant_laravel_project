@extends('layout')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="text-center mb-8">
        <h2 class="text-3xl md:text-4xl font-bold">Your Shopping Cart</h2>
        <p class="mt-4 text-gray-600">Review the items in your cart and proceed to checkout</p>
    </div>

    <!-- Cart Table -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <table class="min-w-full text-left">
            <thead>
                <tr class="border-b">
                    <th class="px-4 py-2 font-semibold text-sm text-gray-700">Item</th>
                    <th class="px-4 py-2 font-semibold text-sm text-gray-700">Description</th>
                    <th class="px-4 py-2 font-semibold text-sm text-gray-700">Price</th>
                    <th class="px-4 py-2 font-semibold text-sm text-gray-700">Quantity</th>
                    <th class="px-4 py-2 font-semibold text-sm text-gray-700">Total</th>
                    <th class="px-4 py-2 font-semibold text-sm text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                <tr class="border-b">
                    <td class="px-4 py-2">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                            class="w-16 h-16 object-cover rounded">
                    </td>
                    <td class="px-4 py-2">{{ $item->name }}</td>
                    <td class="px-4 py-2">${{ number_format($item->price, 2) }}</td>
                    <td class="px-4 py-2">
                        <form action="{{ route('cart.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="number" name="quantity" value="{{ $item->quantity }}" min="1"
                                class="w-16 px-2 py-1 border border-gray-300 rounded">
                            <button type="submit"
                                class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-2">Update</button>
                        </form>
                    </td>
                    <td class="px-4 py-2">${{ number_format($item->price * $item->quantity, 2) }}</td>
                    <td class="px-4 py-2">
                        <form action="{{ route('cart.remove', $item->id) }}" method="POST"
                            onsubmit="return confirmDelete(event, '{{ $item->name }}')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg">Remove</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Cart Summary -->
        <div class="mt-6 flex justify-between items-center">
            <div class="font-semibold text-xl">Total: ${{ number_format($totalPrice, 2) }}</div>
            <a href="{{ route('checkout.index') }}"
                class="bg-green-500 text-white px-6 py-2 rounded-lg text-sm font-semibold hover:bg-green-600 transition duration-300">Proceed
                to Checkout</a>
        </div>
    </div>
</div>

<script>
function confirmDelete(event, itemName) {
    if (!confirm('Are you sure you want to remove "' + itemName + '" from your cart?')) {
        event.preventDefault();
    }
}
</script>
@endsection