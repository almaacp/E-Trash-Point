// front
document.addEventListener("DOMContentLoaded", function() {
    var animatedElements = document.querySelectorAll('.animated-content');
    function animateElements() {
        animatedElements.forEach(function(element, index) {
            setTimeout(function() {
                element.classList.add('animated');
            }, index * 200); 
        });
    }
    setTimeout(animateElements, 100);
});

// buang sampah
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('openCloseButton').addEventListener('click', function(event) {
        event.preventDefault();

        var button = document.getElementById('openCloseButton');
        var trashcodeInput = document.getElementById('trashcode');
        var trashAmountInput = document.getElementById('trashAmount'); // Get the trash amount input element
        var errorMessage = document.getElementById('error-message');
        var errorMessageAmount = document.getElementById('error-message-amount'); // Get the error message span for trash amount
        var backButton = document.getElementById('backButton'); 
        var additionalForm = document.getElementById('additionalForm'); // New element for additional form

        if (button.innerHTML === 'OPEN') {
            if (!trashcodeInput.value.trim()) {
                errorMessage.textContent = 'The trashcode field is required.';
                return;
            } else {
                errorMessage.textContent = ''; 
            }
            trashcodeInput.disabled = true;
            backButton.style.display = 'none';
            additionalForm.style.display = 'block'; // Show the additional form
            button.innerHTML = 'CLOSE';
            button.classList.remove('btn-success');
            button.classList.add('btn-danger');
        } else {
            // Check if the trash amount is filled
            if (!trashAmountInput.value.trim()) {
                errorMessageAmount.textContent = 'The trashamount field is required.';
                return;
            } else {
                errorMessageAmount.textContent = ''; 
            }

            var confirmation = confirm('Apakah Anda yakin ingin menutup tempat sampah?');
            if (confirmation) {
                window.location.href = "/user/historibuangsampah";
            } else {
                button.innerHTML = 'CLOSE';            
                button.classList.remove('btn-success');
                button.classList.add('btn-danger');
                trashcodeInput.disabled = true;
                backButton.style.display = 'none';
                additionalForm.style.display = 'block'; // Ensure the additional form remains visible
            }
        }
    });
});

// home
$(document).ready(function() {
    $('#carouselExampleIndicators').carousel({
        interval: 15000
    });
});

// password
function togglePasswordVisibility(inputId, toggleId) {
    var passwordInput = document.getElementById(inputId);
    var passwordToggle = document.getElementById(toggleId);

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordToggle.classList.remove("fa-eye-slash");
        passwordToggle.classList.add("fa-eye");
    } else {
        passwordInput.type = "password";
        passwordToggle.classList.remove("fa-eye");
        passwordToggle.classList.add("fa-eye-slash");
    }
}