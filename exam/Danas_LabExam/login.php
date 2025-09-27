<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UM Skills Clinic: Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="header">
        <nav class="navbar">
            <div class="logo">UM Skills Clinic<span class="accent-dot">.</span></div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php" class="active">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="form-container">
        
        <section class="auth-section">
            <h2>System Access</h2>
            <p>Sign in to your CCE Skills Clinic account.</p>

            <form id="login-form" class="auth-form">
                
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                    <span class="error-message" id="username-error"></span>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    <span class="error-message" id="password-error"></span>
                </div>

                <button type="submit" class="auth-button">Log In</button>

                <p class="form-link">
                    Don't have an account? <a href="register.php">Register here</a>
                </p>

            </form>
        </section>

    </main>

    <script src="js/script.js"></script>

</body>
</html>