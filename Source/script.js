import { Theme } from "./jsmodules/theme.js";
import { FormValidator } from "./jsmodules/formValidator.js";

window.onload = () => {
    loadThemeSwitcher();
    loadSearch();
    loadSearchBar();
};

function loadThemeSwitcher() {
    class ThemeControll extends HTMLElement {
        constructor() {
            super();
            const theme = new Theme();
            const button = document.querySelector("#theme-button");
            button.addEventListener("click", theme.alternate);
        }
    }
    customElements.define("theme-controll", ThemeControll);
}

function loadSearch() {
    const searchBar = document.querySelector("#search-bar");
    searchBar.addEventListener("keyup", (event) => {
        const searchResults = document.querySelector("#results");
        // ajax(`Source/search.php?term=${event.target.value}`, "get");
        const xhr = new XMLHttpRequest();
        xhr.onload = function () {
            searchResults.innerHTML = this.responseText;
        };

        xhr.open("get", `api/api.php?display=search&term=${event.target.value}`, true);
        xhr.setRequestHeader("Content-type", "application/json");
        xhr.send();
    });
}

function loadSearchBar() {
    const showButton = document.querySelector("[js-data=search-display-button]");
    const closeButton = document.querySelector("[js-data=search-close-button]");
    const searchBar = document.querySelector("[js-data=search-bar]");

    showButton.addEventListener("click", () => (searchBar.style.visibility = "visible"));
    closeButton.addEventListener("click", () => (searchBar.style.visibility = "hidden"));
}
