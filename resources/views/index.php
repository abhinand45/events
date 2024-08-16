<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Page</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

header {
    background-color: #4685e7;
    color: #fff;
    padding: 10px 0;
}

header .container {
    width: 80%;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header h1 {
    margin: 0;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

nav ul li a:hover {
    text-decoration: underline;
}
.navlog{
    margin-left: 10px;
    color: #f4f4f4;
}

.container {
    display: flex;
}

aside {
    width: 20%;
    background-color: #f4f4f4;
    padding: 15px;
    box-shadow: 2px 0 5px rgba(0,0,0,0.1);
}

aside ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

aside ul li {
    margin-bottom: 10px;
}

aside ul li a {
    color: #333;
    text-decoration: none;
}

aside ul li a:hover {
    text-decoration: underline;
}

main {
    width: 80%;
    padding: 20px;
}

section {
    margin-bottom: 40px;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    margin-top: auto;
}
 /* create event */

 section {
    margin-bottom: 40px;
}

form {
    max-width: 600px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
}

label {
    margin-top: 10px;
    font-weight: bold;
}

input[type="text"], input[type="date"], textarea {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    margin-top: 5px;
}

textarea {
    resize: vertical;
}

.buttons {
    margin-top: 20px;
}

button {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    color: #fff;
    background-color: #333;
    cursor: pointer;
    margin-right: 10px;
}

button:hover {
    background-color: #555;
}

button[type="button"] {
    background-color: #ccc;
}

button[type="button"]:hover {
    background-color: #999;
}

/* event list */

.event-list {
    margin-top: 20px;
}

.event-item {
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    margin-bottom: 15px;
    background-color: #f9f9f9;
}

.event-item h3 {
    margin: 0 0 10px;
}



    </style>
    <!-- <link rel="stylesheet" href="{{assets('s')}}"> -->
</head>
<body>
    <header>
        <div class="container">
            <h1>Event Scheduler</h1>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="{{ route('events.create) }}">Event</a></li>
                    <li><a href="#sessions">Sessions</a></li>
                    <li><a href="#speakers">Speakers</a></li>
                    <li><a href="#scheduler">Scheduler</a></li>
                    <div class="navlog"><a href="#logout">Logout</a></div>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <aside class="siderbar" style="background-color: #4685e7; margin:8px;" >
            <ul class="lists" style="color: #f4f4f4;">

                <li><a href="#create-event">Create Event</a></li>
                <li><a href="#view-event">View Event</a></li>
                <li><a href="#create-session">Create Session</a></li>
                <li><a href="#view-session">View Session</a></li>
                <li><a href="#create-speaker">Create Speaker</a></li>
                <li><a href="#view-speaker">View Speaker</a></li>

            </ul>
        </aside>
        <main>

        <section id="create-event">
                <h2>Create Event</h2>
                <form action="{{route('events.store)}}" method="post">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" required>

                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="4" required></textarea>

                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" required>

                    <label for="location">Location:</label>
                    <input type="text" id="location" name="location" required>

                    <div class="buttons">
                        <button type="submit">Save</button>
                        <button type="button" onclick="window.location.href='/'">Cancel</button>
                    </div>
                </form>
            </section>

            <section id="view-event">
                <h2>Event List</h2>
                <div class="event-list">

                    <div class="event-item">
                        <h3>Event Title 1</h3>
                        <p>Description of the event 1.</p>
                        <p>Date: 2024-08-16</p>
                    </div>
                    <div class="event-item">
                        <h3>Event Title 2</h3>
                        <p>Description of the event 2.</p>
                        <p>Date: 2024-09-01</p>
                    </div>

                </div>
            </section>
            <section id="sessions">
                <h2>Event Sessions</h2>
                <main id="content">
        <h2>Add New Session</h2>
        <form action="{{ route('sessions.store') }}" method="POST">
            <label for="event_id">Event:</label>
            <select id="event_id" name="event_id" required>
                    <option value="{{ $event->id }}"></option>

            </select>

            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="" required>

            <label for="start_time">Start Time:</label>
            <input type="time" id="start_time" name="start_time" value="" required>

            <label for="end_time">End Time:</label>
            <input type="time" id="end_time" name="end_time" value="" required>

            <button type="submit">Save Session</button>
        </form>

            </section>
            <section id="speakers">
                <h2>Speakers</h2>
                <p>Information about the speakers and their topics.</p>
            </section>
            <section id="scheduler">
                <h2>Scheduler</h2>
                <p>Interactive scheduler for managing the event schedule.</p>
            </section>
            <section id="create-event">
                <h2>Create Event</h2>
                <p>Form for creating a new event.</p>
            </section>
            <section id="view-event">
                <h2>View Event</h2>
                <p>Details of the existing events.</p>
            </section>
            <section id="create-session">
                <h2>Create Session</h2>
                <p>Form for creating a new session.</p>
            </section>
            <section id="view-session">
                <h2>View Session</h2>
                <p>Details of the existing sessions.</p>
            </section>
            <section id="create-speaker">
                <h2>Create Speaker</h2>
                <p>Form for creating a new speaker profile.</p>
            </section>
            <section id="view-speaker">
                <h2>View Speaker</h2>
                <p>Details of the existing speakers.</p>
            </section>
            <section id="logout">
                <h2>Logout</h2>
                <p>Logout from the event system.</p>
            </section>
        </main>
    </div>
    <footer>
        <p>&copy; 2024 Event Organization. All rights reserved.</p>
    </footer>
</body>
</html>
