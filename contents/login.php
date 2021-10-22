<section>
<h1 class="autor">Авторизация</h1>
    <!--<div class="error" id="error"><?=$info;?></div>-->
    <form method="post">
        <div class="reg-wrapper">
            <div class="string">
                <label>Логин</label>
                <input data-desc="Логин" type="text" name="login" required>
            </div>
            <div class="string">
                <label>Пароль</label>
                <input data-desc="Пароль" type="password" name="password" required>
            </div>
            <div class="string buttons">
                <button>Войти</button>
                <button onclick="document,location='/web/registration'">Регистрация</button>
            </div>
        </div>
    </form>
</section>