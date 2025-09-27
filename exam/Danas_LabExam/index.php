<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCE Skills Clinic</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Fira+Code:wght@400&display=swap">
</head>
<body>

    <header class="header">
        <nav class="navbar">
            <div class="logo">CCE Skills Clinic<span></div>
            <ul class="nav-links">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="#programs">Programs</a></li>
                <li><a href="#services">Services</a></li>
            </ul>
        </nav>
    </header>
    
        <section class="hero-section">
            <div class="hero-background-wrapper">
                <div class="hero-content">
					<img src="imgs/logo.png" alt="UM Skills Clinic Logo" class="hero-logo-image">
                    <h1>
                        UM College of Computing Education:
                        <span id="typing-text" class="code-font"></span>
                    </h1>
                    <p>Empowering the next generation of digital innovators and problem solvers through rigorous curriculum and hands-on experience.</p>
                    <a href="#programs" class="cta-button">Explore Programs</a>
                </div>
            </div>
            </section>
			
			<main>

        <section id="programs" class="programs-section">
            <h2 class="section-title">Our Core Programs</h2>
            <div class="program-cards-container">
                
                <div class="program-card" data-program="BSCS">
                    <i class="icon-code"></i>
                    <h3>B.S. Computer Science</h3>
                    <p>Focuses on theory, design, implementation, and application of information and computation.</p>
                    <span class="read-more">Algorithms | AI | Data Science</span>
                </div>
                
                <div class="program-card" data-program="BSIT">
                    <i class="icon-network"></i>
                    <h3>B.S. Information Technology</h3>
                    <p>Emphasizes managing and integrating computing technology into business processes.</p>
                    <span class="read-more">Networking | Security | Administration</span>
                </div>
                
                <div class="program-card" data-program="BMMA">
                    <i class="icon-database"></i>
                    <h3>B.A. Multimedia Arts</h3>
                    <p>Blends creativity and technology to produce innovative visual, digital, and interactive media.</p>
                    <span class="read-more">Design | Animation | Digital Media</span>

                </div>

            </div>
        </section>

        <section id="services" class="services-section">
            <h2 class="section-title">About the Clinic</h2>
            <p class="subtitle">The CCE Skills Clinic equips students with practical skills and knowledge through workshops, seminars, and hands-on training led by dedicated student mentors. It bridges academic learning with real-world applications while fostering peer-to-peer collaboration and growth.</p>
            <div class="project-grid">
                <div class="project-item project-fadeIn" data-delay="0s">
                    <h4>Technical Workshops</h4>
                    <p>Learn coding, robotics, and digital skills.</p>
                </div>
                
                <div class="project-item project-fadeIn" data-delay="0.2s">
                    <h4>Soft Skills Training</h4>
                    <p>Improve leadership, teamwork, and communication.</p>
                </div>
                
                <div class="project-item project-fadeIn" data-delay="0.4s">
                    <h4>Career Guidance</h4>
                    <p>Prepare for your future career with expert mentoring.</p>
                </div>
            </div>
        </section>

    </main>

    <footer class="footer">
        <p>&copy; 2025 CCE Skills Clinic. All rights reserved.</a></p>
    </footer>

    <script src="js/script.js"></script>

</body>
</html>