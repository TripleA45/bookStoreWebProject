// var signIn = document.querySelector(".signin");
// var cancel = document.querySelector(".cancel");
// var email = document.querySelector("#email");
// var password = document.querySelector("#password");

//
const sign_In = document.querySelector("#signIn");
const sign_Up = document.querySelector("#signUp");
const wrapper = document.querySelector(".wrapper");

sign_Up.addEventListener('click', () =>{
  wrapper.classList.add("sign-up-mode");
});
sign_In.addEventListener('click', () =>{
  wrapper.classList.remove("sign-up-mode");
});

//
// signIn.addEventListener("click", (e) => {
//   // if (
//   //   email.value.includes("@") &&
//   //   email.value.includes(".") &&
//   //   password.value.length > 8
//   // ) {
//   //   this.close();
//   console.log('enter');
//   });

//   e.preventDefault();
// });
// cancel.addEventListener("click", () => {
//   this.close();
// });
// //