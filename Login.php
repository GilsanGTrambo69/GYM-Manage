<?php
session_start();
include ("validar_login.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - GYM</title>
    <link rel="stylesheet" href="src/assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap");

        :root {
          --primary-color: #22c55e;
          --primary-hover: #22c55e;
          --dark-bg: #111111;
          --darker-bg: #0a0a0a;
          --light-text: #ffffff;
          --gray-text: #a0a0a0;
          --input-bg: #222222;
          --border-color: #333333;
        }

        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }

        body {
          font-family: "Montserrat", sans-serif;
          background-color: var(--dark-bg);
          color: var(--light-text);
          line-height: 1.6;
        }

        .container {
          display: flex;
          min-height: 100vh;
        }

        /* Login Form Side */
        .login-container {
          flex: 1;
          padding: 40px;
          display: flex;
          flex-direction: column;
          justify-content: center;
          background-color: var(--darker-bg);
          max-width: 600px;
        }

        .login-header {
          margin-bottom: 40px;
          text-align: center;
        }

        .logo {
          display: inline-block;
          margin-bottom: 30px;
        }

        .logo-placeholder {
          height: 60px;
          /* Placeholder for actual logo */
          content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='60' viewBox='0 0 120 60'%3E%3Ctext x='10' y='40' font-family='Arial' font-weight='bold' font-size='30' fill='white'%3EG%3C/text%3E%3Ctext x='40' y='40' font-family='Arial' font-weight='bold' font-size='30' fill='white'%3EY%3C/text%3E%3Ctext x='70' y='40' font-family='Arial' font-weight='bold' font-size='30' fill='%23ff6600'%3EM%3C/text%3E%3C/svg%3E");
        }

        .login-header h1 {
          font-size: 28px;
          font-weight: 800;
          margin-bottom: 10px;
          letter-spacing: 1px;
        }

        .login-header h1 span,
        .image-content h3 span {
          color: var(--primary-color);
        }

        .login-header p {
          color: var(--gray-text);
          font-size: 14px;
        }

        .login-form {
          margin-bottom: 30px;
        }

        .form-group {
          margin-bottom: 25px;
        }

        .form-group label {
          display: block;
          margin-bottom: 8px;
          font-weight: 500;
          font-size: 14px;
        }

        .input-with-icon {
          position: relative;
        }

        .input-with-icon i {
          position: absolute;
          left: 15px;
          top: 50%;
          transform: translateY(-50%);
          color: var(--gray-text);
        }

        .input-with-icon .toggle-password {
          left: auto;
          right: 15px;
          cursor: pointer;
          transition: color 0.3s;
        }

        .input-with-icon .toggle-password:hover {
          color: var(--primary-color);
        }

        .input-with-icon input {
          width: 100%;
          padding: 15px 15px 15px 45px;
          border: 1px solid var(--border-color);
          border-radius: 5px;
          background-color: var(--input-bg);
          color: var(--light-text);
          font-size: 14px;
          transition: all 0.3s ease;
        }

        .input-with-icon input:focus {
          border-color: var(--primary-color);
          outline: none;
          box-shadow: 0 0 0 2px rgba(255, 102, 0, 0.2);
        }

        .form-options {
          display: flex;
          justify-content: space-between;
          align-items: center;
          margin-bottom: 25px;
          font-size: 13px;
        }

        .remember-me {
          display: flex;
          align-items: center;
        }

        .remember-me input {
          margin-right: 8px;
          accent-color: var(--primary-color);
        }

        .forgot-password {
          color: var(--gray-text);
          text-decoration: none;
          transition: color 0.3s;
        }

        .forgot-password:hover {
          color: var(--primary-color);
        }

        .login-button {
          width: 100%;
          padding: 15px;
          background-color: var(--primary-color);
          color: white;
          border: none;
          border-radius: 5px;
          font-weight: 700;
          font-size: 16px;
          cursor: pointer;
          transition: background-color 0.3s;
          letter-spacing: 1px;
        }

        .login-button:hover {
          background-color: var(--primary-hover);
        }

        .social-login {
          margin-top: 30px;
          text-align: center;
        }

        .social-login p {
          color: var(--gray-text);
          font-size: 14px;
          margin-bottom: 15px;
          position: relative;
        }

        .social-login p::before,
        .social-login p::after {
          content: "";
          position: absolute;
          top: 50%;
          width: 30%;
          height: 1px;
          background-color: var(--border-color);
        }

        .social-login p::before {
          left: 0;
        }

        .social-login p::after {
          right: 0;
        }

        .social-icons {
          display: flex;
          justify-content: center;
          gap: 15px;
        }

        .social-icon {
          display: flex;
          align-items: center;
          justify-content: center;
          width: 45px;
          height: 45px;
          border-radius: 50%;
          background-color: var(--input-bg);
          color: var(--light-text);
          text-decoration: none;
          transition: all 0.3s;
        }

        .social-icon:hover {
          background-color: var(--primary-color);
          transform: translateY(-3px);
        }

        .register-link {
          text-align: center;
          font-size: 14px;
          color: var(--gray-text);
        }

        .register-link a {
          color: var(--primary-color);
          text-decoration: none;
          font-weight: 600;
          transition: color 0.3s;
        }

        .register-link a:hover {
          text-decoration: underline;
        }

        /* Image Side */
        .login-image {
          flex: 1.5;
          background-image: url("assets/img/background_picture_1.jpg");
          background-size: cover;
          background-position: center;
          position: relative;
          display: none;
        }

        .overlay {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(0, 0, 0, 0.5);
          display: flex;
          align-items: center;
          justify-content: center;
        }

        .image-content {
          text-align: center;
          padding: 20px;
        }

        .image-content h2 {
          font-size: 18px;
          font-weight: 500;
          letter-spacing: 2px;
          margin-bottom: 20px;
        }

        .image-content h3 {
          font-size: 42px;
          font-weight: 800;
          line-height: 1.2;
          margin-bottom: 10px;
          letter-spacing: 1px;
        }

        .get-info-btn {
          display: inline-block;
          margin-top: 30px;
          padding: 15px 30px;
          background-color: var(--primary-color);
          color: white;
          text-decoration: none;
          font-weight: 700;
          font-size: 14px;
          border-radius: 3px;
          transition: background-color 0.3s;
        }

        .get-info-btn:hover {
          background-color: var(--primary-hover);
        }

        /* Responsive Design */
        @media (min-width: 992px) {
          .login-image {
            display: block;
          }
        }

        @media (max-width: 991px) {
          .container {
            flex-direction: column;
          }

          .login-container {
            max-width: 100%;
            padding: 40px 20px;
          }

          .login-image {
            display: none;
          }
        }

        @media (max-width: 480px) {
          .form-options {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
          }

          .login-header h1 {
            font-size: 24px;
          }

          .social-login p::before,
          .social-login p::after {
            width: 25%;
          }
        }
    </style> 
</head>
<body>
    <div class="container">
        <div class="login-container">
            <div class="login-header">
                <a href="index.html" class="logo">
                    <img > <!--Logo del GYM-->
                </a>
                <h1>ACCEDE A TU <span>CUENTA</span></h1>
                <p>Inicia sesión para acceder a tu entrenamiento personalizado</p>
            </div>
            
            <form class="login-form" id="loginForm" method="post" action="">
                <div class="form-group">
                    <label for="doc">Email</label>
                    <div class="input-with-icon">
                        <i class="fas fa-envelope"></i>
                        <input type="number" id="doc" name="doc" placeholder="Tu numero de documento" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Tu contraseña" required>
                        <i class="fas fa-eye-slash toggle-password" id="togglePassword"></i>
                    </div>
                </div>
                <?php
                    if(isset($_SESSION['msg']))
                    {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }?>
                
                <div class="form-options">
                    <a href="forgot-password.php" class="forgot-password">¿Olvidaste tu contraseña?</a>
                </div>
                
                <button type="submit" class="login-button">INICIAR SESIÓN</button>
                
            </form>
            
            <div class="register-link">
                ¿No tienes una cuenta? <a href="register.php">Regístrate ahora</a>
            </div>
        </div>
        
        <div class="login-image">
            <div class="overlay">
                <div class="image-content">
                    <h2>SHAPE YOUR BODY</h2>
                    <h3>BE <span>STRONG</span></h3>
                    <h3>TRAINING HARD</h3>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility functionality
        document.addEventListener("DOMContentLoaded", function() {
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');
            
            // Toggle password visibility when eye icon is clicked
            togglePassword.addEventListener('click', function() {
                // Change input type between 'password' and 'text'
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                
                // Toggle the eye icon
                this.classList.toggle('fa-eye');
                this.classList.toggle('fa-eye-slash');
            });
            
            // Form submission handler
            /*
            document.getElementById('loginForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                
                // Here you would typically send the data to your server
                console.log('Login attempt:', { email, password });
                
                // For demo purposes, show success message
                alert('Inicio de sesión exitoso!');
            });*/
        });
    </script>
</body>
</html>
