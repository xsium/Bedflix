const form = document.getElementById("message-form");
const textarea = document.getElementById("message-input");

textarea.addEventListener("keydown", (event) => {
  if (event.key === "Enter" && event.shiftKey == true) {
    // Add a new line
    console.log("new line");
  } else if (event.key === "Enter" && textarea.value.length > 0) {
    // Submit the form
    form.requestSubmit();
    event.preventDefault(); // Prevent default form behavior
  }
});
