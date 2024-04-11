const login = document.getElementById('login');
const register = document.getElementById('register');
const popup = document.getElementById('popup');

const title = document.getElementById('login-title');
const select = document.getElementById('select-login');
const submit = document.getElementById('submit');

var arr = [login, register];
arr.forEach(element => {
    element.addEventListener("click", (e) => {
        popup.style.display = 'flex';
    })
});
select.addEventListener("click", (e) => {
    title.innerHTML = 
    (title.innerHTML == 'Уже есть учетная запись?' ? title.innerHTML = 'Еще нету аккаунта?' : title.innerHTML = 'Уже есть учетная запись?');
    select.innerHTML =
    (select.innerHTML == 'Войти' ? select.innerHTML = 'Регистрация' : select.innerHTML = 'Войти');
    submit.innerHTML =
    (submit.value == 'Зарегистрироваться' ? submit.value = 'Войти' : submit.value = 'Зарегистрироваться');
});