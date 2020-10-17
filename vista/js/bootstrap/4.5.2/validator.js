$('#eje4').bootstrapValidator({

    message: 'Este valor no es valido',

    feedbackIcons: {

        valid: 'fa fa-check',

        invalid: 'fa fa-hand-paper',

        validating: 'fa fa-circle'

    },

    fields: {

        nombre: {

            validators: {

                notEmpty: {

                    message: 'El nombre de usuario es requerido'

                }

            }

        },

        apellido: {

            validators: {

                notEmpty: {

                    message: 'el apellido es obligatorio'

                }

            }

        },

        inputTwitter: {

            validators: {

                notEmpty: {

                    message: 'El usuario de Twitter es obligatorio'

                },

                regexp:{
                    message: 'Ingrese una cadena válida'
                }

            }

        }

    }

});
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
