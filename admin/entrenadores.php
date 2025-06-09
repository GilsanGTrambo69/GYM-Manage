<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Entrenadores - FitLife Admin</title>
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
                <h1>Gestión de Entrenadores</h1>
                <button class="primary-btn" onclick="openModal('trainerModal')">
                    <i class="fa-solid fa-plus"></i>
                    Registrar Entrenador
                </button>
            </div>

            <!-- Trainers Table -->
            <div class="table-container">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Especialidad</th>
                            <th>Experiencia</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>T001</td>
                            <td>Sara Jiménez</td>
                            <td>sara@fitlife.com</td>
                            <td>Fitness General</td>
                            <td>5 años</td>
                            <td><span class="status active">Activo</span></td>
                            <td>
                                <button class="edit-btn" onclick="editTrainer(1)">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="delete-btn" onclick="deleteTrainer(1)">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>T002</td>
                            <td>Miguel Moreno</td>
                            <td>miguel@fitlife.com</td>
                            <td>Entrenamiento de Fuerza</td>
                            <td>8 años</td>
                            <td><span class="status active">Activo</span></td>
                            <td>
                                <button class="edit-btn" onclick="editTrainer(2)">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="delete-btn" onclick="deleteTrainer(2)">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>T003</td>
                            <td>Elena Díaz</td>
                            <td>elena@fitlife.com</td>
                            <td>Yoga</td>
                            <td>6 años</td>
                            <td><span class="status active">Activo</span></td>
                            <td>
                                <button class="edit-btn" onclick="editTrainer(3)">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="delete-btn" onclick="deleteTrainer(3)">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Trainer Modal -->
    <div id="trainerModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Registrar Entrenador</h2>
                <span class="close" onclick="closeModal('trainerModal')">&times;</span>
            </div>
            <form class="modal-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="trainerName">Nombre Completo</label>
                        <input type="text" id="trainerName" name="trainerName" required>
                    </div>
                    <div class="form-group">
                        <label for="trainerEmail">Email</label>
                        <input type="email" id="trainerEmail" name="trainerEmail" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="trainerPhone">Teléfono</label>
                        <input type="tel" id="trainerPhone" name="trainerPhone" required>
                    </div>
                    <div class="form-group">
                        <label for="trainerSpecialty">Especialidad</label>
                        <select id="trainerSpecialty" name="trainerSpecialty" required>
                            <option value="">Seleccionar Especialidad</option>
                            <option value="fitness">Fitness General</option>
                            <option value="fuerza">Entrenamiento de Fuerza</option>
                            <option value="cardio">Cardio</option>
                            <option value="yoga">Yoga</option>
                            <option value="boxeo">Boxeo</option>
                            <option value="crossfit">CrossFit</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="trainerExperience">Años de Experiencia</label>
                        <input type="number" id="trainerExperience" name="trainerExperience" min="0" required>
                    </div>
                    <div class="form-group">
                        <label for="trainerCertification">Certificaciones</label>
                        <input type="text" id="trainerCertification" name="trainerCertification">
                    </div>
                </div>
                <div class="form-group">
                    <label for="trainerBio">Biografía</label>
                    <textarea id="trainerBio" name="trainerBio" rows="3"></textarea>
                </div>
                <div class="modal-actions">
                    <button type="button" class="secondary-btn" onclick="closeModal('trainerModal')">Cancelar</button>
                    <button type="submit" class="primary-btn">Guardar Entrenador</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
        <ul>
            <li><a href="admin-usuarios.html">Usuarios</a></li>
            <li><a href="admin-entrenadores.html" class="active">Entrenadores</a></li>
            <li><a href="admin-pagos.html">Pagos</a></li>
            <li><a href="admin-horarios.html">Horarios</a></li>
        </ul>
    </div>

    <script src="../public/assets/js/admin-scripts.js"></script>
</body>
</html>