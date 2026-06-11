<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: index.html');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mailbox_name = trim($_POST['mailbox_name']);

    // Validate mailbox name
    if (!preg_match('/^[a-zA-Z0-9._-]+$/', $mailbox_name)) {
        echo "Invalid mailbox name.";
        exit;
    }

    // Connect to email provider API here
    // Example: Call your email API to create mailbox
    // For demonstration, just output success message:

    echo "Mailbox '{$mailbox_name}@yourdomain.com' created successfully!";
    echo "<br><a href='dashboard.php'>Back</a>";
}
?>