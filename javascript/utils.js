const handleWatchPassword = (target, elemnt) => {
  if (target.type === "password") {
    target.setAttribute("type", "text");
    elemnt.setAttribute("class", "fas fa-eye");
  } else {
    target.setAttribute("type", "password");
    elemnt.setAttribute("class", "fas fa-eye-slash");
  }
};
