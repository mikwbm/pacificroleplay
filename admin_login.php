<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define your admin key
    $adminKey = "6VhaOizY6AXzwmOkyOKp";

    // Get the admin key entered by the user
    $enteredKey = $_POST["admin_key"];

    // Validate the admin key
    if ($enteredKey === $adminKey) {
        // If the keys match, redirect the admin user to the admin panel or desired page
        header("Location: admin_panel.php");
        exit;
    } else {
        // If the keys do not match, display an error message
        echo "Invalid admin key. Please try again.";
    }
}
?>
