document.getElementById('registration-form').addEventListener('submit', function (event) {
    const ownerName = document.getElementById('owner-name').value;
    const landLocation = document.getElementById('land-location').value;
    const landSize = document.getElementById('land-size').value;
    const contact = document.getElementById('contact').value;

    if (!ownerName || !landLocation || !landSize || !contact) {
        alert('Please fill in all fields.');
        event.preventDefault();
    } else {
        alert('Form submitted successfully.');
    }
});
