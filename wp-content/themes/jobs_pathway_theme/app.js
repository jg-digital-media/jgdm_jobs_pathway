// connection check - app.js
console.log("app.js connected - 06-11-2025 - 15:24");

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
    
    // Call function: Add Job form validation
    initializeAddJobValidation();
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

// Add Job form validation
function initializeAddJobValidation() {
    const addJobForm = document.getElementById('add-job-form');
    
    if (!addJobForm) {
        return;
    }
    
    setupAddJobValidation(addJobForm);
}

function setupAddJobValidation(form) {
    const companyNameField = form.querySelector('#company_name');
    const jobTitleField = form.querySelector('#job_title');
    const locationField = form.querySelector('#location');
    const salaryField = form.querySelector('#salary');
    const contactPersonField = form.querySelector('#contact_person');
    const contactDetailsField = form.querySelector('#contact_details');
    const descriptionField = form.querySelector('#description');
    
    // Validation on blur for required fields
    if (companyNameField) {
        companyNameField.addEventListener('blur', function() {
            if (this.value.trim()) {
                validateRequired(this, 'Company name is required');
            } else {
                removeFieldSuccess(this);
                removeFieldError(this);
            }
        });
    }
    
    if (jobTitleField) {
        jobTitleField.addEventListener('blur', function() {
            if (this.value.trim()) {
                validateRequired(this, 'Job title is required');
            } else {
                removeFieldSuccess(this);
                removeFieldError(this);
            }
        });
    }
    
    if (locationField) {
        locationField.addEventListener('blur', function() {
            if (this.value.trim()) {
                validateRequired(this, 'Location is required');
            } else {
                removeFieldSuccess(this);
                removeFieldError(this);
            }
        });
    }
    
    // Form submission validation
    form.addEventListener('submit', function(e) {
        let isValid = true;
        
        // Clear previous error messages
        clearValidationErrors(form);
        
        console.log('Add job form validation started');
        
        // Validate company name
        if (!validateRequired(companyNameField, 'Company name is required')) {
            console.log('Company name validation failed');
            isValid = false;
        }
        
        // Validate job title
        if (!validateRequired(jobTitleField, 'Job title is required')) {
            console.log('Job title validation failed');
            isValid = false;
        }
        
        // Validate location
        if (!validateRequired(locationField, 'Location is required')) {
            console.log('Location validation failed');
            isValid = false;
        }
        
        if (!isValid) {
            e.preventDefault();
            console.log('Form submission prevented due to validation errors');
        }
    });
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
    // WordPress login form uses 'log' for username and 'pwd' for password
    const usernameField = form.querySelector('#log');
    const passwordField = form.querySelector('#pwd');
    
    // Only validate if fields exist (WordPress login form)
    if (!usernameField || !passwordField) {
        console.log('Login form fields not found, skipping validation');
        return;
    }
    
    // Form submission validation
    form.addEventListener('submit', function(e) {
        let isValid = true;
        
        // Clear previous error messages
        clearValidationErrors(form);
        
        // Validate username/email
        if (!validateRequired(usernameField, 'Username or email is required')) {
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
    // Check if field exists first
    if (!field) {
        return true; // Skip validation if field doesn't exist
    }
    
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
    // Check if field exists first
    if (!field) {
        return true; // Skip validation if field doesn't exist
    }
    
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
    // Check if field exists first
    if (!field) {
        return true; // Skip validation if field doesn't exist
    }
    
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

// Job Profile Edit/Save Toggle Functionality
document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.getElementById('btn-toggle-edit');
    
    if (toggleButton) {
        toggleButton.addEventListener('click', function(e) {
            e.preventDefault();
            
            const currentMode = this.getAttribute('data-mode');
            const postId = this.getAttribute('data-post-id');
            
            if (currentMode === 'view') {
                // Switch to edit mode
                switchToEditMode(this);
            } else {
                // Save and switch back to view mode
                saveJobProfileChanges(this, postId);
            }
        });
    }
});

function switchToEditMode(button) {
    // Hide all view-mode elements
    document.querySelectorAll('.view-mode').forEach(el => {
        el.style.display = 'none';
    });
    
    // Show all edit-mode inputs
    document.querySelectorAll('.edit-mode').forEach(el => {
        el.style.display = 'block';
    });
    
    // Change button text and mode
    button.textContent = 'Save';
    button.setAttribute('data-mode', 'edit');
    // button.style.background = '#4CAF50';
    // button.style.background = '#4486ff;';
    
    console.log('Switched to edit mode');
}

function switchToViewMode(button) {
    // Hide all edit-mode inputs
    document.querySelectorAll('.edit-mode').forEach(el => {
        el.style.display = 'none';
    });
    
    // Show all view-mode elements
    document.querySelectorAll('.view-mode').forEach(el => {
        el.style.display = 'block';
    });
    
    // Change button text and mode
    button.textContent = 'Edit';
    button.setAttribute('data-mode', 'view');
    button.style.background = '';
    
    console.log('Switched to view mode');
}

function saveJobProfileChanges(button, postId) {
    console.log('Saving job profile changes for post:', postId);
    
    // Disable button while saving
    button.disabled = true;
    button.textContent = 'Saving...';
    
    // Collect all field values (includes text inputs and textareas)
    const fields = {};
    document.querySelectorAll('.job-edit-input, .job-edit-textarea').forEach(input => {
        const fieldName = input.getAttribute('data-field');
        fields[fieldName] = input.value;
        console.log(`Collected field: ${fieldName} = "${input.value}"`);
    });
    
    console.log('All fields to save:', fields);
    
    // Create FormData
    const formData = new FormData();
    formData.append('action', 'update_job_profile');
    formData.append('post_id', postId);
    formData.append('fields', JSON.stringify(fields));
    formData.append('nonce', jobPathwayAjax.nonce);
    
    // Send AJAX request
    fetch(jobPathwayAjax.ajaxurl, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log('Job profile saved successfully:', data);
            
            // Update view-mode displays with new values
            updateViewModeDisplays(fields);
            
            // Show success message
            showStatusMessage('Changes saved successfully!', 'success');
            
            // Switch back to view mode
            switchToViewMode(button);
            button.disabled = false;
        } else {
            console.error('Error saving job profile:', data);
            showStatusMessage('Error saving changes: ' + (data.data ? data.data.message : 'Unknown error'), 'error');
            button.disabled = false;
            button.textContent = 'Save';
        }
    })
    .catch(error => {
        console.error('AJAX error:', error);
        showStatusMessage('Error saving changes. Please check your connection.', 'error');
        button.disabled = false;
        button.textContent = 'Save';
    });
}

function updateViewModeDisplays(fields) {
    // Update company name
    const companySpan = document.querySelector('tr:nth-child(1) .view-mode');
    if (companySpan && fields.company_name) {
        companySpan.textContent = fields.company_name || 'Not provided';
    }
    
    // Update job title
    const jobTitleSpan = document.querySelector('tr:nth-child(2) .view-mode');
    if (jobTitleSpan && fields.job_title) {
        jobTitleSpan.textContent = fields.job_title || 'Not provided';
    }
    
    // Update salary
    const salarySpan = document.querySelector('tr:nth-child(3) .view-mode');
    if (salarySpan && fields.salary !== undefined) {
        salarySpan.textContent = fields.salary || 'Not specified';
    }
    
    // Update location
    const locationSpan = document.querySelector('tr:nth-child(4) .view-mode');
    if (locationSpan && fields.location) {
        locationSpan.textContent = fields.location || 'Not provided';
    }
    
    // Update contact person
    const contactPersonSpan = document.querySelector('tr:nth-child(5) .view-mode');
    if (contactPersonSpan && fields.contact_person !== undefined) {
        contactPersonSpan.textContent = fields.contact_person || 'Not provided';
    }
    
    // Update contact details
    const contactDetailsSpan = document.querySelector('tr:nth-child(6) .view-mode');
    if (contactDetailsSpan && fields.contact_details !== undefined) {
        contactDetailsSpan.textContent = fields.contact_details || 'Not provided';
    }
    
    // Update description
    const descriptionDiv = document.querySelector('#job---personal--notes .view-mode');
    if (descriptionDiv) {
        if (fields.description !== undefined && fields.description.trim() !== '') {

            // Convert line breaks to paragraphs (simple version)
            const paragraphs = fields.description.split('\n\n').map(p => {
                return '<p>' + p.replace(/\n/g, '<br>') + '</p>';
            }).join('');
            descriptionDiv.innerHTML = paragraphs;
        } else {
            descriptionDiv.innerHTML = '<p>No description was provided. Add a description here and click "Save" to confirm.</p>';
        }
    }
}

function showStatusMessage(message, type) {
    const messageDiv = document.getElementById('job-profile-status-message');
    if (messageDiv) {
        messageDiv.textContent = message;
        messageDiv.style.display = 'block';
        
        if (type === 'success') {
            messageDiv.style.background = '#e6ffe6';
            messageDiv.style.color = '#4CAF50';
            messageDiv.style.border = '1px solid #4CAF50';
        } else {
            messageDiv.style.background = '#ffe6e6';
            messageDiv.style.color = '#f44336';
            messageDiv.style.border = '1px solid #f44336';
        }
        
        // Auto-hide after 3 seconds
        setTimeout(() => {
            messageDiv.style.display = 'none';
        }, 3000);
    }
}

// Delete All Jobs Functionality
document.addEventListener('DOMContentLoaded', function() {
    const deleteButton = document.getElementById('btn-delete-all-jobs');
    const modal = document.getElementById('delete-confirm-modal');
    const confirmButton = document.getElementById('btn-confirm-delete');
    const cancelButton = document.getElementById('btn-cancel-delete');
    
    // Open modal when delete button is clicked
    if (deleteButton) {
        deleteButton.addEventListener('click', function(e) {
            e.preventDefault();
            if (modal) {
                modal.style.display = 'flex';
            }
        });
    }
    
    // Close modal when cancel button is clicked
    if (cancelButton) {
        cancelButton.addEventListener('click', function(e) {
            e.preventDefault();
            if (modal) {
                modal.style.display = 'none';
            }
        });
    }
    
    // Close modal when clicking outside the modal content
    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    }
    
    // Handle deletion when confirm button is clicked
    if (confirmButton && deleteButton) {
        confirmButton.addEventListener('click', function(e) {
            e.preventDefault();
            deleteAllJobs();
        });
    }
});

// Delete Single Job Functionality
document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('.button---single--job--delete');
    const modal = document.getElementById('delete-single-job-modal');
    const confirmButton = document.getElementById('btn-confirm-single-delete');
    const cancelButton = document.getElementById('btn-cancel-single-delete');
    const messageElement = document.getElementById('delete-single-job-message');
    
    let currentJobId = null;
    let currentJobTitle = '';
    let currentCompanyName = '';
    
    // Add click handlers to all delete buttons
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Get job data from button attributes
            currentJobId = this.getAttribute('data-job-id');
            currentJobTitle = this.getAttribute('data-job-title');
            currentCompanyName = this.getAttribute('data-company-name');
            
            // Update modal message with job details
            if (messageElement) {
                messageElement.innerHTML = `Really delete this job? <strong>"${currentJobTitle} at ${currentCompanyName}"</strong>`;
            }
            
            // Show modal
            if (modal) {
                modal.style.display = 'flex';
            }
        });
    });
    
    // Close modal when cancel button is clicked
    if (cancelButton) {
        cancelButton.addEventListener('click', function(e) {
            e.preventDefault();
            if (modal) {
                modal.style.display = 'none';
                currentJobId = null;
            }
        });
    }
    
    // Close modal when clicking outside
    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.style.display = 'none';
                currentJobId = null;
            }
        });
    }
    
    // Handle deletion when confirm button is clicked
    if (confirmButton) {
        confirmButton.addEventListener('click', function(e) {
            e.preventDefault();
            if (currentJobId) {
                deleteSingleJob(currentJobId);
            }
        });
    }
});

function deleteSingleJob(jobId) {
    console.log('Deleting job:', jobId);
    
    const confirmButton = document.getElementById('btn-confirm-single-delete');
    const modal = document.getElementById('delete-single-job-modal');
    
    // Disable button and show loading state
    if (confirmButton) {
        confirmButton.disabled = true;
        confirmButton.textContent = 'Deleting...';
    }
    
    // Create FormData
    const formData = new FormData();
    formData.append('action', 'delete_single_job');
    formData.append('post_id', jobId);
    formData.append('nonce', jobPathwayAjax.nonce);
    
    // Send AJAX request
    fetch(jobPathwayAjax.ajaxurl, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log('Job deleted successfully:', data);
            
            // Close modal
            if (modal) {
                modal.style.display = 'none';
            }
            
            // Reload page to update the list
            window.location.reload();
        } else {
            console.error('Error deleting job:', data);
            alert('Error deleting job: ' + (data.data ? data.data.message : 'Unknown error'));
            
            // Re-enable button
            if (confirmButton) {
                confirmButton.disabled = false;
                confirmButton.textContent = 'Yes, Delete';
            }
        }
    })
    .catch(error => {
        console.error('AJAX error:', error);
        alert('Error deleting job. Please check your connection.');
        
        // Re-enable button
        if (confirmButton) {
            confirmButton.disabled = false;
            confirmButton.textContent = 'Yes, Delete';
        }
    });
}

function deleteAllJobs() {
    console.log('Deleting all jobs for current user');
    
    const confirmButton = document.getElementById('btn-confirm-delete');
    const modal = document.getElementById('delete-confirm-modal');
    
    // Disable button and show loading state
    if (confirmButton) {
        confirmButton.disabled = true;
        confirmButton.textContent = 'Deleting...';
    }
    
    // Create FormData
    const formData = new FormData();
    formData.append('action', 'delete_all_user_jobs');
    formData.append('nonce', jobPathwayAjax.nonce);
    
    // Send AJAX request
    fetch(jobPathwayAjax.ajaxurl, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log('All jobs deleted successfully:', data);
            
            // Close modal
            if (modal) {
                modal.style.display = 'none';
            }
            
            // Show success message briefly
            showStatusMessage('All jobs deleted successfully! Redirecting...', 'success');
            
            // Redirect to dashboard after a brief delay
            setTimeout(() => {
                window.location.href = data.data.redirect_url || '/dashboard';
            }, 1500);
        } else {
            console.error('Error deleting jobs:', data);
            showStatusMessage('Error deleting jobs: ' + (data.data ? data.data.message : 'Unknown error'), 'error');
            
            // Re-enable button
            if (confirmButton) {
                confirmButton.disabled = false;
                confirmButton.textContent = 'Yes, Delete';
            }
        }
    })
    .catch(error => {
        console.error('AJAX error:', error);
        showStatusMessage('Error deleting jobs. Please check your connection.', 'error');
        
        // Re-enable button
        if (confirmButton) {
            confirmButton.disabled = false;
            confirmButton.textContent = 'Yes, Delete';
        }
    });
}