document.addEventListener("DOMContentLoaded", function () {
  var enrollButton = document.getElementById("enroll-button");

  enrollButton.addEventListener("click", function (e) {
    e.preventDefault(); // Prevents the default action (e.g., form submission)

    window.location.href = "register.html"; // Redirects to register.html
  });
});

function hideCheckboxes() {
    var checkboxes = document.getElementById('checkbox-row');
    checkboxes.style.display = 'none';
}

function showCheckboxes() {
    var checkboxes = document.getElementById('checkbox-row');
    checkboxes.style.display = 'table-row';
}

// Initially hide checkboxes when the page loads
window.onload = function() {
    hideCheckboxes();
};

