@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-5">Create User</h1>

    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div class="mb-4">
            <label class="block">Name:</label>
            <input type="text" name="name" class="border p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label class="block">Email:</label>
            <input type="email" name="email" class="border p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label class="block">Password:</label>
            <input type="password" name="password" class="border p-2 w-full" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
    </form>
</div>
@endsection
