//declaración de variables

const user = document.querySelector("#user");
const password = document.querySelector("#password");
const repitePassword = document.querySelector("#rPassword");
const form = document.querySelector("#registerForm");
const eyePassword = document.querySelector("#registerPassword");
const eyeRepitePassword = document.querySelector("#registerRepitePassword");
const userError = document.querySelector("#userError");
const passwordError = document.querySelector("#passwordError");

// uso de eventos

eyePassword.addEventListener("click", () =>
  handleWatchPassword(password, eyePassword)
);
eyeRepitePassword.addEventListener("click", () =>
  handleWatchPassword(repitePassword, eyeRepitePassword)
);

form.addEventListener("submit", (e) => handleRegister(e));
//declaración de funciones

const handleRegister = (e) => {
  e.preventDefault();
  userError.innerHTML = "";
  passwordError.innerHTML = "";
  if (
    user.value.trim() === "" ||
    password.value.trim() === "" ||
    repitePassword.value.trim() === ""
  ) {
    if (user.value.trim() === "") {
      userError.classList.remove("d-none");
      userError.innerHTML = "Debes ingresar un correo,intenta de nuevo";
      return;
    } else if (
      password.value.trim() === "" ||
      repitePassword.value.trim() === ""
    ) {
      userError.classList.add("d-none");
      passwordError.classList.remove("d-none");
      passwordError.innerHTML =
        "Debes ingresar al menos una contraseña de 5 caracteres.";
      return;
    }
  } else if (password.value.trim() !== repitePassword.value.trim()) {
    passwordError.classList.remove("d-none");
    passwordError.innerHTML = "Las contraseñas NO coiciden, intenta de nuevo.";
    return;
  }
  userError.classList.add("d-none");
  passwordError.classList.add("d-none");
  form.submit();
};
