@extends('Backend/dashboard')
@section('content')

    <div>
        <h1>Appointments in Queue</h1>
        @if ($upcomingAppointments->isEmpty())
            <p>No upcoming appointments found.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Appointment Number</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Appointment Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($upcomingAppointments as $appointment)
                        <tr>
                            <td>{{ $appointment->appointment_number }}</td>
                            <td>{{ $appointment->name }}</td>
                            <td>{{ $appointment->age }}</td>
                            <td>{{ $appointment->address }}</td>
                            <td>{{ $appointment->appointment_date }}</td>
                            <td>
                                <form action="{{ route('appointment.finish', ['id' => $appointment->id]) }}" method="POST">

                                    @csrf
                                    @method('PUT')
                                    <button type="submit">Done</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <h1>Finished Appointments</h1>
        @if ($finishedAppointments->isEmpty())
            <p>No finished appointments found.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Appointment Number</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Appointment Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($finishedAppointments as $appointment)
                        <tr>
                            <td>{{ $appointment->appointment_number }}</td>
                            <td>{{ $appointment->name }}</td>
                            <td>{{ $appointment->age }}</td>
                            <td>{{ $appointment->address }}</td>
                            <td>{{ $appointment->appointment_date }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

    </div>

@endsection
