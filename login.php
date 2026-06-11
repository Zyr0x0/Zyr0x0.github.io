<?php
session_start();
// Set your admin credentials here
$ADMIN_USERNAME = "zyroxadmin19289192919731239712897@zyroxmail.xyz";
$ADMIN_PASSWORD = "jnijuqbsbf723g2873rg73r23bfd27fb273f3b2973b27fb27f32b7f2bf71b391bf917b";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $ADMIN_USERNAME && $password === $ADMIN_PASSWORD) {
        $_SESSION['admin'] = true;
        header('Location: dashboard.php');
        exit;
    } else {
        echo "<script>alert('Invalid credentials'); window.location='index.html';</script>";
    }
} else {
    header('Location: index.html');
    exit;
}
?>