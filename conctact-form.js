// we want to validate this form using javascript.....

(function () {
    'use strict'

    // fetch all the form that needs validation.......
    var forms = document.querySelectorAll('.needs-validation')

    // loop over them and prevent from submission.....
    Array.prototype.slice.call(forms)
    .forEach( function (form){
        form.addEventListener('submit', function (event){
            if(!form.checkValidity()){
                event.preventDefault()
                event.stopPropagation()
            }
            form.classList.add('was-validated')
        }, false)
    })
})();