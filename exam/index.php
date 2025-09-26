<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>UM Skills Clinic</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'nav.php'; ?>

  <header class="hero">
  <div class="hero-overlay">
    <img src="logo.png" alt="UM Skills Clinic Logo" class="hero-logo">
    <h1>Welcome to UM Skills Clinic</h1>
    <p>Sharpen your skills. Empower your future.</p>
    <?php if (isset($_SESSION['username'])): ?>
      <p class="welcome">Hello, <?php echo htmlspecialchars($_SESSION['username']); ?> 👋</p>
    <?php endif; ?>
  </div>
</header>

  <section class="about">
    <h2>About the Clinic</h2>
    <p>The UM Skills Clinic is designed to enhance student learning through workshops, seminars, and hands-on training across multiple disciplines.</p>
  </section>

  <section class="programs grid">
    <div class="card">
      <h3>Technical Workshops</h3>
      <p>Learn coding, robotics, and digital skills.</p>
    </div>
    <div class="card">
      <h3>Soft Skills Training</h3>
      <p>Improve leadership, teamwork, and communication.</p>
    </div>
    <div class="card">
      <h3>Career Guidance</h3>
      <p>Prepare for your future career with expert mentoring.</p>
    </div>
  </section>

  <footer>
    <p>&copy; <?php echo date("Y"); ?> UM Skills Clinic. All rights reserved.</p>
  </footer>
</body>
</html>