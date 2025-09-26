<?php
session_start();
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if ($name && $email && $username && $password) {
        $usersFile = "users.txt";
        $users = file_exists($usersFile) ? file($usersFile, FILE_IGNORE_NEW_LINES) : [];

        // Prevent duplicate usernames
        foreach ($users as $user) {
            $userData = explode("|", $user);
            if ($userData[2] == $username) {
                $message = "Username already exists!";
                break;
            }
        }

        if (!$message) {
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            $data = "$name|$email|$username|$hashed";
            file_put_contents($usersFile, $data . PHP_EOL, FILE_APPEND);
            $message = "Registration successful! You can now login.";
        }
    } else {
        $message = "All fields are required.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register - Skills Clinic</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js" defer></script>
</head>
<body>
  <?php include 'nav.php'; ?>

  <div class="form-container">
    <h2>Register</h2>
    <form method="POST" onsubmit="return validateRegister()">
      <input type="text" name="name" id="name" placeholder="Full Name">
      <input type="email" name="email" id="email" placeholder="Email">
      <input type="text" name="username" id="username" placeholder="Username">
      <input type="password" name="password" id="password" placeholder="Password">
      <button type="submit">Register</button>
    </form>
    <p class="message"><?php echo $message; ?></p>
  </div>
</body>
</html>
