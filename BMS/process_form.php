<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $total_money = $_POST['total_money'];
    $payer = $_POST['payer'];
    $date = $_POST['date'];
    $details = $_POST['details'];

    // Validate data (You can add more validation as per your requirements)
    if (empty($total_money) || empty($date) || empty($details)) {
        echo "Please fill in all fields.";
    } else {
        // Process the data (You can save it to a database or perform other operations)
        echo "Total Money: $total_money<br>";
        echo "Payer: $payer<br>";
        echo "Date: $date<br>";
        echo "Details: $details<br>";

        // Here you can add code to save the data to a database or perform other operations.
    }
} else {
    // If the form is not submitted, redirect back to the form page
    header("Location: expense_form.php");
    exit;
}
?>
