@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Edit Event</h2>

    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Title</label>
            <input type="text" name="title" value="{{ $event->title }}" class="w-full border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Description</label>
            <textarea name="description" class="w-full border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300">{{ $event->description }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Start Time</label>
            <input type="datetime-local" name="start_time" value="{{ $event->start_time }}" class="w-full border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">End Time</label>
            <input type="datetime-local" name="end_time" value="{{ $event->end_time }}" class="w-full border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Club</label>
            <select name="club_id" class="w-full border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300">
                @foreach($clubs as $club)
                    <option value="{{ $club->id }}" {{ $event->club_id == $club->id ? 'selected' : '' }}>{{ $club->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex space-x-2">
            <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Update Event</button>
            <a href="{{ route('events.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">Cancel</a>
        </div>
    </form>
</div>
@endsection
