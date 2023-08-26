{{-- @extends('layout')
@section('content')
    <div class="book-appointment">
        <h1>Book Appointment</h1>
        <form action="{{ route('appointment.book') }}" method="POST">
            @csrf
            <label class="mt-3" for="name">Name:</label>
            <input class="form-control" type="text" name="name" id="name" required>
            <label class="mt-3" for="age">Age:</label>
            <input class="form-control" type="number" name="age" id="age" required>
            <label class="mt-3" for="address">Address:</label>
            <textarea class="form-control" name="address" id="address" rows="4" required></textarea>
            <button class="mt-3 btn btn-success" type="submit">Book Appointment</button>
        </form>

    </div>
@endsection --}}

@extends('layout')
@section('content')
    <div>
        <h1>Book Appointment</h1>
        <form action="{{ route('appointment.store') }}" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" required>
            <label for="address">Address:</label>
            <textarea name="address" id="address" rows="4" required></textarea>

            <label for="appointment_day">Select Appointment Day:</label>
            <select name="appointment_day" id="appointment_day" required>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
            </select>

            <button type="submit">Book Appointment</button>
        </form>
    </div>
@endsection
