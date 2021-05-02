<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="./css/pages/pages.login.css">
    <link rel="stylesheet" href="./css/components/components.buttons.css">
    <script src="./Source/js/loginHandler.js"></script>
</head>
<body>

    <div class="prompt-wrapper">
        <div class="login-prompt">
            <div class="section-title">
                <span>Entrar no The Marquee</span>
            </div>

            <div class="form-wrapper">
                <form name="login-form" onsubmit="return handleLogin(event, this)" method="post">
                    <input name="user_name" type="text" placeholder="Nome" required>
                    <input name="user_password" type="password" placeholder="Senha" required>
                    <button type="submit" id="login-button" class="button" btn-variant="contained">
                        <span class="button__label">Entrar</span>
                    </button>
                    <div js-data="login-status" class="login-status"></div>
                </form>
            </div>
        </div>

    </div>

</body>
