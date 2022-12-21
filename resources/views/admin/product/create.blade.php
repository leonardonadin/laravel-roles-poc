@extends('layouts.admin')

@section('content')
    <div class="container mx-auto py-5">
        <h2 class="text-2xl font-bold">Produtcs</h2>
        <hr>
        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="bg-white p-5 rounded-lg shadow-lg">
                <div class="text-2xl font-bold mb-5 text-center">Product Information</div>
                <div class="mb-5">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-input px-4 py-3 rounded-full w-full" id="name" name="name" placeholder="Name of Product" />
                    @error('name')
                        <small id="emailHelp" class="font-bold px-3 text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-input px-4 py-3 rounded-full w-full" id="description" name="description" placeholder="Description of Product"></textarea>
                    @error('description')
                        <small id="emailHelp" class="font-bold px-3 text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-input px-4 py-3 rounded-full w-full" id="price" name="price" placeholder="Price of Product" />
                    @error('price')
                        <small id="emailHelp" class="font-bold px-3 text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-input px-4 py-3 rounded-full w-full" id="image" name="image" placeholder="Image of Product" />
                    @error('image')
                        <small id="emailHelp" class="font-bold px-3 text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="bg-blue-900 text-white px-4 py-3 rounded-full w-full">Save</button>
            </div>
        </form>
    </div>
@endsection
