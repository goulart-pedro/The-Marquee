export const updateClass = () => {
    document.querySelector('main').className = setTheme()
}

// fix this

export const setTheme = () => {
    document.querySelector('#theme-button').addEventListener('click', () => document.querySelector('main').className == 'dark' ? 'light' : 'dark')
    return localStorage.getItem('MARQUEE_THEME') ?? 'light'
}