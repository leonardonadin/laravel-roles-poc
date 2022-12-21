@extends('layouts.base')

@section('base')
    <div class="bg-blue-500">
        <div class="container p-5 mx-auto">
            <div class="flex">
                <div class="flex-1">
                    <a href="{{ route('admin.dashboard') }}" class="text-white text-2xl font-bold">POC - Admin</a>
                </div>
                <div class="flex-1">
                    <div class="flex justify-end gap-x-3">
                        <a href="{{ route('admin.dashboard') }}" class="text-white text-xl font-bold">Dashboard</a>
                        <a href="{{ route('admin.product.index') }}" class="text-white text-xl font-bold">Products</a>
                        @auth
                            <form action="{{ route('admin.logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="text-white text-xl font-bold">Logout</button>
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
@endsection
