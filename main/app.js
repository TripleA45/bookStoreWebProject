// SLIDER
var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 6){
        counter = 1;
      }
    }, 5000);

// SEARCH FILTER
const searchBooks = document.getElementById("search-item");
const bookName = document.querySelectorAll(".book_info_title");

searchBooks.addEventListener("keyup", filterProducts);


function filterProducts(e) {
    const text = e.target.value.toLowerCase();
    bookName.forEach(function(book) {
        const item = book.firstChild.textContent;
        if (item.toLowerCase().indexOf(text) != -1) {
            book.parentElement.parentElement.style.display = "block"
        } else {
            book.parentElement.parentElement.style.display = "none"
        }
    })
}

// REDIRECTING TO SIGN-IN 
login = document.querySelector(".book_info_goToStore");
signin = document.querySelector(".navbar").childNodes[3];

signin.addEventListener("click", () => {
    window.open("Login-register.php");
});

login.addEventListener("click", () => {
    window.open("Login-register.php");
});
