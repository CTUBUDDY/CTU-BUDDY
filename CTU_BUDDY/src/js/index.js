document.addEventListener("DOMContentLoaded", () => {
  const subscribeButtons = document.querySelectorAll(".subscribe-btn");

  // Function to initialize button states based on localStorage
  subscribeButtons.forEach((button) => {
    const courseName =
      button.previousElementSibling.previousElementSibling.innerText;

    // Check localStorage for subscription status
    if (localStorage.getItem(courseName) === "subscribed") {
      button.innerText = "Unsubscribe"; // Set text to "Unsubscribe" if already subscribed
      button.classList.add("unsubscribe"); // Add "unsubscribe" class
    } else {
      button.innerText = "Subscribe"; // Default to "Subscribe"
      button.classList.remove("unsubscribe"); // Ensure "unsubscribe" class is removed
    }

    // Attach click event listener
    button.addEventListener("click", function () {
      // Validate course name
      if (!courseName) {
        alert("Course name is not available.");
        return;
      }

      const isSubscribed = localStorage.getItem(courseName) === "subscribed";

      if (isSubscribed) {
        // Unsubscribe logic
        localStorage.removeItem(courseName);
        this.innerText = "Subscribe"; // Change button text back to "Subscribe"
        this.classList.remove("unsubscribe"); // Remove "unsubscribe" class
        alert(`You have successfully unsubscribed from ${courseName}.`);
      } else {
        // Subscribe logic
        localStorage.setItem(courseName, "subscribed");
        this.innerText = "Unsubscribe"; // Change button text to "Unsubscribe"
        this.classList.add("unsubscribe"); // Add "unsubscribe" class
        alert(
          `You have successfully subscribed to ${courseName}! You can now view its timetable.`
        );

        // Redirect to timetable page with course name as a parameter
        window.location.href = `timetable.html?course=${encodeURIComponent(
          courseName
        )}`;
      }
    });
  });
});
const userData = localStorage.getItem("user");
if (userData) {
  const user = JSON.parse(userData);
  console.log("Logged in user:", user);
  // You can now use user.username and user.email as needed
}

const poes = document.querySelector("nav h3 a");
poes.addEventListener("click", (e) => {
  e.target.textContent = "L. Vumani";
});
