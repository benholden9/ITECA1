function ready() {
    // Existing code...

    // Modify the login button click event
    var loginButton = document.getElementById('signup-button');
    loginButton.addEventListener('click', function() {
        // Redirect to the home page
        window.location.href = 'home.html';
    });

    // Existing code...
}
