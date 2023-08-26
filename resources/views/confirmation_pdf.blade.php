<!DOCTYPE html>
<html>

<head>
    <title>Appointment Confirmation</title>
    <style>
        /* Add custom styles for the PDF here (optional) */
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body>
    <h1>Appointment Confirmation</h1>
    <p><strong>Appointment Number:</strong> {{ $appointmentNumber }}</p>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Age:</strong> {{ $age }}</p>
    <p><strong>Address:</strong> {{ $address }}</p>
    <p><strong>Appointment Date:</strong> {{ $appointmentDate }}</p>
</body>

</html>
