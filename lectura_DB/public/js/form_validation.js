$(window).on('load', (e) => {
    $('#register-form').validate({
        rules: {
            name: {
                required: true
            },
            publisher: {
                required: true
            },
            genre: {
                required: true
            },
            release: {
                required: true,
                date: true
            }
        },
        messages: {
            name: {
                required: 'Name required'
            },
            publisher: {
                required: 'Publisher required'
            },
            genre: {
                required: 'Genre required'
            },
            release: {
                required: 'Release required'
            },
        },
        submitHandler: function (form) {
            Swal.fire({
                title: 'Is the data correct?',
                text: "Make sure that the data is correct",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, register',
                cancelButtonText: 'Cancel'
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
