// SEARCH FILTER
const searchBooks = document.getElementById("search-item");
const bookName = document.querySelectorAll(".book_info_title");

// A BETTER WAY TO FILTER THROUGH THE PRODUCTS
searchBooks.addEventListener("keyup", filterProducts);


function filterProducts(e) {
    const text = e.target.value.toLowerCase();
    // console.log(productName[0]);
    bookName.forEach(function(book) {
        const item = book.firstChild.textContent;
        if (item.toLowerCase().indexOf(text) != -1) {
            book.parentElement.parentElement.style.display = "block"
        } else {
            book.parentElement.parentElement.style.display = "none"
        }
    })
}