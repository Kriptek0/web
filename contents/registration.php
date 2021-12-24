<section>
    <h1 class="autor">Регистрация</h1>
    <div class="error" id="error"><?=$info ?? ""?></div>
    <form id="form" method="post">
        <div class="reg-wrapper">
            <div class="string">
                <label>Фамилия:</label>
                <input data-desc="Логин" type="text" name="surname" required>
            </div>

            <div class="string">
                <label>Имя:</label>
                <input data-desc="Имя" type="text" name="name" required>
            </div>

            <div class="string">
                <label>Отчество:</label>
                <input data-desc="Отчество" type="text" name="patronymic" required>
            </div>

            <div class="string">
                <label>Дата рождения:</label>
                <input data-desc="Дата рождения" type="date" name="birthday" required>
            </div>

            <div class="string">
                <label>Пол:</label>
                <div class="radiobuttons">
                    <input type="radio" name="me" checked>Мужчина
                    <input type="radio" name="wu" >Женщина
                </div>
            </div>

            <div class="string">
                <label>Вид деятельности:</label>
                    <select>
                        <option>Студент</option>
                        <option>Преподователь</option>
                        <option>Работаю</option>
                        <option>Безработный</option>
                    </select>
            </div>

            <div class="string">
                <label>Логин:</label>
                <input data-desc="Логин" type="text" name="login" required>
            </div>

            <div class="string">
                <label>Пароль:</label>
                <input data-desc="Пароль1" type="password" name="password" id="pass" required>
            </div>

            <div class="string">
                <label>Пароль еще раз:</label>
                <input data-desc="Пароль2" type="password" name="one_more_pass" id="pass2" required>
            </div>

            <div class="string">
                <label>Email:</label>
                <input data-desc="Почта" type="email" name="email" placeholder="email@email.ru" required>
            </div>

            <div class="agreement">
                <label for="">Соглашение:</label>
                <input type="checkbox" name="agreement" id="agreement" require>
            </div>
            
            <div class="string buttons">
                <input type="reset" value="Очистить">
                <button id="send" name="send">Отправить</button>
            </div>
            
        </div>
    </form>
</section>