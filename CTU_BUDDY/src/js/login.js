// Function to handle form submission and validate user data from Users.txt
document.getElementById('loginForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const enteredUsername = document.getElementById('username').value;
    const enteredPassword = document.getElementById('password').value;

    if (enteredUsername && enteredPassword) {
        // Fetch Users.txt file and compare entered credentials
        fetch('Users.txt')
            .then(response => response.text())
            .then(data => {
                // Split data into lines and process each line as a username-password pair
                const users = data.split('\n').map(line => line.split(','));

                // Check if entered username and password match any in the file
                let isValid = false;

                users.forEach(user => {
                    const [username, password] = user;
                    if (username.trim() === enteredUsername && password.trim() === enteredPassword) {
                        isValid = true;
                    }
                });

                // Display appropriate message
                if (isValid) {
                    document.getElementById('message').innerText = 'Accepted!';
                    document.getElementById('message').style.color = 'green';
                } else {
                    document.getElementById('message').innerText = 'Invalid credentials!';
                    document.getElementById('message').style.color = 'red';
                }
            })
            .catch(error => {
                // Handle error in fetching the file
                document.getElementById('message').innerText = 'Error fetching user data!';
                document.getElementById('message').style.color = 'red';
            });
    } else {
        // Handle case where either username or password is missing
        document.getElementById('message').innerText = 'Please enter both username and password!';
        document.getElementById('message').style.color = 'red';
    }
});

// Function to display saved user data (remains unchanged)
function displayUserData() {
    const user = JSON.parse(localStorage.getItem('user'));
    if (user) {
        document.getElementById('message').innerText = `Saved User: ${user.username}`;
    } else {
        document.getElementById('message').innerText = 'No user data found.';
    }
}

// Call this function if you want to display user data when the page loads
displayUserData();
