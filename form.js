document.getElementById("contact-form").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent form submission

  var form = event.target;
  var formData = new FormData(form);

  fetch(form.action, {
    method: form.method,
    body: formData
  })
  .then(response => response.text())
  .then(data => {
    console.log(data); // Handle server response
    form.reset(); // Clear the form
  })
  .catch(error => {
    console.error("Error:", error);
  });
});
