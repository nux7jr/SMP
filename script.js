const logOutButton = document.querySelector(".btn-logOut");

const logOut = function () {
  const AuthCookie = document.cookie;
  console.log(AuthCookie);
  document.cookie = "password=";
  console.log("cooki");
  window.location.reload();
};

logOutButton.addEventListener("click", logOut);
