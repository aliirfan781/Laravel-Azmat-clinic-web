{{-- @extends('layout')
@section('content')
    <div class="appointment-confirmation">
        <h1>Appointment Confirmation</h1>
        <h2>Your appointment has confirmed</h2>
        <div class="card">
            <p><strong>Appointment Number:</strong> <br><span><b>{{ $appointmentNumber }}</b></span></p>
            <p><strong>Name:</strong> {{ $name }}</p>
            <p><strong>Age:</strong> {{ $age }}</p>
            <p><strong>Address:</strong> {{ $address }}</p>
        </div>


    </div>
@endsection --}}
@extends('layout')
@section('content')
    <div>
        <h1>Appointment Confirmation</h1>
        <p><strong>Appointment Number:</strong> {{ $appointmentNumber }}</p>
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Age:</strong> {{ $age }}</p>
        <p><strong>Address:</strong> {{ $address }}</p>
        <p><strong>Appointment Date:</strong> {{ $appointmentDate }}</p>
    </div>
    <div>
        <!-- Add a link to download the confirmation form as a PDF -->
        <a href="{{ route('appointment.downloadConfirmation', ['appointmentNumber' => $appointmentNumber, 'name' => $name, 'age' => $age, 'address' => $address, 'appointmentDate' => $appointmentDate]) }}"
            target="_blank">Download Confirmation</a>
    </div>
@endsection
