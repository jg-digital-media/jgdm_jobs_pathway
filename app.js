// connection check - app.js
console.log("app.js connected - 17-09-2025 - 14:15");

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
});