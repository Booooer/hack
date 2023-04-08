let btnReg = document.getElementById('btnReg')
const regAnswer = document.querySelector('.reg-answer')
const productAnswer = document.querySelector('.product-answer')
let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')

console.log('here')

async function sendData(array, url, answer){
    const response = await fetch(url,{
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

answer.innerHTML = result
}

function sendUser(){
    let regLogin = document.getElementById('regLogin').value
    let regPassword = document.getElementById('regPassword').value
    let regRole = document.getElementById('regRole').value
    const array = [regLogin, regPassword,regRole]
    sendData(array,"/reg",regAnswer)
}

function sendProducts(){
    let elementNm = document.getElementById('elementNm').value
    let categoryNm = document.getElementById('categoryNm').value
    let total = document.getElementById('total').value
    const array = [elementNm, categoryNm, total]
    sendData(array,"/add/product",productAnswer)
}
