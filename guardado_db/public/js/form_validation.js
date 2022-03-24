$(window).on('load', (e) => {
    function show_message(type, title) {
        Swal.fire({
            position: 'center',
            icon: type,
            title: title,
            showConfirmButton: true,
        });
    }

    $('#register-form').validate({
        rules: {
            pass: {
                required: true
            },
            pass_confirmation: {
                equalTo : "#pass"
            },
            nombre: {
                required: true
            },
            primer_apellido: {
                required: true
            },
            segundo_apellido: {
                required: true
            },
            genero: {
                required: true
            },
            fecha_nac: {
                required: true,
                date: true
            }
        },
        messages: {
            pass: {
                required: "Contraseña requerida"
            },
            pass_confirmation: {
                equalTo: "La confirmación no coincide con la contraseña"
            },
            nombre: {
                required: 'Nombre requerido'
            },
            primer_apellido: {
                required: 'Primer apellido requerido'
            },
            segundo_apellido: {
                required: 'Segundo apellido requerido'
            },
            genero: {
                required: 'Género requerido'
            },
            fecha_nac: {
                required: 'Fecha de nacimiento requerida',
            }
        },
        submitHandler: function (form) {
            Swal.fire({
                title: '¿Los datos son correctos?',
                text: "Asegurate de que los datos ingresados sean correctos",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, registrar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }else {
                    return false;
                }
            });
        }
    });
});
