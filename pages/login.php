<!DOCTYPE html>

<body>
<script src="./Source/js/loginHandler.js"></script>



    <div class="prompt-wrapper">
        <div class="login-prompt">
            <div class="section-title">
                <span>Entrar no The Marquee</span>
            </div>

            <div class="form-wrapper">
                <form name="login-form" action="Source/checklogin.php" method="post">
                    <input name="user_name" type="text" placeholder="Nome" required>
                    <input name="user_password" type="password" placeholder="Senha" required>
                    <button type="submit">Entrar</button>
                </form>
            </div>
        </div>

    </div>

</body>
