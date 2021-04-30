export class Theme {
    constructor() {
        this.viewIsLight = () => {
            return Theme.view.getAttribute("class") === "light";
        };

        this.alternate = (event) => {
            event.preventDefault();
            this.updateState(this.viewIsLight() === false ? "light" : "dark");
        };

        this.updateState = (state) => {
            Theme.view.setAttribute("class", state);
            this.updateLabel(state);
            localStorage.setItem("MARQUEE__THEME", state);
        };

        this.updateLabel = (state) => {
            Theme.label.innerHTML = `Tema: ${state === "light" ? "Claro" : "Escuro"}`;
        };

        this.firstRun = () => {
            localStorage.setItem("MARQUEE__THEME", "dark");
            Theme.view.setAttribute("class", "dark");
        };

        if (!Theme.localTheme) this.firstRun();

        this.updateState(Theme.localTheme);
    }
}
Theme.view = document.querySelector("main");
Theme.label = document.querySelector("#theme-label");
Theme.localTheme = localStorage.getItem("MARQUEE__THEME");
