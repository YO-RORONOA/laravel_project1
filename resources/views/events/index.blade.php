@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Events</h1>

    <a href="{{ route('events.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        Create Event
    </a>

    <div class="mt-6 bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-200 text-left text-gray-700 uppercase text-sm">
                    <th class="px-6 py-3">Title</th>
                    <th class="px-6 py-3">Start Time</th>
                    <th class="px-6 py-3">End Time</th>
                    <th class="px-6 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr class="border-b">
                        <td class="px-6 py-4">{{ $event->title }}</td>
                        <td class="px-6 py-4">{{ $event->start_time }}</td>
                        <td class="px-6 py-4">{{ $event->end_time }}</td>
                        <td class="px-6 py-4 flex space-x-2">
                            <a href="{{ route('events.show', $event->id) }}" class="text-blue-500 hover:underline">View</a>
                            <a href="{{ route('events.edit', $event->id) }}" class="text-yellow-500 hover:underline">Edit</a>
                            <form action="{{ route('events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $events->links() }}
    </div>
</div>
@endsection
