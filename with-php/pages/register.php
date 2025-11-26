<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="../src/jollibeelogo.jpg" type="image/x-icon">
    <title>Jollibee</title>
</head>
<body>
    <div class="paper register-paper">
        <div class="header-container">
            <img src="../src/jollibeelogo.jpg" alt="Jollibee Logo" class="logo">
            <h1 class="text-bold">Register to Jollibee</h1>
        </div>
        <?php
        if (isset($_SESSION['error'])) {
            echo '<div class="alert alert-error">' . $_SESSION['error'] . '</div>';
            unset($_SESSION['error']);
        }
        ?>
        <form action="../php/register.php" method="POST">
            <div class="form-row">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="firstName" placeholder="Enter your first name" pattern="[A-Za-z]+" title="Only letters allowed" required>
                    <span class="error-message" id="firstNameError"></span>
                </div>
                <div class="form-group">
                    <label for="middleName">Middle Name</label>
                    <input type="text" id="middleName" name="middleName" placeholder="Enter your middle name" pattern="[A-Za-z]*" title="Only letters allowed">
                    <span class="error-message" id="middleNameError"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" name="lastName" placeholder="Enter your last name" pattern="[A-Za-z]+" title="Only letters allowed" required>
                    <span class="error-message" id="lastNameError"></span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    <span class="error-message" id="emailError"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="contact">Contact Number</label>
                    <input type="tel" id="contact" name="contact" placeholder="Enter your contact number" pattern="[0-9]{10,11}" title="Please enter 10-11 digits" required>
                    <span class="error-message" id="contactError"></span>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" minlength="4" title="Username must be at least 4 characters" required>
                    <span class="error-message" id="usernameError"></span>
                </div>
                
            </div>
            <div class="form-group">
                    <label for="password">Password</label>
                    <div class="password-container">
                        <input type="password" id="password" name="password" placeholder="Enter your password" minlength="8" title="Password must be at least 8 characters" required>
                        <button type="button" class="toggle-password" onclick="togglePassword('password')">
                            <svg class="eye-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </button>
                    </div>
                    <span class="error-message" id="passwordError"></span>
                </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <div class="password-container">
                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required>
                    <button type="button" class="toggle-password" onclick="togglePassword('confirmPassword')">
                        <svg class="eye-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </button>
                </div>
                <span class="error-message" id="confirmPasswordError"></span>
            </div>
            <button type="submit" class="btn-login">Register</button>
        </form>
        <p class="register-link">Already have an account? <a href="login.php">Login</a></p>
    </div>
    <script>
        function togglePassword(fieldId) {
            const field = document.getElementById(fieldId);
            field.type = field.type === 'password' ? 'text' : 'password';
        }

        document.querySelector('form').addEventListener('submit', function(e) {
            let isValid = true;
            
            // Clear previous errors
            document.querySelectorAll('.error-message').forEach(el => el.textContent = '');
            
            // First Name validation
            const firstName = document.getElementById('firstName');
            if (!firstName.value.match(/^[A-Za-z]+$/)) {
                document.getElementById('firstNameError').textContent = 'Only letters allowed';
                isValid = false;
            }
            
            // Last Name validation
            const lastName = document.getElementById('lastName');
            if (!lastName.value.match(/^[A-Za-z]+$/)) {
                document.getElementById('lastNameError').textContent = 'Only letters allowed';
                isValid = false;
            }
            
            // Email validation
            const email = document.getElementById('email');
            if (!email.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
                document.getElementById('emailError').textContent = 'Please enter a valid email';
                isValid = false;
            }
            
            // Contact validation
            const contact = document.getElementById('contact');
            if (!contact.value.match(/^[0-9]{10,11}$/)) {
                document.getElementById('contactError').textContent = 'Please enter 10-11 digits';
                isValid = false;
            }
            
            // Username validation
            const username = document.getElementById('username');
            if (username.value.length < 4) {
                document.getElementById('usernameError').textContent = 'Username must be at least 4 characters';
                isValid = false;
            }
            
            // Password validation
            const password = document.getElementById('password');
            if (password.value.length < 8) {
                document.getElementById('passwordError').textContent = 'Password must be at least 8 characters';
                isValid = false;
            }
            
            // Confirm Password validation
            const confirmPassword = document.getElementById('confirmPassword');
            if (password.value !== confirmPassword.value) {
                document.getElementById('confirmPasswordError').textContent = 'Passwords do not match';
                isValid = false;
            }
            
            if (!isValid) {
                e.preventDefault();
            }
        });
    </script>
</body>
</html>