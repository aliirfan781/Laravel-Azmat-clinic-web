<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use PDF;

class AppointmentController extends Controller
{
    public function index()
    {
        $upcomingAppointments = Appointment::where('appointment_date', '>=', Carbon::now())->where('is_finished', false)->get();
        $finishedAppointments = Appointment::where('is_finished', true)->get();

        return view('Backend.index', compact('upcomingAppointments', 'finishedAppointments'));
    }

    public function bookAppointment()
    {
        return view('book');
    }

    // 
    public function storeAppointment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'age' => 'required|integer',
            'address' => 'required|max:1000',
            'appointment_day' => 'required|in:Saturday,Sunday',
        ]);

        // ... (Rest of the validation logic)

        // Logic to generate appointment number with the respective day prefix
        $lastAppointment = Appointment::where('appointment_date', '>=', Carbon::now()->startOfWeek())
            ->where('appointment_date', '<=', Carbon::now()->endOfWeek())
            ->orderByDesc('id')
            ->first();

            

        $dayPrefix = substr($request->appointment_day, 0, 3); // Extract the first three characters of the day
        $appointmentNumber = $dayPrefix . '1';
        if ($lastAppointment && str_starts_with($lastAppointment->appointment_number, $dayPrefix)) {
            $lastNumber = intval(substr($lastAppointment->appointment_number, 3));
            $appointmentNumber = $dayPrefix . ($lastNumber + 1);
        }

        // Calculate the appointment date based on the selected day
        $appointmentDate = ($request->appointment_day === 'Saturday')
            ? Carbon::now()->startOfWeek()->addDays(5)->format('Y-m-d') // Upcoming Saturday
            : Carbon::now()->startOfWeek()->addDays(6)->format('Y-m-d'); // Upcoming Sunday

        // Book the appointment
        $appointment = Appointment::create([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'appointment_number' => $appointmentNumber,
            'appointment_date' => $appointmentDate,
        ]);

        return redirect()->route('appointment.confirmation', [
            'appointmentNumber' => $appointment->appointment_number,
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'appointmentDate' => $appointmentDate, // Pass the appointment date to the confirmation view
        ]);
    }


    public function confirmation($appointmentNumber, $name, $age, $address)
    {
        return view('confirmation', compact('appointmentNumber', 'name', 'age', 'address'));
    }

    public function finishAppointment($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->is_finished = true;
        $appointment->save();

        // Save appointment data in storage or log the appointment
        // ... (Add your logic here to save appointment data)

        return redirect()->route('appointments.index')->with('message', 'Appointment marked as finished!');
    }
    public function downloadConfirmation($appointmentNumber, $name, $age, $address, $appointmentDate)
    {
        $data = [
            'appointmentNumber' => $appointmentNumber,
            'name' => $name,
            'age' => $age,
            'address' => $address,
            'appointmentDate' => $appointmentDate,
        ];

        $pdf = PDF::loadView('confirmation_pdf', $data);
        return $pdf->download('confirmation.pdf');
    }
}