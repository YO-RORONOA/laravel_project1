@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Create Event</h2>

    <form action="{{ route('events.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Title</label>
            <input type="text" name="title" class="w-full border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Description</label>
            <textarea name="description" class="w-full border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300"></textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Start Time</label>
            <input type="datetime-local" name="start_time" class="w-full border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">End Time</label>
            <input type="datetime-local" name="end_time" class="w-full border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Club</label>
            <select name="club_id" class="w-full border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300">
                @foreach($clubs as $club)
                    <option value="{{ $club->id }}">{{ $club->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex space-x-2">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Create Event</button>
            <a href="{{ route('events.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">Cancel</a>
        </div>
    </form>
</div>
@endsection
