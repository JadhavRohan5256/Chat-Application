function classLoad() {
    let searchBar = document.querySelector(".search input");
    let searchBtn = document.querySelector(".search button");
    let searchP = document.querySelector(".search p");
    searchBar.classList.toggle("active");
    searchBtn.classList.toggle("active");
    searchP.classList.toggle("active");
    searchBar.focus();
}
