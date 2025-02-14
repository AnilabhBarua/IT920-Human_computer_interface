document.getElementById("studentForm").addEventListener("submit", function (event) {
    let isValid = true;

    // Get form elements
    let name = document.getElementById("name");
    let roll = document.getElementById("roll");
    let email = document.getElementById("email");
    let dob = document.getElementById("dob");
    let contact = document.getElementById("contact");

    // Trim whitespace from inputs
    name.value = name.value.trim();
    roll.value = roll.value.trim();
    email.value = email.value.trim();
    contact.value = contact.value.trim();

    // Name validation (only letters and spaces)
    let nameRegex = /^[A-Za-z\s]+$/;
    if (!nameRegex.test(name.value)) {
        alert("Name can only contain letters and spaces.");
        isValid = false;
    }

    // Roll number validation (only numbers)
    let rollRegex = /^[0-9]+$/;
    if (!rollRegex.test(roll.value)) {
        alert("Roll number should contain only numbers.");
        isValid = false;
    }

    // DOB validation (Minimum age: 18 years)
    let dobValue = new Date(dob.value);
    let today = new Date();
    let age = today.getFullYear() - dobValue.getFullYear();
    let monthDiff = today.getMonth() - dobValue.getMonth();
    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dobValue.getDate())) {
        age--; // Adjust age if the birthday hasn't occurred this year
    }
    if (age < 18) {
        alert("You must be at least 18 years old.");
        isValid = false;
    }

    // Contact number validation (exactly 10 digits)
    let contactRegex = /^[0-9]{10}$/;
    if (!contactRegex.test(contact.value)) {
        alert("Contact number must be exactly 10 digits.");
        isValid = false;
    }

    // Prevent form submission if validation fails
    if (!isValid) {
        event.preventDefault();
    }
});
 