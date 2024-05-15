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
        var trashAmountInput = document.getElementById('trashAmount');
        var errorMessage = document.getElementById('error-message');
        var errorMessageAmount = document.getElementById('error-message-amount');
        var backButton = document.getElementById('backButton'); 
        var additionalForm = document.getElementById('additionalForm');

        if (button.innerHTML === 'OPEN') {
            if (!trashcodeInput.value.trim()) {
                errorMessage.textContent = 'The trashcode field is required.';
                return;
            } else {
                errorMessage.textContent = ''; 
            }
            trashcodeInput.disabled = true;
            backButton.style.display = 'none';
            additionalForm.style.display = 'block';
            button.innerHTML = 'CLOSE';
            button.classList.remove('btn-success');
            button.classList.add('btn-danger');
        } else {
            if (!trashAmountInput.value.trim()) {
                errorMessageAmount.textContent = 'The trashamount field is required.';
                return;
            } else {
                errorMessageAmount.textContent = ''; 
            }

            var form = document.getElementById('trashForm');
            var formData = new FormData(form);

            // Kirim data formulir menggunakan Fetch API
            fetch(form.action, {
                method: form.method,
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                // Setelah berhasil dikirim, alihkan ke halaman histori pembuangan sampah
                window.location.href = "/user/historibuangsampah";
            })
            .catch(error => console.error('There was a problem with the fetch operation:', error));

            // Nonaktifkan tombol dan sembunyikan formulir tambahan saat formulir sedang dikirim
            button.disabled = true;
            trashcodeInput.disabled = true;
            additionalForm.style.display = 'none';
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