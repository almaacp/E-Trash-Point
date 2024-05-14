// admin
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
function verif(button) {
    button.textContent = "Terverifikasi";
    button.disabled = true;
    button.classList.remove('btn-outline-danger');
    button.classList.add('btn-success');
}

// ambil hadiah
function claimGift(button) {
    button.textContent = "Sudah Diambil";
    button.disabled = true;
    button.classList.remove('btn-outline-danger');
    button.classList.add('btn-success');
}