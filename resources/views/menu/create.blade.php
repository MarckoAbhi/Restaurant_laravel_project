@extends('layout')

@section('content')
<div class="card max-w-4xl mx-auto my-8 p-6 bg-white rounded-lg shadow-lg">
    <div class="card-header mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Add a New Menu Item</h1>
    </div>

    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Create a New Menu Item</h2>
                <p class="mt-4 text-gray-600">Fill in the details below to add a new menu item.</p>
            </div>

            <!-- Form to create a new menu item -->
            <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Menu Item Name -->
                    <div class="relative">
                        <label for="name" class="block text-sm font-medium text-gray-700">Menu Item Name</label>
                        <input type="text" name="name" id="name"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500 focus:border-blue-500"
                            required>
                    </div>

                    <!-- Description -->
                    <div class="relative">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <input type="text" name="description" id="description"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition-all"
                            required>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
                    <!-- Price -->
                    <div class="relative">
                        <label for="price" class="block text-sm font-medium text-gray-700">Price ($)</label>
                        <input type="number" name="price" id="price"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition-all"
                            required>
                    </div>

                    <!-- Image -->
                    <div class="relative">
                        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" name="image" id="image"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition-all"
                            accept="image/*" required>
                        <p class="mt-2 text-sm text-gray-500">Choose an image file to represent the menu item</p>
                    </div>
                </div>

                <div class="mt-6">
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="status" id="status"
                        class="mt-1 w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
                        <option value="">Select Status</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div><br>
                <div><a href="{{ route('menu.index') }}"
                        class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-800">Back</a>
                    <button type="submit"
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-800">Submit</button>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection