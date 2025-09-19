// connection check - app.js
console.log("app.js connected - 19-09-2025 - 10:18");

// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    
    // Get all checkboxes with the class 'stage---completed--checkbox'
    const checkboxes = document.querySelectorAll('.stage---completed--checkbox');
    
    // Add event listener to each checkbox
    checkboxes.forEach(function(checkbox) {

        checkbox.addEventListener('change', function() {

            // Get the parent td element
            const parentTd = this.closest('td');
            
            if (parentTd) {

                // Toggle the 'stage---completed' class based on checkbox state
                if (this.checked) {
                    parentTd.classList.add('stage---completed');
                } else {
                    parentTd.classList.remove('stage---completed');
                }
            }
        });
        
        // Initialize the state based on existing classes
        const parentTd = checkbox.closest('td');

        if (parentTd && parentTd.classList.contains('stage---completed')) {

            checkbox.checked = true;
        }
    });
    
    // console.log('Checkbox toggle functionality initialized for', checkboxes.length, 'checkboxes');
    
    // Call function: Form validation functionality
    initializeFormValidation();
});

// Form validation functions
function initializeFormValidation() {
    const registerForm = document.querySelector('.form---register');
    const loginForm = document.querySelector('.form---login');
    
    if (registerForm) {
        setupRegisterValidation(registerForm);
    }
    
    if (loginForm) {
        setupLoginValidation(loginForm);
    }
}

function setupRegisterValidation(form) {
    const passwordField = form.querySelector('#password');
    const confirmPasswordField = form.querySelector('#confirm_password');
    const usernameField = form.querySelector('#username');
    const emailField = form.querySelector('#email');
    
    /* console.log('Register validation setup:', {
        passwordField: !!passwordField,
        confirmPasswordField: !!confirmPasswordField,
        usernameField: !!usernameField,
        emailField: !!emailField
    }); */
    
    // Real-time password matching validation
    if (passwordField && confirmPasswordField) {
        confirmPasswordField.addEventListener('input', function() {
            validatePasswordMatch(passwordField, confirmPasswordField);
        });
        
        passwordField.addEventListener('input', function() {
            if (confirmPasswordField.value) {
                validatePasswordMatch(passwordField, confirmPasswordField);
            }
        });
    }
    
    // Form submission validation
    form.addEventListener('submit', function(e) {
        let isValid = true;
        
        // Clear previous error messages
        clearValidationErrors(form);
        
        console.log('Register form validation started');
        
        // Validate username
        if (!validateRequired(usernameField, 'Username is required')) {
            console.log('Username validation failed: required');
            isValid = false;
        } else if (!validateMinLength(usernameField, 3, 'Username must be at least 3 characters')) {
            console.log('Username validation failed: min length');
            isValid = false;
        }
        
        // Validate email
        if (!validateRequired(emailField, 'Email is required')) {
            console.log('Email validation failed: required');
            isValid = false;
        } else if (!validateEmail(emailField, 'Please enter a valid email address')) {
            console.log('Email validation failed: format');
            isValid = false;
        }
        
        // Validate password
        if (!validateRequired(passwordField, 'Password is required')) {
            console.log('Password validation failed: required');
            isValid = false;
        } else if (!validateMinLength(passwordField, 6, 'Password must be at least 6 characters')) {
            console.log('Password validation failed: min length');
            isValid = false;
        }
        
        // Validate password confirmation
        if (!validateRequired(confirmPasswordField, 'Please confirm your password')) {
            isValid = false;
        } else if (!validatePasswordMatch(passwordField, confirmPasswordField)) {
            isValid = false;
        }
        
        if (!isValid) {
            e.preventDefault();
        }
    });
}

function setupLoginValidation(form) {
    const usernameField = form.querySelector('#username');
    const emailField = form.querySelector('#email');
    const passwordField = form.querySelector('#password');
    
    // Form submission validation
    form.addEventListener('submit', function(e) {
        let isValid = true;
        
        // Clear previous error messages
        clearValidationErrors(form);
        
        // Validate username
        if (!validateRequired(usernameField, 'Username is required')) {
            isValid = false;
        }
        
        // Validate email
        if (!validateRequired(emailField, 'Email is required')) {
            isValid = false;
        } else if (!validateEmail(emailField, 'Please enter a valid email address')) {
            isValid = false;
        }
        
        // Validate password
        if (!validateRequired(passwordField, 'Password is required')) {
            isValid = false;
        }
        
        if (!isValid) {
            e.preventDefault();
        }
    });
}

// Validation helper functions
function validateRequired(field, message) {
    if (!field.value.trim()) {
        showFieldError(field, message);
        return false;
    }
    removeFieldError(field);
    return true;
}

function validateMinLength(field, minLength, message) {
    if (field.value.trim().length < minLength) {
        showFieldError(field, message);
        return false;
    }
    removeFieldError(field);
    return true;
}

function validateEmail(field, message) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(field.value.trim())) {
        showFieldError(field, message);
        return false;
    }
    removeFieldError(field);
    return true;
}

function validatePasswordMatch(passwordField, confirmPasswordField) {
    if (passwordField.value !== confirmPasswordField.value) {
        showFieldError(confirmPasswordField, 'Passwords do not match');
        return false;
    }
    removeFieldError(confirmPasswordField);
    return true;
}

function showFieldError(field, message) {
    console.log('showFieldError called:', field.id || field.name, message);
    
    // Remove existing error
    removeFieldError(field);
    
    // Add error class to field
    field.classList.add('validation-error');
    
    // Create and insert error message
    const errorElement = document.createElement('div');
    errorElement.className = 'validation-error-message';
    errorElement.textContent = message;
    errorElement.setAttribute('data-field', field.id || field.name);    
    
    console.log('Created error element:', errorElement);
    
    // Create a unique container for this field's error message
    let errorContainer = field.parentNode.querySelector(`[data-error-container="${field.id}"]`);
    if (!errorContainer) {
        errorContainer = document.createElement('div');
        errorContainer.setAttribute('data-error-container', field.id);
        errorContainer.style.cssText = 'display: block; margin: 2px 0;';
        
        // Insert the container right after the field
        if (field.nextSibling) {
            field.parentNode.insertBefore(errorContainer, field.nextSibling);
        } else {
            field.parentNode.appendChild(errorContainer);
        }
    }
    
    // Clear any existing error messages in this container
    errorContainer.innerHTML = '';
    
    // Add the error message to the container
    errorContainer.appendChild(errorElement);
    
    // Verify the element was inserted and is visible
    setTimeout(() => {
        const insertedElement = document.querySelector(`#${field.id} + .validation-error-message, #${field.id} ~ .validation-error-message`);
        console.log('Error message in DOM:', !!insertedElement, insertedElement);
        if (insertedElement) {
            console.log('Element styles:', window.getComputedStyle(insertedElement));
        }
    }, 100);
}

function removeFieldError(field) {
    field.classList.remove('validation-error');
    
    // Remove the error container for this specific field
    const errorContainer = field.parentNode.querySelector(`[data-error-container="${field.id}"]`);
    if (errorContainer) {
        errorContainer.remove();
    }
}

function clearValidationErrors(form) {
    const errorFields = form.querySelectorAll('.validation-error');
    const errorMessages = form.querySelectorAll('.validation-error-message');
    
    errorFields.forEach(field => field.classList.remove('validation-error'));
    errorMessages.forEach(message => message.remove());
}