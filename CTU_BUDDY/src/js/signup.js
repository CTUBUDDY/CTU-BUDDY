const signupForm = document.getElementById("signupForm");
const messageDiv = document.getElementById("message");

signupForm.addEventListener("submit", async (event) => {
  event.preventDefault();

  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const username = document.getElementById("username").value;
  const data = {
    username: username,
    email: email,
    password: password,
  };

  console.log(JSON.stringify(data));

  // Simulate a signup process
  const response = { ok: true, message: "Signup successful!" }; // Simulated response for success

  try {
    if (!response.ok) {
      throw new Error(response.message || "Network response was not ok");
    }

    messageDiv.textContent = response.message || "Signup successful!";

    // Call function to save data as JSON file upon successful signup
    saveDataAsJSON(data);
  } catch (error) {
    console.error("Error during signup:", error);
    messageDiv.textContent = "An error occurred: " + error.message;
  }
});

// Function to save data as JSON
function saveDataAsJSON(data) {
  const jsonString = JSON.stringify(data, null, 2); // Convert data to JSON string
  const blob = new Blob([jsonString], { type: "application/json" }); // Create a blob
  const url = URL.createObjectURL(blob); // Create a URL for the blob

  const a = document.createElement("a"); // Create a link element
  a.href = url; // Set the href to the blob URL
  a.download = "signupData.json"; // Set the desired file name
  document.body.appendChild(a); // Append the link to the body
  a.click(); // Trigger a click on the link to download
  document.body.removeChild(a); // Remove the link after download
  URL.revokeObjectURL(url); // Revoke the blob URL
}
