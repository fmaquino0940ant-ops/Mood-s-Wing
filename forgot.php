<?php
require "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $con->prepare("UPDATE users SET password=? WHERE email=?");
    $stmt->bind_param("ss", $password, $email);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Password updated!'); window.location='login.html';</script>";
    } else {
        echo "<script>alert('Email not found.'); history.back();</script>";
    }
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mood's Wing</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-page">
  <div class="login-bg"><img src="login(edited).jpg" alt=""></div>

  <form class="glass-card" method="post">
    <img class="card-logo" src="mascot.png" alt="Moods Wing">
    <h2 class="card-brand">Forgot Password</h2>

    <input type="email" name="email" class="pill-input" placeholder="Email" required>
    <input type="password" name="password" class="pill-input" placeholder="New password" required>
    <button type="submit" class="btn btn-green btn-block">Reset Password</button>

    <p class="form-note"><a href="login.html"><strong>Back to login</strong></a></p>
  </form>
</body>
</html>