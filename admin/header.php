<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - FitLife</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../public/assets/css/admin-styles.css">
</head>
<body>
    <!-- Header Section -->
    <header class="admin-header">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="admin-dashboard.html">
                        <h1>FitLife <span>Admin</span></h1>
                    </a>
                </div>
                
                <nav class="admin-nav">
                    <ul>
                        <li><a href="admin-usuarios.html" id="nav-usuarios">Usuarios</a></li>
                        <li><a href="admin-entrenadores.html" id="nav-entrenadores">Entrenadores</a></li>
                        <li><a href="admin-pagos.html" id="nav-pagos">Pagos</a></li>
                        <li><a href="admin-horarios.html" id="nav-horarios">Horarios</a></li>
                    </ul>
                </nav>
                
                <div class="admin-actions">
                    <div class="user-profile">
                        <i class="fa-solid fa-user-circle"></i>
                        <span>Administrador</span>
                    </div>
                    <a href="index.html" class="logout-btn">
                        <i class="fa-solid fa-sign-out-alt"></i>
                        Salir
                    </a>
                </div>
                
                <div class="mobile-menu-toggle">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
        <ul>
            <li><a href="usuarios.php">Usuarios</a></li>
            <li><a href="entrenadores.php">Entrenadores</a></li>
            <li><a href="pagos.php">Pagos</a></li>
            <li><a href="horarios.php">Horarios</a></li>
        </ul>
        <div class="mobile-logout">
            <a href="index.html" class="logout-btn">
                <i class="fa-solid fa-sign-out-alt"></i>
                Salir
            </a>
        </div>
    </div>
</body>
</html>