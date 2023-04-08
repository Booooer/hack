let btnReg = document.getElementById('btnReg')
const regAnswer = document.querySelector('.reg-answer')

console.log('here')

async function sendData(){
    console.log(232)
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    let regLogin = document.getElementById('regLogin').value
    let regPassword = document.getElementById('regPassword').value
    let regRole = document.getElementById('regRole').value
    console.log(regLogin)
    const array = [regLogin, regPassword,regRole]

    const response = await fetch('/reg',{
        method: 'POST',
        credentials: "same-origin",
        headers: {
            'Content-Type': 'application/json',
            "Accept": "application/jsson, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token,
        },
        body: JSON.stringify(array)
})

let result = await response.json()

regAnswer.innerHTML = result
}
