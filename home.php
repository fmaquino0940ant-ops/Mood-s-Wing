<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.html");
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
<body class="home-page">
  <header class="home-nav">
    <img class="nav-logo" src="images/Logo.png" alt="Moods Wing">
    <nav>
      <a href="menu.html" class="btn btn-yellow">Flavor Menu</a>
      <a href="order.html" class="btn btn-yellow">Order</a>
      <a href="booking.html" class="btn btn-yellow">Book a Table</a>
    </nav>
  </header>

  <main class="home-hero">
    <div class="home-bg"><img src="images/home (1920 x 1080 px).png" alt=""></div>

    <p class="hero-tagline">Find your flavor<br>Own your mood</p>

    <div class="socials">
      <a href="#"><img src="images/messenger-logo-thin-svgrepo-com.svg" alt="Messenger"></a>
      <a href="#"><img src="images/gmail-svgrepo-com.svg" alt="Email"></a>
    </div>
  </main>
</body>
</html>
