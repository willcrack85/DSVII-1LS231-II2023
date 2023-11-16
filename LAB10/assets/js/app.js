const wcMixin = Swal.mixin({
    toast: true,
    icon: 'success',
    title: 'General Title',
    hideClass: {
        popup: 'animated bounceOut', // Clase de animación para ocultar el cuadro de diálogo
    },
    position: 'top-right',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer);
        toast.addEventListener('mouseleave', Swal.resumeTimer);
    },
});

window.addEventListener('load', (event) => {
    wcMixin.fire({
        showClass: {
            popup: 'animated bounceIn', // Clase de animación para mostrar el adro de diálogo
        },
        title: 'Conectando con la Base de Datos...',
    });

    // const msjAlert = document.getElementById('msj').value;

    // if (msjAlert != '') {
    //     Swal.fire({
    //         title: 'DS7 - Prestar Atenci&oacute;n',
    //         text: msjAlert,
    //         icon: 'error',
    //     });
    // }
});
