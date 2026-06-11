<!-- admin_login.php -->
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Set your credentials here
    $admin_user = 'zyroxadmin19289192919731239712897';
    $admin_pass = 'jnijuqbsbf723g2873rg73r23bfd27fb273f3b2973b27fb27f32b7f2bf71b391bf917b';

    if ($username === $admin_user && $password === $admin_pass) {
        $_SESSION['loggedin'] = true;
        header('Location: admin_panel.php');
        exit;
    } else {
        $error = 'Invalid credentials.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
</head>
<body>
<h2>Login to Admin Panel</h2>
<form method="POST">
    <input type="text" name="username" placeholder="Username" required /><br />
    <input type="password" name="password" placeholder="Password" required /><br />
    <button type="submit">Login</button>
</form>
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
</body>
</html>