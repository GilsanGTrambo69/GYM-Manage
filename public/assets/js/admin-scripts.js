// Admin Panel JavaScript Functions

// Modal Functions
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = 'flex';
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = 'none';
        modal.classList.remove('active');
        document.body.style.overflow = 'auto';
        
        // Reset form if exists
        const form = modal.querySelector('form');
        if (form) {
            form.reset();
        }
    }
}

// Close modal when clicking outside
window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
        event.target.style.display = 'none';
        event.target.classList.remove('active');
        document.body.style.overflow = 'auto';
    }
}

// Mobile Menu Functions
document.addEventListener('DOMContentLoaded', function() {
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');
    const closeBtn = document.querySelector('.mobile-menu .close-btn');

    if (mobileToggle && mobileMenu) {
        mobileToggle.addEventListener('click', function() {
            mobileMenu.classList.add('active');
        });
    }

    if (closeBtn && mobileMenu) {
        closeBtn.addEventListener('click', function() {
            mobileMenu.classList.remove('active');
        });
    }

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (mobileMenu && mobileMenu.classList.contains('active')) {
            if (!mobileMenu.contains(event.target) && !mobileToggle.contains(event.target)) {
                mobileMenu.classList.remove('active');
            }
        }
    });
});

// User Management Functions
function editUser(userId) {
    console.log('Editando usuario:', userId);
    // Aquí iría la lógica para cargar los datos del usuario en el modal
    openModal('userModal');
    
    // Cambiar el título del modal
    const modalTitle = document.querySelector('#userModal .modal-header h2');
    if (modalTitle) {
        modalTitle.textContent = 'Editar Usuario';
    }
    
    // Cambiar el texto del botón
    const submitBtn = document.querySelector('#userModal .primary-btn');
    if (submitBtn) {
        submitBtn.textContent = 'Actualizar Usuario';
    }
}

function deleteUser(userId) {
    if (confirm('¿Estás seguro de que quieres eliminar este usuario?')) {
        console.log('Eliminando usuario:', userId);
        // Aquí iría la lógica para eliminar el usuario
        alert('Usuario eliminado correctamente');
    }
}

// Trainer Management Functions
function editTrainer(trainerId) {
    console.log('Editando entrenador:', trainerId);
    openModal('trainerModal');
    
    const modalTitle = document.querySelector('#trainerModal .modal-header h2');
    if (modalTitle) {
        modalTitle.textContent = 'Editar Entrenador';
    }
    
    const submitBtn = document.querySelector('#trainerModal .primary-btn');
    if (submitBtn) {
        submitBtn.textContent = 'Actualizar Entrenador';
    }
}

function deleteTrainer(trainerId) {
    if (confirm('¿Estás seguro de que quieres eliminar este entrenador?')) {
        console.log('Eliminando entrenador:', trainerId);
        alert('Entrenador eliminado correctamente');
    }
}

// Schedule Management Functions
function editSchedule(scheduleId) {
    console.log('Editando horario:', scheduleId);
    openModal('scheduleModal');
    
    const modalTitle = document.querySelector('#scheduleModal .modal-header h2');
    if (modalTitle) {
        modalTitle.textContent = 'Editar Horario';
    }
    
    const submitBtn = document.querySelector('#scheduleModal .primary-btn');
    if (submitBtn) {
        submitBtn.textContent = 'Actualizar Horario';
    }
}

function deleteSchedule(scheduleId) {
    if (confirm('¿Estás seguro de que quieres eliminar este horario?')) {
        console.log('Eliminando horario:', scheduleId);
        alert('Horario eliminado correctamente');
    }
}

// Payment Management Functions
function viewPayment(paymentId) {
    console.log('Viendo detalles del pago:', paymentId);
    alert('Mostrando detalles del pago #' + paymentId);
}

function downloadReceipt(paymentId) {
    console.log('Descargando recibo del pago:', paymentId);
    alert('Descargando recibo del pago #' + paymentId);
}

function approvePayment(paymentId) {
    if (confirm('¿Confirmar el pago #' + paymentId + '?')) {
        console.log('Aprobando pago:', paymentId);
        alert('Pago aprobado correctamente');
        // Aquí iría la lógica para actualizar el estado del pago
    }
}

function retryPayment(paymentId) {
    if (confirm('¿Reintentar el procesamiento del pago #' + paymentId + '?')) {
        console.log('Reintentando pago:', paymentId);
        alert('Reintentando procesamiento del pago...');
        // Aquí iría la lógica para reintentar el pago
    }
}

// Form Validation
function validateForm(formElement) {
    const requiredFields = formElement.querySelectorAll('[required]');
    let isValid = true;
    
    requiredFields.forEach(field => {
        if (!field.value.trim()) {
            field.style.borderColor = 'var(--danger-color)';
            isValid = false;
        } else {
            field.style.borderColor = 'var(--border-color)';
        }
    });
    
    return isValid;
}

// Form Submissions
document.addEventListener('DOMContentLoaded', function() {
    // User Form Submission
    const userForm = document.querySelector('#userModal form');
    if (userForm) {
        userForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (validateForm(this)) {
                console.log('Guardando usuario...');
                alert('Usuario guardado correctamente');
                closeModal('userModal');
            } else {
                alert('Por favor, completa todos los campos requeridos');
            }
        });
    }
    
    // Trainer Form Submission
    const trainerForm = document.querySelector('#trainerModal form');
    if (trainerForm) {
        trainerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (validateForm(this)) {
                console.log('Guardando entrenador...');
                alert('Entrenador guardado correctamente');
                closeModal('trainerModal');
            } else {
                alert('Por favor, completa todos los campos requeridos');
            }
        });
    }
    
    // Schedule Form Submission
    const scheduleForm = document.querySelector('#scheduleModal form');
    if (scheduleForm) {
        scheduleForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const startTime = document.getElementById('startTime').value;
            const endTime = document.getElementById('endTime').value;
            
            if (startTime >= endTime) {
                alert('La hora de inicio debe ser anterior a la hora de fin');
                return;
            }
            
            if (validateForm(this)) {
                console.log('Guardando horario...');
                alert('Horario guardado correctamente');
                closeModal('scheduleModal');
            } else {
                alert('Por favor, completa todos los campos requeridos');
            }
        });
    }
});

// Table Search and Filter Functions
function searchTable(inputId, tableId) {
    const input = document.getElementById(inputId);
    const table = document.getElementById(tableId);
    
    if (input && table) {
        input.addEventListener('keyup', function() {
            const filter = this.value.toLowerCase();
            const rows = table.getElementsByTagName('tr');
            
            for (let i = 1; i < rows.length; i++) {
                const row = rows[i];
                const cells = row.getElementsByTagName('td');
                let found = false;
                
                for (let j = 0; j < cells.length; j++) {
                    if (cells[j].textContent.toLowerCase().indexOf(filter) > -1) {
                        found = true;
                        break;
                    }
                }
                
                row.style.display = found ? '' : 'none';
            }
        });
    }
}

// Initialize tooltips and other UI enhancements
document.addEventListener('DOMContentLoaded', function() {
    // Add loading states to buttons
    const buttons = document.querySelectorAll('.primary-btn, .secondary-btn');
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            if (this.type === 'submit') {
                const originalText = this.textContent;
                this.textContent = 'Procesando...';
                this.disabled = true;
                
                setTimeout(() => {
                    this.textContent = originalText;
                    this.disabled = false;
                }, 2000);
            }
        });
    });
    
    // Add hover effects to table rows
    const tableRows = document.querySelectorAll('.admin-table tbody tr');
    tableRows.forEach(row => {
        row.addEventListener('mouseenter', function() {
            this.style.backgroundColor = 'rgba(255, 255, 255, 0.05)';
        });
        
        row.addEventListener('mouseleave', function() {
            this.style.backgroundColor = '';
        });
    });
});