document.addEventListener("DOMContentLoaded", () => {
  const subscribeButtons = document.querySelectorAll(".subscribe-btn");

  subscribeButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const courseName =
        this.previousElementSibling.previousElementSibling.innerText;

      // Validate course name
      if (!courseName) {
        alert("Course name is not available.");
        return;
      }

      console.log(courseName);
      const isSubscribed = localStorage.getItem(courseName) === "subscribed";

      if (isSubscribed) {
        // Unsubscribe logic
        localStorage.removeItem(courseName);
        this.innerText = "Subscribe";
        this.classList.remove("unsubscribe");
        alert(`You have successfully unsubscribed from ${courseName}.`);
      } else {
        // Subscribe logic
        localStorage.setItem(courseName, "subscribed");
        this.innerText = "Unsubscribe";
        this.classList.add("unsubscribe");
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
