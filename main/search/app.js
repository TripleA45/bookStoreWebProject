const searchBooks = () => {
    const searchBox = document.getElementById("search-item").value.toUpperCase();
    const storeItems = document.getElementById("book-list");
    const book = document.querySelectorAll(".book");
    const bookTitle = storeItems.getElementsByTagName("h2");

    for(var i=0; i<bookTitle.length; i++){
        let match = book[i].getElementsByTagName('h2')[0];
        if(match){
            let input = match.textContent || match.innerHTML
            if(input.toUpperCase().indexOf(searchBox) > -1){
                book[i].style.display = "";
            }else{
                book[i].style.display = "Not found";
            }
        }
    }
}