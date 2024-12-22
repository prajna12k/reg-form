$(document).ready(function() {
    // Submit form via AJAX
    $('#registrationForm').submit(function(e) {
        e.preventDefault();

        var formData = $(this).serialize(); // Serialize form data

        $.ajax({
            url: 'submit.php',
            type: 'POST',
            data: formData,
            success: function(response) {
                $('#responseMessage').html(response).show();
                $('#registrationForm')[0].reset(); // Reset form
            },
            error: function() {
                $('#responseMessage').html('An error occurred. Please try again.').show();
            }
        });
    });
});
