@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-center mb-6">{{ __('Register') }}</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium">{{ __('Name') }}</label>
                <input id="name" type="text" 
                    class="w-full mt-1 p-2 border rounded-md @error('name') border-red-500 @enderror" 
                    name="name" value="{{ old('name') }}" required autofocus>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium">{{ __('Email Address') }}</label>
                <input id="email" type="email" 
                    class="w-full mt-1 p-2 border rounded-md @error('email') border-red-500 @enderror" 
                    name="email" value="{{ old('email') }}" required>
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-medium">{{ __('Password') }}</label>
                <input id="password" type="password" 
                    class="w-full mt-1 p-2 border rounded-md @error('password') border-red-500 @enderror" 
                    name="password" required>
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password-confirm" class="block text-gray-700 font-medium">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="w-full mt-1 p-2 border rounded-md" 
                    name="password_confirmation" required>
            </div>

            <div class="flex justify-center">
                <button type="submit" 
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
