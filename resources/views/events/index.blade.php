@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Events</h1>

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Create New Event Button -->
    <a href="{{ route('events.create') }}" class="btn btn-primary mb-3">Create Event</a>

    <!-- Events Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Club</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->club->name }}</td> <!-- Display club name -->
                    <td>{{ $event->start_time }}</td>
                    <td>{{ $event->end_time }}</td>
                    <td>
                        <a href="{{ route('events.show', $event) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('events.edit', $event) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('events.destroy', $event) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <!-- {{ $events->links() }} -->
</div>
@endsection
