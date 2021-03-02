require('./bootstrap');
import bootstrap from 'bootstrap'

document.querySelectorAll('form').forEach(function(form) {
    form.addEventListener('submit', function() {
        form.querySelector('[type="submit"]').setAttribute('disabled', 'disabled');
    }, false);
});
