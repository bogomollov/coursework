const title = document.getElementById('login-title');
const select = document.getElementById('select-login');
const submit = document.getElementById('submit');

select.addEventListener("click", (e) => {
    title.innerHTML = 
    (title.innerHTML == 'Уже есть учетная запись?' ? title.innerHTML = 'Еще нету аккаунта?' : title.innerHTML = 'Уже есть учетная запись?');
    select.innerHTML =
    (select.innerHTML == 'Войти в аккаунт' ? select.innerHTML = 'Регистрация' : select.innerHTML = 'Войти в аккаунт');
    submit.innerHTML =
    (submit.value == 'Зарегистрироваться' ? submit.value = 'Войти в аккаунт' : submit.value = 'Зарегистрироваться'),
    (submit.name == 'register' ? submit.name = 'login' : submit.name = 'register');
});