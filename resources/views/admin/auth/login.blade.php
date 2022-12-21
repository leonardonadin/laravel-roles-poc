@extends('layouts.base')

@section('base')
    <div class="bg-blue-900">
        <div class="container mx-auto">
            <div class="flex items-center h-screen justify-center">
                <div class="bg-white h-fit p-5 rounded-lg shadow-lg w-1/3">
                    <div class="text-3xl font-bold mb-5 text-center">Admin Login</div>
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf
                        <div class="mb-5">
                            <input type="email" class="form-input px-4 py-3 rounded-full w-full" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                            @error('email')
                                <small id="emailHelp" class="font-bold px-3 text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <input type="password" class="form-input px-4 py-3 rounded-full w-full" id="password" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="bg-blue-900 text-white px-4 py-3 rounded-full w-full">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
