let login = document.getElementById('login')
let password = document.getElementById('password')
let buttonLogin = document.getElementById('buttonLogin')

let loginLabel = document.getElementById('loginLabel')
let passwordLabel = document.getElementById('passwordLabel')

login.oninput = function() {
    validation()
};
password.oninput = function() {
    validation()
};

login.onfocus = function() {
    loginLabel.style.left = "5px"
    loginLabel.style.bottom = "25px"
    loginLabel.style.fontSize = "12px"
};
login.onblur = function() {
    if (login.value.length <= 0){
        loginLabel.style.left = "10px"
        loginLabel.style.bottom = "5px"
        loginLabel.style.fontSize = "16px"
    }
};

password.onfocus = function() {
    passwordLabel.style.left = "5px"
    passwordLabel.style.bottom = "25px"
    passwordLabel.style.fontSize = "12px"
};
password.onblur = function() {
    if (password.value.length <= 0){
        passwordLabel.style.left = "10px"
        passwordLabel.style.bottom = "5px"
        passwordLabel.style.fontSize = "16px"
    }
};

buttonLogin.disabled = true
function validation(){
    if(login.value.length < 6 || login.value.length > 20){
        buttonLogin.disabled = true
        return false
    }
    if(password.value.length < 8 || password.value.length > 24){
        buttonLogin.disabled = true
        return false
    }
    buttonLogin.disabled = false
}