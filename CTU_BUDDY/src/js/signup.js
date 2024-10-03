// Handle form submission to sign up a user and write data to Users.txt
document.getElementById('signupForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if (username && email && password) {
        // Prepare user data in the correct format
        const userData = `${username},${password},${email}\n`;

        // Use fetch API to write the user data to Users.txt
        fetch('Users.txt', {
            method: 'POST',
            headers: {
                'Content-Type': 'text/plain'
            },
            body: userData
        })
        .then(response => {
            if (response.ok) {
                document.getElementById('message').innerText = 'User registered successfully!';
                document.getElementById('message').style.color = 'green';
            } else {
                throw new Error('Failed to register user');
            }
        })
        .catch(error => {
            document.getElementById('message').innerText = 'Error saving user data!';
            document.getElementById('message').style.color = 'red';
        });
    } else {
        document.getElementById('message').innerText = 'Please fill in all fields!';
        document.getElementById('message').style.color = 'red';
    }
});
