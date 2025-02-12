document.getElementById("studentForm").addEventListener("submit", function (event) {
    let name = document.getElementById("name");
    let roll = document.getElementById("roll");
    let email = document.getElementById("email");
    let dob = document.getElementById("dob");
    let gender = document.getElementById("gender");
    let department = document.getElementById("department");
    let course = document.getElementById("course");
    let contact = document.getElementById("contact");
    let address = document.getElementById("address");

    let isValid = true;

    // Reset previous error styles
    function resetBorder(element) {
        element.style.border = "1px solid #ccc";
    }

    function showError(element) {
        element.style.border = "2px solid red";
        isValid = false;
    }

    resetBorder(name);
    resetBorder(roll);
    resetBorder(email);
    resetBorder(dob);
    resetBorder(gender);
    resetBorder(department);
    resetBorder(course);
    resetBorder(contact);
    resetBorder(address);

    // Name Validation
    if (name.value.trim() === "") {
        showError(name);
    }

    // Roll Number Validation
    if (roll.value.trim() === "") {
        showError(roll);
    }

    // Email Validation
    if (email.value.trim() === "" || !email.value.includes("@")) {
        showError(email);
    }

    // DOB Validation
    if (dob.value === "") {
        showError(dob);
    }

    // Gender Validation
    if (gender.value === "") {
        showError(gender);
    }

    // Department Validation
    if (department.value.trim() === "") {
        showError(department);
    }

    // Course Validation
    if (course.value.trim() === "") {
        showError(course);
    }

    // Contact Number Validation
    let phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(contact.value)) {
        showError(contact);
    }

    // Address Validation
    if (address.value.trim() === "") {
        showError(address);
    }

    // Stop form submission if there are errors
    if (!isValid) {
        event.preventDefault();
        alert("Please fill in all required fields correctly.");
    }
});
