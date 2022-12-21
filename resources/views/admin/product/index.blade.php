@extends('layouts.admin')

@section('content')
    <div class="container mx-auto py-5">
        <div class="flex justify-between">
            <div class="px-5">
                <h2 class="text-2xl font-bold">Produtcs</h2>
            </div>
            <div class="w-auto">
                <a href="{{ route('admin.product.create') }}" class="bg-blue-900 text-white px-4 py-3 rounded-full w-full ml-auto">
                    New Products
                </a>
            </div>
        </div>
        <hr>
        <div class="flex flex-wrap">
            @forelse ($products as $product)
                <div class="w-1/3 p-5">
                    <div class="bg-white p-5 rounded-lg shadow-lg">
                        <div class="text-2xl font-bold mb-5 text-center">{{ $product->name }}</div>
                        <div class="text-center">
                            <a href="{{ route('admin.product.edit', $product->id) }}" class="bg-blue-900 text-white px-4 py-3 rounded-full w-full">Editar</a>
                            <a href="{{ route('admin.product.destroy', $product->id) }}" class="bg-red-900 text-white px-4 py-3 rounded-full w-full">Deletar</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="w-full p-5">
                    <div class="bg-white p-5 rounded-lg shadow-lg">
                        <div class="text-2xl font-bold mb-5 text-center">No products found</div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
