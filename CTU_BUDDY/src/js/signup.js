const signupForm = document.getElementById("signupForm");
const messageDiv = document.getElementById("message");

signupForm.addEventListener("submit", async (event) => {
  event.preventDefault();

  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const data = {
    email: email,
    password: password,
  };
  // const data = Object.fromEntries(formData.entries());
  console.log(data);

  const response = await fetch("/auth/signup", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(data),
  });

  const result = await response.json();
  messageDiv.textContent = result.message;
});
