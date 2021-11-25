/*

<<<<<<< Updated upstream
export const updateClass = () => {
    document.querySelector('main').className = setTheme()
=======
    /* Em click no botao
      troca o tema no localstorage e atualiza a classe
    */
    this.button.addEventListener("click", () => {
      localStorage.setItem("MARQUEE__THEME", "dark");
      this.setTheme();
    });
  }

  setTheme() {
    this.main.setAttribute("class", this.getLocalStorage());
    // this.label.innerHTML = this.getLocalStorage();
  }

  getLocalStorage() {
    /* check se localstorage nao existe
      se nao, define o tema como claro
    */
    if (!localStorage.getItem("MARQUEE__THEME")) {
      localStorage.setItem("MARQUEE__THEME", "light");
    }

    return localStorage.getItem("MARQUEE__THEME");
  }
>>>>>>> Stashed changes
}

// fix this

export const setTheme = () => {
    document.querySelector('#theme-button').addEventListener('click', () => document.querySelector('main').className == 'dark' ? 'light' : 'dark')
    return localStorage.getItem('MARQUEE_THEME') ?? 'light'
}
*/
