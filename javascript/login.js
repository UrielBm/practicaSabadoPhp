// declaración de variables

const watchPassword = document.querySelector("#watchPassword");
const user = document.querySelector("#user");
const password = document.querySelector("#password");
const messageError = document.querySelector("#mensageError");
const form = document.querySelector("#form");

// uso de eventos

watchPassword.addEventListener("click", () =>
  handleWatchPassword(password, watchPassword)
);
form.addEventListener("submit", (e) => validateForm(e));

// declaración de funciones

const validateForm = (e) => {
  e.preventDefault();
  if (user.value.trim() === "" || password.value.trim() === "") {
    messageError.classList.remove("d-none");
    if (user.value.trim() === "") {
      messageError.innerHTML =
        "Necesitas un nombre de usuario,intenta de nuevo";
    } else {
      messageError.innerHTML = "Necesitas una contraseña, intenta de nuevo";
    }
  } else {
    messageError.classList.add("d-none");
    messageError.innerHTML = "";
    form.submit();
  }
};
