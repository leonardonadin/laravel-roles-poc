@extends('layouts.admin')

@section('content')
    <div class="container mx-auto py-5">
        <h1 class="">Dashboard do Admin</h1>
        <a href="{{ route('admin.product.index') }}" class="bg-blue-900 text-white px-4 py-3 rounded-full w-full">Produtos</a>
    </div>
@endsection
