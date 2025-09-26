<?php
session_start();
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if ($username && $password) {
        $usersFile = "users.txt";
        if (file_exists($usersFile)) {
            $users = file($usersFile, FILE_IGNORE_NEW_LINES);
            foreach ($users as $user) {
                list($name, $email, $storedUser, $hashed) = explode("|", $user);
                if ($storedUser == $username && password_verify($password, $hashed)) {
                    $_SESSION["username"] = $username;
                    header("Location: index.php");
                    exit;
                }
            }
            $message = "Invalid username or password.";
        } else {
            $message = "No registered users yet.";
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
  <title>Login - Skills Clinic</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js" defer></script>
</head>
<body>
  <?php include 'nav.php'; ?>

  <div class="form-container">
    <h2>Login</h2>
    <form method="POST" onsubmit="return validateLogin()">
      <input type="text" name="username" id="loginUsername" placeholder="Username">
      <input type="password" name="password" id="loginPassword" placeholder="Password">
      <button type="submit">Login</button>
    </form>
    <p class="message"><?php echo $message; ?></p>
    <p class="alt-link">No account? <a href="register.php">Register here</a></p>
  </div>
</body>
</html>