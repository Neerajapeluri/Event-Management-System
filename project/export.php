<?php
if (isset($_GET['orderId'])) {
    // Include your database connection code if it's not already included
    include("./include/conn.php");

    $orderId = $_GET['orderId'];

    // Retrieve payment data based on the order ID from the database
    $result = mysqli_query($conn, "SELECT name, amount, bookingID,contact, payment_status, added_on, payment_id FROM payment WHERE id='$orderId'");
    
    // Define the filename for the CSV file
    $filename = "payment_data.csv";

    // Set the HTTP response headers for downloading the file
    header("Content-type: text/csv");
    header("Content-Disposition: attachment; filename=$filename");

    // Create and open the CSV file
    $output = fopen("php://output", "w");

    // Add the CSV header row
    fputcsv($output, array('Name', 'Amount','bookingID','contact', 'Payment Status', 'Added On', 'Payment ID'));

    // Add payment data rows to the CSV file
    while ($row = mysqli_fetch_assoc($result)) {
        fputcsv($output, $row);
    }

    // Close the CSV file
    fclose($output);

    // Exit to prevent any additional output
    exit();
} else {
    echo "Order ID not provided.";
}
?>
