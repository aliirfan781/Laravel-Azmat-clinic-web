const appointmentId = 2;
fetch(`/appointments/${appointmentId}/finish`, {
    method: 'PUT', // Specify the method as PUT
    headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}', // If using CSRF protection
    },
    // Add any request body or other configurations if needed
})
.then(response => {
    // Handle the response
})
.catch(error => {
    // Handle errors
});
