@extends('layouts.base')

@section('base')
    <div class="bg-blue-500">
        <div class="container p-5 mx-auto">
            <div class="flex">
                <div class="flex-1">
                    <a href="{{ route('home') }}" class="text-white text-2xl font-bold">POC</a>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
@endsection
