document.addEventListener('DOMContentLoaded', () => {
    // -----------------------------------------------------------------
    // 1. Landing Page Creative Feature: Typing Effect
    // -----------------------------------------------------------------
    const typingElement = document.getElementById('typing-text');
    if (typingElement) {
        const textArray = ["Code.", "Create.", "Connect."];
        let textIndex = 0;
        let charIndex = 0;

        function type() {
            if (charIndex < textArray[textIndex].length) {
                typingElement.textContent += textArray[textIndex].charAt(charIndex);
                charIndex++;
                setTimeout(type, 150); // Typing speed
            } else {
                setTimeout(erase, 1500); // Wait before erasing
            }
        }

        function erase() {
            if (charIndex > 0) {
                typingElement.textContent = textArray[textIndex].substring(0, charIndex - 1);
                charIndex--;
                setTimeout(erase, 75); // Erasing speed
            } else {
                textIndex = (textIndex + 1) % textArray.length;
                setTimeout(type, 500); // Wait before typing next word
            }
        }
        
        // Start the effect
        type();
    }
    
    // -----------------------------------------------------------------
    // 2. Login Page Functionality: Validation and Redirection
    // -----------------------------------------------------------------
    const loginForm = document.getElementById('login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', (event) => {
            event.preventDefault(); // Stop default form submission

            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();
            let isValid = true;

            // Clear previous errors
            document.getElementById('username-error').textContent = '';
            document.getElementById('password-error').textContent = '';

            // Basic Validation 1: Check if fields are empty
            if (username === '') {
                document.getElementById('username-error').textContent = 'Username field cannot be empty.';
                isValid = false;
            }

            if (password === '') {
                document.getElementById('password-error').textContent = 'Password field cannot be empty.';
                isValid = false;
            }
            
            // Simulation of successful login: redirect to Landing Page
            if (isValid) {
                // In a real application, an AJAX call would verify credentials here.
                alert('✅ Login successful! Redirecting to Homepage.');
                window.location.href = 'index.php'; // Required redirection
            }
        });
    }

    // -----------------------------------------------------------------
    // 3. Registration Page Functionality: Basic Validation
    // -----------------------------------------------------------------
    const registrationForm = document.getElementById('registration-form');
    if (registrationForm) {
        registrationForm.addEventListener('submit', (event) => {
            event.preventDefault();

            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const username = document.getElementById('reg-username').value.trim();
            const password = document.getElementById('reg-password').value.trim();
            const output = document.querySelector('.validation-output');
            let isValid = true;

            // Clear previous errors
            document.getElementById('name-error').textContent = '';
            document.getElementById('email-error').textContent = '';
            document.getElementById('reg-username-error').textContent = '';
            document.getElementById('reg-password-error').textContent = '';
            output.textContent = '';


            // Basic Validation 1: All fields must be filled (4 fields minimum)
            if (name === '') { document.getElementById('name-error').textContent = 'Full name is required.'; isValid = false; }
            if (email === '') { document.getElementById('email-error').textContent = 'Email is required.'; isValid = false; }
            if (username === '') { document.getElementById('reg-username-error').textContent = 'Username is required.'; isValid = false; }
            if (password === '') { document.getElementById('reg-password-error').textContent = 'Password is required.'; isValid = false; }

            // Basic Validation 2: Simple email format check
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email !== '' && !emailRegex.test(email)) {
                document.getElementById('email-error').textContent = 'Please enter a valid email format.';
                isValid = false;
            }

            // Basic Validation 3: Minimum password length (example)
            if (password.length > 0 && password.length < 6) {
                document.getElementById('reg-password-error').textContent = 'Password must be at least 6 characters long.';
                isValid = false;
            }

            if (isValid) {
                output.style.color = 'var(--color-accent)';
                output.textContent = '✅ Registration successful! Your account is ready.';
                
                // Clear the form after success
                registrationForm.reset();
            } else {
                output.style.color = '#ff4444';
                output.textContent = '❌ Please correct the errors above before submitting.';
            }
        });
    }

    // -----------------------------------------------------------------
    // 4. Landing Page Animation: Scroll Fade In
    // -----------------------------------------------------------------
    const projectItems = document.querySelectorAll('.project-item');
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add the 'visible' class after a delay defined in HTML (data-delay)
                const delay = entry.target.getAttribute('data-delay') || '0s';
                setTimeout(() => {
                    entry.target.classList.add('visible');
                }, parseFloat(delay) * 1000); // convert seconds string to milliseconds

                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 }); // Trigger when 10% of the item is visible

    projectItems.forEach(item => {
        observer.observe(item);
    });

});