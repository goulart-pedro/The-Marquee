<html>

<head>
    <link rel="stylesheet" href="./css/vars.css">
    <link rel="stylesheet" href="./css/components/components.header.css">
    <link rel="stylesheet" href="./css/components/components.buttons.css">
    <link rel="stylesheet" href="./css/components/components.searchbar.css">
    <link rel="stylesheet" href="./css/components/components.icons.css">
</head>

<body>
    <header class="header">
        <div class="header-wrapper">
            <div>
                <span class="header-logo"><img src="./img/themarquee_logo.png"></span>
            </div>

            <div class="login-area">
                
                <?php if (!isset($_COOKIE['USER_SESSION'])) : ?>
                    <a href="?page=login">
                        <button id="login-button" class="button" btn-variant="contained">
                            <span class="button__label">Entrar</span>
                        </button>
                    </a>
                <?php endif ?>

                <div js-data="search-display-button" class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                    </svg>
                </div>
            </div>

        </div>
        </div>

    </header>

    <div js-data="search-bar" class="search-area">
        <div class="input-wrapper">
            <input type="text" class="search-bar" id="search-bar" placeholder="Digite para pesquisar" />
            <!-- <span id="form-clear-button">Cancelar</span> -->
          <span js-data="search-close-button" class="close-icon">
             <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                 <path d="M0 0h24v24H0V0z" fill="none" />
                 <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
             </svg>
         </span>
        </div>
       <div id="results"></div>
    </div>
</body>

</html>