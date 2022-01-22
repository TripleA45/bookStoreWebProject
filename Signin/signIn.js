var signIn = document.querySelector(".signin");
var cancel = document.querySelector(".cancel");
var email = document.querySelector("#email");
var password = document.querySelector("#password");

signIn.addEventListener("click", (e) => {
  if (
    email.value.includes("@") &&
    email.value.includes(".") &&
    password.value.length > 8
  ) {
    this.close();
  }

  e.preventDefault();
});
cancel.addEventListener("click", () => {
  this.close();
});
