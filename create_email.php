<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    exit('Unauthorized');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['emailname']);
    // Validate input
    if (!preg_match('/^[a-zA-Z0-9._-]+$/', $name)) {
        echo "Invalid email name.";
        exit;
    }

    // Use your email provider's API here to create the email account
    // Example (pseudo-code):
    // $result = createEmailAccount($name); // Implement this based on your provider

    // For demo:
    echo "Email account {$name}@zyroxmail.xyz created successfully!";
}
?>