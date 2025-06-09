<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Horarios - FitLife Admin</title>
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
                <h1>Gestión de Horarios</h1>
                <button class="primary-btn" onclick="openModal('scheduleModal')">
                    <i class="fa-solid fa-plus"></i>
                    Agregar Horario
                </button>
            </div>

            <!-- Schedule Table -->
            <div class="table-container">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Clase</th>
                            <th>Entrenador</th>
                            <th>Día</th>
                            <th>Hora Inicio</th>
                            <th>Hora Fin</th>
                            <th>Capacidad</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>H001</td>
                            <td>Yoga Matutino</td>
                            <td>Elena Díaz</td>
                            <td>Lunes</td>
                            <td>07:00</td>
                            <td>08:00</td>
                            <td>20</td>
                            <td><span class="status active">Activo</span></td>
                            <td>
                                <button class="edit-btn" onclick="editSchedule(1)">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="delete-btn" onclick="deleteSchedule(1)">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>H002</td>
                            <td>Entrenamiento de Fuerza</td>
                            <td>Miguel Moreno</td>
                            <td>Martes</td>
                            <td>18:00</td>
                            <td>19:30</td>
                            <td>15</td>
                            <td><span class="status active">Activo</span></td>
                            <td>
                                <button class="edit-btn" onclick="editSchedule(2)">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="delete-btn" onclick="deleteSchedule(2)">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>H003</td>
                            <td>Cardio Intensivo</td>
                            <td>Sara Jiménez</td>
                            <td>Miércoles</td>
                            <td>19:00</td>
                            <td>20:00</td>
                            <td>25</td>
                            <td><span class="status active">Activo</span></td>
                            <td>
                                <button class="edit-btn" onclick="editSchedule(3)">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="delete-btn" onclick="deleteSchedule(3)">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Schedule Modal -->
    <div id="scheduleModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Agregar Horario</h2>
                <span class="close" onclick="closeModal('scheduleModal')">&times;</span>
            </div>
            <form class="modal-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="className">Nombre de la Clase</label>
                        <input type="text" id="className" name="className" required>
                    </div>
                    <div class="form-group">
                        <label for="trainer">Entrenador</label>
                        <select id="trainer" name="trainer" required>
                            <option value="">Seleccionar Entrenador</option>
                            <option value="sara">Sara Jiménez</option>
                            <option value="miguel">Miguel Moreno</option>
                            <option value="elena">Elena Díaz</option>
                            <option value="david">David Ruiz</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="dayOfWeek">Día de la Semana</label>
                        <select id="dayOfWeek" name="dayOfWeek" required>
                            <option value="">Seleccionar Día</option>
                            <option value="lunes">Lunes</option>
                            <option value="martes">Martes</option>
                            <option value="miercoles">Miércoles</option>
                            <option value="jueves">Jueves</option>
                            <option value="viernes">Viernes</option>
                            <option value="sabado">Sábado</option>
                            <option value="domingo">Domingo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="capacity">Capacidad Máxima</label>
                        <input type="number" id="capacity" name="capacity" min="1" max="50" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="startTime">Hora de Inicio</label>
                        <input type="time" id="startTime" name="startTime" required>
                    </div>
                    <div class="form-group">
                        <label for="endTime">Hora de Fin</label>
                        <input type="time" id="endTime" name="endTime" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Descripción de la Clase</label>
                    <textarea id="description" name="description" rows="3"></textarea>
                </div>
                <div class="modal-actions">
                    <button type="button" class="secondary-btn" onclick="closeModal('scheduleModal')">Cancelar</button>
                    <button type="submit" class="primary-btn">Guardar Horario</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
        <ul>
            <li><a href="admin-usuarios.html">Usuarios</a></li>
            <li><a href="admin-entrenadores.html">Entrenadores</a></li>
            <li><a href="admin-pagos.html">Pagos</a></li>
            <li><a href="admin-horarios.html" class="active">Horarios</a></li>
        </ul>
    </div>

    <script src="../public/assets/js/admin-scripts.js"></script>
</body>
</html>