//Con imagen de fondo
function imgSplash(string) {
    Swal.fire({
        title: 'Vista panoramica del lugar',
        imageUrl: string,
        imageHeight: 480,
        imageAlt: 'A tall image',
        footer: '<a href="https://willcrackcorp.w3spaces.com/" title="WillCrack Solutions Corp., Panam&aacute;" target="_blank">WC Solutions Corp.</a> Copyright &copy; DS 7 - 2023',
    });
}

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

    const msjAlert = document.getElementById('msj').value;

    if (msjAlert != '') {
        Swal.fire({
            title: 'DS7 - Prestar Atenci&oacute;n',
            text: msjAlert,
            icon: 'error',
        });
    }
});

function cargar(id, titulo, texto, categoria, fecha, imagen) {
    document.getElementById('txtId').value = '00000000' + id;
    document.getElementById('txtTitulo').value = titulo;
    document.getElementById('txtCategoria').value = categoria;
    document.getElementById('txtFecha').value = fecha;
    document.getElementById('txtTexto').value = texto;
    document.getElementById('imgFotos').src = 'assets\\img\\' + imagen;
}
