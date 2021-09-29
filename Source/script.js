//import * as theme from "./js/theme.js";

window.onload = () => {
    //loadThemeSwitcher();
    loadSearch();
    loadSearchBar();
};

function loadThemeSwitcher() {
    theme.updateClass()
}

async function loadSearch() {
    const displayElement = document.querySelector("#results");
    const searchBar = document.querySelector("#search-bar");
    searchBar.addEventListener('keyup', (event) => await fetchResponse(displayElement))
    /* searchBar.addEventListener("keyup", (event) => {
        	//
        
	const xhr = new XMLHttpRequest();
        xhr.onload = function () {
            searchResults.innerHTML = this.responseText;
        };

        xhr.open("get", `api/api.php?action=search&term=${event.target.value}`, true);
        xhr.setRequestHeader("Content-type", "application/json");
        xhr.send();
	
    });*/
}

async function fetchResponse(displayElement) {
    const searchResponse = await fetch(`api/api.php?action=search&term=${event.target.value}`);
    displayElement.innerHTML = await searchResponse.json();

}

function loadSearchBar() {
    const showButton = document.querySelector("[js-data=search-display-button]");
    const closeButton = document.querySelector("[js-data=search-close-button]");
    const searchBar = document.querySelector("[js-data=search-bar]");

    showButton.addEventListener("click", () => (searchBar.style.visibility = "visible"));
    closeButton.addEventListener("click", () => (searchBar.style.visibility = "hidden"));
}
