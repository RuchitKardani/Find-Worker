<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "findworker");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cancel'])) {
    $bookingId = $_POST['booking_id'];

    // Delete the booking entry
    $deleteQuery = "DELETE FROM bookings WHERE id = ?";
    $stmt = $con->prepare($deleteQuery);
    $stmt->bind_param("i", $bookingId);
    if ($stmt->execute()) {
        // Success
        header("Location: mybookings.php"); // Redirect to mybookings.php
        exit();
    } else {
        // Error
        echo "Error deleting booking entry: " . $stmt->error;
    }
} else {
    // Invalid request
    echo "Invalid request.";
}
?>
<?php

// include '_nav.php';
?>
