(function () {
  const toggle = document.querySelector(".nav-toggle");
  toggle.addEventListener("click", function (e) {
    this.classList.toggle("opened");
  });
  const nav = document.querySelector("nav");
  toggle.addEventListener("click", function (e) {
    nav.classList.toggle("nav--active");
  });
})();
