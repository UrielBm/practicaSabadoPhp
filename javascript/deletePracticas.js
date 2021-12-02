const handleDeletePractica = (id) => {
    Swal.fire({
        title: "Eliminar practica.",
        text: "¿Está seguro de eliminar esta práctica?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, Eliminar.",
        cancelButtonText: "No, cancelar",
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = `http://localhost/mi_app_reservas/views/practicas/delete_practica.php?id=${btoa(id)}`;
        }
    });
};