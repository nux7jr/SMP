const out = () => {
  function clear() {
    document.cookie = "login=";
    document.cookie = "password=";
    window.location.reload();
  }
  const loguotBtn = document.querySelector(".btn-logout");
  if (loguotBtn) {
    loguotBtn.addEventListener("click", clear);
  }
};
out();
