function handleDropdownChange(dropdown) {
    const selectedValue = dropdown.value;
    
    // Update both dropdowns to show the same selection
    document.getElementById('user-login-dropdown').value = selectedValue;
    document.getElementById('admin-login-dropdown').value = selectedValue;

    // Show the appropriate form based on dropdown selection
    if (selectedValue === 'user') {
        document.getElementById('user-form').classList.remove('hidden');
        document.getElementById('admin-form').classList.add('hidden');
        document.getElementById('signup-form').classList.add('hidden');
    } else if (selectedValue === 'admin') {
        document.getElementById('admin-form').classList.remove('hidden');
        document.getElementById('user-form').classList.add('hidden');
        document.getElementById('signup-form').classList.add('hidden');
    }
}

function toggleSignup() {
    document.getElementById('signup-form').classList.remove('hidden');
    document.getElementById('user-form').classList.add('hidden');
    document.getElementById('admin-form').classList.add('hidden');
}
function closeSignup() {
  document.getElementById('signup-form').classList.add('hidden');
  document.getElementById('user-form').classList.remove('hidden');
}
// Initialize with user form visible
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('user-form').classList.remove('hidden');
    document.getElementById('admin-form').classList.add('hidden');
    document.getElementById('signup-form').classList.add('hidden');
});
  