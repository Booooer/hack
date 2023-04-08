let regLogin = document.getElementById('regLogin')
let regPassword = document.getElementById('regPassword')
let btnReges = document.querySelector('.btnReg')

regLogin.oninput = function() {
    console.log('ddd')
    validation()
};
regPassword.oninput = function() {
    validation()
};

btnReges.disabled = true
function validation(){
    if(regLogin.value.length < 6 || regLogin.value.length > 20){
        btnReges.disabled = true
        return false
    }
    if(regPassword.value.length < 8 || regPassword.value.length > 24){
        btnReges.disabled = true
        return false
    }
    btnReges.disabled = false
}