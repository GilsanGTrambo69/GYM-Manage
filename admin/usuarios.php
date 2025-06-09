<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios - FitLife Admin</title>
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
                <h1>Gestión de Usuarios</h1>
                <button class="primary-btn" onclick="openModal('userModal')">
                    <i class="fa-solid fa-plus"></i>
                    Registrar Usuario
                </button>
            </div>

            <!-- Users Table -->
            <div class="table-container">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Plan</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>Juan Pérez</td>
                            <td>juan@email.com</td>
                            <td>123-456-789</td>
                            <td>Premium</td>
                            <td><span class="status active">Activo</span></td>
                            <td>
                                <button class="edit-btn" onclick="editUser(1)">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="delete-btn" onclick="deleteUser(1)">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>María García</td>
                            <td>maria@email.com</td>
                            <td>987-654-321</td>
                            <td>Básico</td>
                            <td><span class="status active">Activo</span></td>
                            <td>
                                <button class="edit-btn" onclick="editUser(2)">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="delete-btn" onclick="deleteUser(2)">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>Carlos López</td>
                            <td>carlos@email.com</td>
                            <td>555-123-456</td>
                            <td>Premium</td>
                            <td><span class="status inactive">Inactivo</span></td>
                            <td>
                                <button class="edit-btn" onclick="editUser(3)">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="delete-btn" onclick="deleteUser(3)">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- User Modal -->
    <div id="userModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Registrar Usuario</h2>
                <span class="close" onclick="closeModal('userModal')">&times;</span>
            </div>
            <form class="modal-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="userName">Nombre Completo</label>
                        <input type="text" id="userName" name="userName" required>
                    </div>
                    <div class="form-group">
                        <label for="userEmail">Email</label>
                        <input type="email" id="userEmail" name="userEmail" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="userPhone">Teléfono</label>
                        <input type="tel" id="userPhone" name="userPhone" required>
                    </div>
                    <div class="form-group">
                        <label for="userPlan">Plan</label>
                        <select id="userPlan" name="userPlan" required>
                            <option value="">Seleccionar Plan</option>
                            <option value="basico">Básico</option>
                            <option value="premium">Premium</option>
                            <option value="vip">VIP</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="userPassword">Contraseña</label>
                        <input type="password" id="userPassword" name="userPassword" required>
                    </div>
                    <div class="form-group">
                        <label for="userStatus">Estado</label>
                        <select id="userStatus" name="userStatus" required>
                            <option value="activo">Activo</option>
                            <option value="inactivo">Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="modal-actions">
                    <button type="button" class="secondary-btn" onclick="closeModal('userModal')">Cancelar</button>
                    <button type="submit" class="primary-btn">Guardar Usuario</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
        <ul>
            <li><a href="admin-usuarios.html" class="active">Usuarios</a></li>
            <li><a href="admin-entrenadores.html">Entrenadores</a></li>
            <li><a href="admin-pagos.html">Pagos</a></li>
            <li><a href="admin-horarios.html">Horarios</a></li>
        </ul>
    </div>

    <script src="../public/assets/js/admin-scripts.js"></script>
</body>
</html>