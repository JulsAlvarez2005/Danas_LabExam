<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UM Skills Clinic: Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="header">
        <nav class="navbar">
            <div class="logo">UM Skills Clinic<span class="accent-dot">.</span></div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php" class="active">Register</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="form-container">
        
        <section class="auth-section">
            <h2>New Student Registration</h2>
            <p>Create your new CCE Skills Clinic profile.</p>

            <form id="registration-form" class="auth-form">
                
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="E.g., Juan Dela Cruz" required>
                    <span class="error-message" id="name-error"></span>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="E.g., juandelacruz@um.edu" required>
                    <span class="error-message" id="email-error"></span>
                </div>
                
                <div class="form-group">
                    <label for="reg-username">Username</label>
                    <input type="text" id="reg-username" name="reg-username" placeholder="Choose a unique username" required>
                    <span class="error-message" id="reg-username-error"></span>
                </div>
                
                <div class="form-group">
                    <label for="reg-password">Password</label>
                    <input type="password" id="reg-password" name="reg-password" placeholder="Create a strong password" required>
                    <span class="error-message" id="reg-password-error"></span>
                </div>

                <button type="submit" class="auth-button">Register Account</button>
                
                <p class="validation-output"></p>

                <p class="form-link">
                    Already registered? <a href="login.php">Log in here</a>
                </p>

            </form>
        </section>

    </main>

    <script src="js/script.js"></script>

</body>
</html>