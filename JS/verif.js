document.getElementById("butok").disabled = true;

function verifie() {
  if (document.getElementById("accept").checked) {
    document.getElementById("butok").classList.replace("btn-secondary", "btn-success");
    document.getElementById("butok").disabled = false;
  } else {
    document.getElementById("butok").classList.replace("btn-success", "btn-secondary");
    document.getElementById("butok").disabled = true;
  }
}
