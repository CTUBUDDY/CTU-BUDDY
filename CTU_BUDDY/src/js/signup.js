const signupForm = document.getElementById("signupForm");

signupForm.addEventListener("submit", async (event) => {
  event.preventDefault();

  // Get the values from the form inputs
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const username = document.getElementById("username").value;

  // Check if all fields are filled in
  if (!username || !email || !password) {
    alert("Please fill in all fields."); // Alert to the user if any field is missing
    return;
  }

  const data = { username, email, password };

  try {
    // Send POST request to the backend
    const response = await fetch("http://localhost:8000/auth/signup", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    });

    const result = await response.json();

    if (!response.ok) {
      throw new Error(result.message || "Error occurred during signup.");
    }

    // Handle successful signup
    console.log("Signup successful!", result);
    window.location.href = "http://localhost:8000";
  } catch (error) {
    console.error("Error during signup:", error);
  }
});
