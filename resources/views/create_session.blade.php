<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Session</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <header>
        <h1>Session Scheduler</h1>
    </header>

    <nav class="navbar">
        <a href="{{ route('events.index') }}">Events</a>
        <a href="{{ route('sessions.index') }}">Sessions</a>
        <a href="{{ route('speakers.index') }}">Speakers</a>
        <a href="{{ route('schedule.index') }}">Schedule</a>
        <a href="{{ route('logout') }}">Logout</a>
    </nav>

    <main id="content">
        <h2>Add New Session</h2>
        <form action="{{ route('sessions.store') }}" method="POST">
            @csrf
            <label for="event_id">Event:</label>
            <select id="event_id" name="event_id" required>
                @foreach($events as $event)
                    <option value="{{ $event->id }}">{{ $event->title }}</option>
                @endforeach
            </select>

            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>

            <label for="start_time">Start Time:</label>
            <input type="time" id="start_time" name="start_time" value="{{ old('start_time') }}" required>

            <label for="end_time">End Time:</label>
            <input type="time" id="end_time" name="end_time" value="{{ old('end_time') }}" required>

            <button type="submit">Save Session</button>
        </form>
    </main>
</body>
</html>
