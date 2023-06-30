var checkbox = document.getElementById("check-startup");
var additionalInputDiv = document.getElementById("additional-input");

  checkbox.addEventListener("change", function() {
    if (checkbox.checked) {
      additionalInputDiv.style.display = "block";
    } else {
      additionalInputDiv.style.display = "none";
    }
  });