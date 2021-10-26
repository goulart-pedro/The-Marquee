class ResultsDisplay {
    constructor() {
        this.element = document.querySelector('#results');
    }

    
    /* funcao deve ser async para receber
    valores do evento de input
    */
    async update(newValue) {
        this.element.innerHTML = await newValue;
    }
}

class SearchInput {
    constructor() {
        this.element = document.querySelector('#search-bar');
        this.subscribers = [];
        
    }

    subscribe(newSubscriber) {
        this.subscribers.push(newSubscriber);
    }

    update(newValue) {
        for (const subscriber of this.subscribers)  {
            subscriber.update(newValue);
        }
    }
}

export class SearchHandler {
    constructor() {
        this.input = new SearchInput();
        this.resultsElement = new ResultsDisplay();
        
        this.input.subscribe(this.resultsElement);
        this.input.element.addEventListener("keyup", (event) =>
            this.input.update(this.handleSearch(event.target.value)) 
        );
       
    }

    async handleSearch(searchTerm) {
        if(searchTerm.length == 0) 
            return '';

        const response = await fetch(`api/api.php?action=search&term=${searchTerm}`);
        const results = await response.json();
        console.log(results)
        return results.map(item => `
            <div class=search-card>
                <a href=?page=movie&id=${item['Id']}>
                    ${item['Title']} 
                </a> 
            </div> 
        `).join(" ")
    }
}
