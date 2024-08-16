<main>
        <!-- Create Event Section -->
        <section id="create-event">
            <h2>Create Event</h2>
            <form action="{{ route('events.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" required>
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="4" required></textarea>
                </div>

                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" required>
                </div>

                <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" id="location" name="location" required>
                </div>

                <div class="buttons">
                    <button type="submit">Save</button>
                    <button type="button" onclick="window.location.href='/'">Cancel</button>
                </div>
            </form>
        </section>

        <!-- Event List Section -->
        <section id="view-event">
            <h2>Event List</h2>
            <div class="event-list">
                @foreach ($events as $event)
                    <div class="event-item">
                        <h3>{{ $event->title }}</h3>
                        <p>{{ $event->description }}</p>
                        <p>Date: {{ $event->date->format('Y-m-d') }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
