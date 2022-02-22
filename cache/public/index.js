var bookSelected = false;
var selectedBook;

//Traversing The DOM
book = Array.from(document.querySelectorAll(".book"));
logout = document.querySelector(".navbarElementLogout");
home = document.querySelector(".navbar").childNodes[3];

//Adding Event Listener
home.addEventListener("click", () => {
  window.open("index.php");
});
book.forEach((book) => {
  book.addEventListener("click", showBookDetail);
});
logout.addEventListener("click", () => {
// /*   loginWindow = window.open("./Signin/signIn.html", "Login", [
//     "width=800px",
//     "height=600px",
//     `left=${(screen.width - 800) / 2}`,
//     `top=${(screen.height - 600) / 2}`,
//   ]); */
//   window.open("./Signin/signIn.html", "Login");
});

function showBookDetail(e) {
  if (window.innerWidth > 1000) {
    console.log(e.target.className);
    if (!bookSelected && e.target.className != "book_info_addToCart") {
      selectedBook = this;
      selectedBook.style.transform = "scale(2) translateY(5vh)";
      selectedBook.classList.add("book-selected");
      book.forEach((book) => {
        book.classList.add("bookShelf-blured");
      });
      bookSelected = true;
    } else {
      selectedBook.style.transform = "scale(1)";
      selectedBook.classList.remove("book-selected");
      setTimeout(() => {
        book.forEach((book) => {
          book.classList.remove("bookShelf-blured");
        });
      }, 300);
      bookSelected = false;
    }
  }
}

