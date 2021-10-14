export class SearchHandler {
    constructor() {
        this.searchBar = document.querySelector("#search-bar");
        this.searchBar.addEventListener("keyup", (e) =>
            this.handleSearch(e.target.value)
        );
        this.searchResultsEl = document.querySelector("#results");
    }

    displayResults(searchResults) {
        this.searchResultsEl.innerHTML = searchResults;
    }

    async handleSearch(searchTerm) {
        const searchResponse = await fetch(
            `api/api.php?action=search&term=${searchTerm}`
        );
        this.displayResults(await searchResponse.json());
    }
}
