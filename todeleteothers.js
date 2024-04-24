/* TYPE OF LEAVE "OTHERS" FUNCTION */
window.onload = function() {
  const textFieldContainer = document.getElementById("textFieldContainer");
  const dropdown = document.getElementById("myDropdown");

  // Hide the text field on page load
  textFieldContainer.classList.add("hidden");

  // Event listener for dropdown selection change (attached inside onload)
  dropdown.addEventListener("change", function() {
    if (this.value === "Others") {  
      textFieldContainer.classList.remove("hidden");
    } else {
      textFieldContainer.classList.add("hidden");
    }
  });
};