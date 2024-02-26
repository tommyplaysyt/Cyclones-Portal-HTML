<?php
session_start();

// Define array of valid access keys
$validKeys = array(
    'key1',
    'key2',
    'key3'
);

// Check if form has been submitted
if(isset($_POST['access_key'])) {
    // Get submitted key
    $submittedKey = $_POST['access_key'];

    // Check if submitted key is valid
    if(in_array($submittedKey, $validKeys)) {
        // Set session variable to indicate staff access
        $_SESSION['is_staff'] = true;

        // Redirect to staff-only page
        header('Location: staff_dashboard.php');
        exit;
    } else {
        // Invalid key, display error message
        $error = "Invalid access key";
    }
}
?>


