function show_message(type, title) {
    Swal.fire({
        position: 'center',
        icon: type,
        title: title,
        showConfirmButton: true,
    });
}