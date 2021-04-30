<!DOCTYPE html>

<body>

    <head>
        <link rel="stylesheet" href="./css/vars.css">
    </head>

    <template id="login-prompt">

        <div class="login-prompt">
            <div class="section-title">
                <span>Entrar no The Marquee</span>
                <svg id="login-close-button" viewBox="0 0 24 24" fill="black" width="18px" height="18px">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
                </svg>
            </div>

            <div class="form-wrapper">
                <form action="Source/login.php" onsubmit="return new FormValidator().validate()" method="post">
                    <input name="user_name" type="text" placeholder="Nome">
                    <input name="user_password" type="password" placeholder="Senha">
                    <button id="login-button" class="button" btn-variant="contained">
                        <span class="button__label">login</span>
                    </button>
                </form>
            </div>
        </div>

        <script>
            class FormValidator {
                constructor() {
                    this.form = document.forms["login-form"];
                }

                validate() {
                    let errors = 0;
                    if (this.form["name"].value === "") {
                        this.form["name"].style.border = "2px solid red"
                        this.form['name'].placeholder = "Por favor insira um nome"
                        errors++;
                    };
                    if (this.form["password"].value === "") {
                        this.form["password"].style.border = "2px solid red";
                        this.form['password'].placeholder = "Por favor insira uma senha"

                        errors++;
                    }

                    if (errors > 0) return false;
                }
            }
        </script>

        <style>
            .login-prompt {
                display: none;
                min-height: 30vh;
                height: max-content;
                width: 100%;
                display: flex;
                flex-direction: column;
                padding: var(--main-margin);
                border-radius: .4rem .4rem 0 0;
                background-color: var(--bg-color);
                background-color: var(--bg-color-elevated);
                bottom: 0vh;
                z-index: 9999999;
            }

            @keyframes slideUp {
                from {
                    transform: translateY(200%);
                }

                to {
                    transform: translateY(0);
                }
            }

            .login-prompt .section-title span {
                text-align: center;
                font-size: 1.2rem;
            }

            .form-wrapper form {
                display: flex;
                flex-direction: column;
                gap: .6rem;

            }

            @supports not(gap: 0.6rem) {
                .form-wrapper * {
                    padding-bottom: .6rem;
                }
            }

            .form-wrapper input {
                background-color: var(--bg-color-secondary);
                color: var(--font-color);
                padding: .8rem 1rem;
                width: 100%;
                border: 1px solid #2c2c2c20;
                border: none;
                border-radius: 3px;

            }

            .form-wrapper input::placeholder {
                color: var(--font-color);
            }

            #login-close-button {
                cursor: pointer;
                width: 1.1rem;
                height: 1.1rem;
                fill: var(--font-color);
            }
        </style>

    </template>

</body>

</html>