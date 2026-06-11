<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: admin_login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Emails</title>
<!-- Reuse your styles from the login page for a consistent look -->
<style>
  /* Your styles here (similar to previous pages) */
  body {
    margin: 0;
    padding: 0;
    background-color: #000;
    font-family: 'Arial', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  .panel {
    width: 400px;
    background-color: #222;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.5);
    color: #fff;
  }
  input[type=text] {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: none;
    border-radius: 8px;
    background-color: #333;
    color: #fff;
  }
  button {
    width: 100%;
    padding: 14px;
    background-color: #b38b4e;
    border: none;
    border-radius: 8px;
    font-size: 14px;
    color: #fff;
    cursor: pointer;
    font-weight: 600;
  }
</style>
</head>
<body>
<div class="panel">
<h2>Create Email Account</h2>
<form id="createEmailForm" method="POST" action="create_email.php">
    <input type="text" name="emailname" placeholder="Email Name (e.g., support)" required />
    <button type="submit">Create Email</button>
</form>
<div id="status"></div>
</div>

<script>
document.getElementById('createEmailForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    fetch('create_email.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        document.getElementById('status').innerText = data;
    });
});
</script>
</body>
</html>