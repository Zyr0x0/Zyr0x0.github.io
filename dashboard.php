<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: index.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Admin Dashboard</title>
<style>
body {
  margin: 0; padding: 0; background: #000; font-family: Arial, sans-serif; color: #fff;
  display: flex; flex-direction: column; align-items: center;
}
h2 {
  margin-top: 20px;
}
form {
  margin-top: 30px;
  display: flex; flex-direction: column; width: 300px;
}
input[type=text] {
  padding: 10px; margin-bottom: 15px; border: none; border-radius: 5px;
}
button {
  padding: 10px; background: #b38b4e; border: none; border-radius: 5px; color: #fff; font-weight: bold;
}
a {
  margin-top: 20px; color: #aaa; text-decoration: none;
}
</style>
</head>
<body>
<h2>Create Mailbox</h2>
<form method="POST" action="create_mailbox.php">
  <input type="text" name="mailbox_name" placeholder="Mailbox Name (e.g., zyrox)" required />
  <button type="submit">Create Mailbox</button>
</form>
<a href="logout.php">Logout</a>
</body>
</html>