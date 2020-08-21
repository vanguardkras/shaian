document.querySelectorAll('.feature-icon').forEach(function (element) {
    element.addEventListener('click', function() {
        if (element.classList.contains('full')) {
            element.classList.remove('full');
        } else {
            element.classList.add('full');
        }
    });
});