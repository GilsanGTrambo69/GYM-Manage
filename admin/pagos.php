<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Pagos - FitLife Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../public/assets/css/admin-styles.css">
</head>
<body>
    <!-- Header -->
    <header class="admin-header">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="admin-dashboard.php">
                        <h1>FitLife <span>Admin</span></h1>
                    </a>
                </div>
                
                <nav class="admin-nav">
                    <ul>
                        <li><a href="usuarios.php">Usuarios</a></li>
                        <li><a href="entrenadores.php">Entrenadores</a></li>
                        <li><a href="pagos.php">Pagos</a></li>
                        <li><a href="horarios.php">Horarios</a></li>
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

    <!-- Main Content -->
    <main class="admin-main">
        <div class="container">
            <div class="page-header">
                <h1>Gestión de Pagos</h1>
                <div class="stats-cards">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fa-solid fa-dollar-sign"></i>
                        </div>
                        <div class="stat-info">
                            <h3>$15,420</h3>
                            <p>Ingresos del Mes</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fa-solid fa-credit-card"></i>
                        </div>
                        <div class="stat-info">
                            <h3>142</h3>
                            <p>Pagos Procesados</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fa-solid fa-exclamation-triangle"></i>
                        </div>
                        <div class="stat-info">
                            <h3>8</h3>
                            <p>Pagos Pendientes</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payments Table -->
            <div class="table-container">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>ID Pago</th>
                            <th>Usuario</th>
                            <th>Plan</th>
                            <th>Monto</th>
                            <th>Fecha</th>
                            <th>Método</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PAY001</td>
                            <td>Juan Pérez</td>
                            <td>Premium</td>
                            <td>$99.00</td>
                            <td>2024-01-15</td>
                            <td>Tarjeta</td>
                            <td><span class="status paid">Pagado</span></td>
                            <td>
                                <button class="view-btn" onclick="viewPayment(1)">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="download-btn" onclick="downloadReceipt(1)">
                                    <i class="fa-solid fa-download"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>PAY002</td>
                            <td>María García</td>
                            <td>Básico</td>
                            <td>$59.00</td>
                            <td>2024-01-14</td>
                            <td>Efectivo</td>
                            <td><span class="status paid">Pagado</span></td>
                            <td>
                                <button class="view-btn" onclick="viewPayment(2)">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="download-btn" onclick="downloadReceipt(2)">
                                    <i class="fa-solid fa-download"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>PAY003</td>
                            <td>Carlos López</td>
                            <td>Premium</td>
                            <td>$99.00</td>
                            <td>2024-01-10</td>
                            <td>Transferencia</td>
                            <td><span class="status pending">Pendiente</span></td>
                            <td>
                                <button class="view-btn" onclick="viewPayment(3)">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="approve-btn" onclick="approvePayment(3)">
                                    <i class="fa-solid fa-check"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>PAY004</td>
                            <td>Ana Martínez</td>
                            <td>VIP</td>
                            <td>$149.00</td>
                            <td>2024-01-08</td>
                            <td>Tarjeta</td>
                            <td><span class="status failed">Fallido</span></td>
                            <td>
                                <button class="view-btn" onclick="viewPayment(4)">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="retry-btn" onclick="retryPayment(4)">
                                    <i class="fa-solid fa-redo"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
        <ul>
            <li><a href="admin-usuarios.html">Usuarios</a></li>
            <li><a href="admin-entrenadores.html">Entrenadores</a></li>
            <li><a href="admin-pagos.html" class="active">Pagos</a></li>
            <li><a href="admin-horarios.html">Horarios</a></li>
        </ul>
    </div>

    <script src="../public/assets/js/admin-scripts.js"></script>
</body>
</html>