// connection check - app.js
console.log("app.js connected - 29-10-2025 - 12:34");

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
            
            // Save checkbox state to database via AJAX
            const postId = this.getAttribute('data-post-id');
            const fieldName = this.getAttribute('data-field');
            const isChecked = this.checked ? 1 : 0;
            
            if (postId && fieldName) {
                saveCheckboxState(postId, fieldName, isChecked);
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
    const passwordField = form.querySelector('#userpass');
    const confirmPasswordField = form.querySelector('#confirm_password');
    const usernameField = form.querySelector('#username');
    const emailField = form.querySelector('#email');
    
    /* console.log('Register validation setup:', {
        passwordField: !!passwordField,
        confirmPasswordField: !!confirmPasswordField,
        usernameField: !!usernameField,
        emailField: !!emailField
    }); */
    
    // Validation on blur (when user leaves field) - more user-friendly
    if (usernameField) {
        usernameField.addEventListener('blur', function() {
            if (this.value.trim()) {
                validateRequired(this, 'Username is required') && validateMinLength(this, 3, 'Username must be at least 3 characters');
            } else {
                removeFieldSuccess(this);
                removeFieldError(this);
            }
        });
    }
    
    if (emailField) {
        emailField.addEventListener('blur', function() {
            if (this.value.trim()) {
                validateRequired(this, 'Email is required') && validateEmail(this, 'Please enter a valid email address');
            } else {
                removeFieldSuccess(this);
                removeFieldError(this);
            }
        });
    }
    
    if (passwordField) {
        passwordField.addEventListener('blur', function() {
            if (this.value.trim()) {
                validateRequired(this, 'Password is required') && validateMinLength(this, 6, 'Password must be at least 6 characters');
                // Also re-validate confirm password if it has a value
                if (confirmPasswordField && confirmPasswordField.value) {
                    validatePasswordMatch(passwordField, confirmPasswordField);
                }
            } else {
                removeFieldSuccess(this);
                removeFieldError(this);
            }
        });
    }
    
    // Password matching validation - only on blur and input for confirm password
    if (passwordField && confirmPasswordField) {
        confirmPasswordField.addEventListener('blur', function() {
            if (this.value.trim() && passwordField.value.trim()) {
                validatePasswordMatch(passwordField, confirmPasswordField);
            } else if (!this.value.trim()) {
                removeFieldSuccess(this);
                removeFieldError(this);
            }
        });
        
        // Keep input validation ONLY for password matching (since it's helpful to see immediately)
        confirmPasswordField.addEventListener('input', function() {
            if (this.value.trim() && passwordField.value.trim()) {
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
        removeFieldSuccess(field);
        return false;
    }
    removeFieldError(field);
    showFieldSuccess(field);
    return true;
}

function validateMinLength(field, minLength, message) {
    if (field.value.trim().length < minLength) {
        showFieldError(field, message);
        removeFieldSuccess(field);
        return false;
    }
    removeFieldError(field);
    showFieldSuccess(field);
    return true;
}

function validateEmail(field, message) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(field.value.trim())) {
        showFieldError(field, message);
        removeFieldSuccess(field);
        return false;
    }
    removeFieldError(field);
    showFieldSuccess(field);
    return true;
}

function validatePasswordMatch(passwordField, confirmPasswordField) {
    if (passwordField.value !== confirmPasswordField.value) {
        showFieldError(confirmPasswordField, 'Passwords do not match');
        removeFieldSuccess(confirmPasswordField);
        return false;
    }
    removeFieldError(confirmPasswordField);
    showFieldSuccess(confirmPasswordField, 'Passwords match!');
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

function showFieldSuccess(field, message = '') {
    console.log('showFieldSuccess called:', field.id || field.name, message);
    
    // Remove any existing error states
    removeFieldError(field);
    removeFieldSuccess(field);
    
    // Add success class to field
    field.classList.add('validation-success');
    
    // Create a wrapper for the field and icon if it doesn't exist
    let fieldWrapper = field.parentNode.querySelector(`[data-field-wrapper="${field.id}"]`);
    if (!fieldWrapper) {
        fieldWrapper = document.createElement('div');
        fieldWrapper.setAttribute('data-field-wrapper', field.id);
        fieldWrapper.style.cssText = 'position: relative; display: inline-block; width: 100%;';
        
        // Wrap the field
        field.parentNode.insertBefore(fieldWrapper, field);
        fieldWrapper.appendChild(field);
    }
    
    // Add success tick icon to the wrapper
    const successIcon = document.createElement('span');
    successIcon.className = 'validation-success-icon';
    successIcon.setAttribute('data-success-icon', field.id || field.name);
    
    // Position the icon within the wrapper
    fieldWrapper.appendChild(successIcon);
    
    console.log('Success icon added for field:', field.id, successIcon);
    console.log('Field wrapper:', fieldWrapper);
    console.log('Total success icons in wrapper:', fieldWrapper.querySelectorAll('.validation-success-icon').length);
    
    // Optionally add success message
    if (message) {
        const successContainer = document.createElement('div');
        successContainer.setAttribute('data-success-container', field.id);
        successContainer.style.cssText = 'display: block; margin: 2px 0;';
        
        const successElement = document.createElement('div');
        successElement.className = 'validation-success-message';
        successElement.textContent = message;
        successElement.setAttribute('data-field', field.id || field.name);
        
        successContainer.appendChild(successElement);
        
        // Insert after the wrapper
        if (fieldWrapper.nextSibling) {
            fieldWrapper.parentNode.insertBefore(successContainer, fieldWrapper.nextSibling);
        } else {
            fieldWrapper.parentNode.appendChild(successContainer);
        }
    }
}

function removeFieldSuccess(field) {
    field.classList.remove('validation-success');
    
    // Find the field wrapper
    const fieldWrapper = field.parentNode.closest(`[data-field-wrapper="${field.id}"]`) || 
                        document.querySelector(`[data-field-wrapper="${field.id}"]`);
    
    // Remove success icon from wrapper
    if (fieldWrapper) {
        const successIcon = fieldWrapper.querySelector(`[data-success-icon="${field.id}"]`);
        if (successIcon) {
            successIcon.remove();
        }
    }
    
    // Remove success message container from the parent of the wrapper
    const successContainer = document.querySelector(`[data-success-container="${field.id}"]`);
    if (successContainer) {
        successContainer.remove();
    }
}

function clearValidationErrors(form) {
    const errorFields = form.querySelectorAll('.validation-error');
    const errorMessages = form.querySelectorAll('.validation-error-message');
    
    errorFields.forEach(field => field.classList.remove('validation-error'));
    errorMessages.forEach(message => message.remove());
}

// Function to save checkbox state via AJAX
function saveCheckboxState(postId, fieldName, value) {
    console.log('Saving checkbox state:', postId, fieldName, value);
    
    // Create FormData object
    const formData = new FormData();
    formData.append('action', 'update_job_meta');
    formData.append('post_id', postId);
    formData.append('field_name', fieldName);
    formData.append('value', value);
    formData.append('nonce', jobPathwayAjax.nonce);
    
    // Send AJAX request
    fetch(jobPathwayAjax.ajaxurl, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log('Checkbox state saved successfully:', data);
        } else {
            console.error('Error saving checkbox state:', data);
            alert('Error saving changes. Please try again.');
        }
    })
    .catch(error => {
        console.error('AJAX error:', error);
        alert('Error saving changes. Please check your connection.');
    });
}