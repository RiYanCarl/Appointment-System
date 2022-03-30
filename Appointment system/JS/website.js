// side bar menus
const menuIconButton = document.querySelector("[data-menu-icon-btn]");
const sidebar = document.querySelector("[data-sidebar]");
menuIconButton.addEventListener("click", () => {
  sidebar.classList.toggle("open");
});

// login form
function show_hide_password(target) {
  var input = document.getElementById("password-input");
  if (input.getAttribute("type") == "password") {
    target.classList.add("view");
    input.setAttribute("type", "text");
  } else {
    target.classList.remove("view");
    input.setAttribute("type", "password");
  }
  return false;
}
