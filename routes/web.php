<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\EventCokntroller;

use App\Http\Controllers\EventController;

// Route to view a list of all events
Route::get('/events', [EventCokntroller::class, 'index'])->name('events.index');

// Route to show the form for creating a new event
Route::get('/events/create', [EventCokntroller::class, 'create'])->name('events.create');

// Route to store a new event
Route::post('/events', [EventCokntroller::class, 'store'])->name('events.store');

// Route to display a specific event
Route::get('/events/{event}', [EventCokntroller::class, 'show'])->name('events.show');

// Route to show the form for editing an existing event
Route::get('/events/{event}/edit', [EventCokntroller::class, 'edit'])->name('events.edit');

// Route to update a specific event
Route::put('/events/{event}', [EventCokntroller::class, 'update'])->name('events.update');

// Route to delete a specific event
Route::delete('/events/{event}', [EventCokntroller::class, 'destroy'])->name('events.destroy');

