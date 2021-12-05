//import * as theme from "./js/theme.js";
import { SearchHandler } from "./js/SearchHandler.js";

window.onload = () => {
  //loadThemeSwitcher();
  const searchHandler = new SearchHandler();
  loadSearchBar();
};

function loadThemeSwitcher() {
  theme.updateClass();
}

function loadSearchBar() {
  const showButton = document.querySelector("[js-data=search-display-button]");
  const closeButton = document.querySelector("[js-data=search-close-button]");
  const searchBar = document.querySelector("[js-data=search-bar]");

  showButton.addEventListener(
    "click",
    () => (searchBar.style.visibility = "visible")
  );
  closeButton.addEventListener(
    "click",
    () => (searchBar.style.visibility = "hidden")
  );
}
