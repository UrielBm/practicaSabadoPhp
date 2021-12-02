//declaración de variables

const registerFormPracticas = document.querySelector("#registerPracticas");
const nombrePractica = document.querySelector("#nombrePractica");
const descriptionFormPractica = document.querySelector(
  "#descriptionFormPractica"
);
const errorNombre = document.querySelector("#errorNombrePracticaForm");
const errorDescrip = document.querySelector("#errorDescriptionPracticaForm");

//uso de eventos

registerFormPracticas.addEventListener("submit", (e) => handleEditFormPracticas(e));

const CreateAlert = (title, text, icon, action) => {
  Swal.fire({
    title: title,
    text: text,
    icon: icon,
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, hazlo.",
    cancelButtonText: "No, cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      action();
    }
  });
};

const handleEditFormPracticas = (e) => {
  e.preventDefault();
  nombrePractica.classList.remove("border-danger");
  descriptionFormPractica.classList.remove("border-danger");
  errorNombre.classList.add("d-none");
  errorDescrip.classList.add("d-none");
  if (
    nombrePractica.value.trim() === "" ||
    descriptionFormPractica.value.trim() === ""
  ) {
    if (nombrePractica.value.trim() === "") {
      nombrePractica.classList.add("border-danger");
      errorNombre.classList.remove("d-none");
      errorNombre.innerHTML = "Debes asignar un nuevo nombre a la practica.";
      return;
    } else if (descriptionFormPractica.value.trim() === "") {
      descriptionFormPractica.classList.add("border-danger");
      errorDescrip.classList.remove("d-none");
      errorDescrip.innerHTML = "Debes agregar una nueva descripción a la practica.";
      return;
    }
    return;
  } else {
    CreateAlert(
      "Editar practica",
      "¿Estás seguro de editar está practica?",
      "question",
      () => registerFormPracticas.submit()
    );
  }
};
