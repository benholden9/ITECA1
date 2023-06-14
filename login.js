// Function to handle the login form submission
function handleLogin(event) {
    event.preventDefault(); // Prevent the default form submission behavior

    // Get the values entered in the username and password fields
    var username = document.querySelector('input[name="username"]').value;
    var password = document.querySelector('input[name="password"]').value;

    // Perform any necessary validation or processing on the username and password

    // Send an AJAX request to the server with the login data
    // Replace the 'url' with the actual endpoint URL for the login functionality
    var url = 'login.php';
    var xhr = new XMLHttpRequest();
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          // Login successful, handle the response from the server
        var response = JSON.parse(xhr.responseText);
          // Handle the response based on success or failure
        if (response.success) {
            // Redirect the user to the desired page after successful login
            window.location.href = 'home.html';
        } else {
            // Display an error message to the user
            alert('Login failed. Please check your credentials.');
        }
        } else {
          // Error handling for server response
        alert('Login request failed. Please try again later.');
        }
    }
    };
    // Prepare the login data to be sent in the request body
    var formData = 'username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password);
    // Send the request with the login data
    xhr.send(formData);
}

  // Add an event listener to the login form submit button
var loginForm = document.querySelector('form');
loginForm.addEventListener('submit', handleLogin);
