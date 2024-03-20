@extends('front')

@section('content')

<script>
    // Function to show pop-up message and redirect after delay
    function showPopupAndRedirect() {
        // Show pop-up message
        alert('Login berhasil!');

        // Redirect after 3 seconds
        setTimeout(function() {
            window.location.href = 'user';
        }, 3000);
    }

    // Call the function when the page loads
    window.onload = function() {
        showPopupAndRedirect();
    };
</script>

@endsection