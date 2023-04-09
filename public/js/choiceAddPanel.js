let addUsersPanel = document.querySelector('.addUsersPanel')
let addProductsPanel = document.querySelector('.addProductsPanel')
let addItogZakazPanel = document.querySelector('.addItogZakazPanel')


let panelAddUsers = document.querySelector('.panel-add-users')
let panelAddProducts = document.querySelector('.panel-add-products')
let panelAddItogZakaz = document.querySelector('.panel-add-itog-zakaz')

selectUserPanel()
function selectUserPanel() {
    panelAddUsers.style.display = 'flex'  
    addUsersPanel.classList.add("addPanelActive")

    panelAddProducts.style.display = 'none'
    addProductsPanel.classList.remove("addPanelActive")

    panelAddItogZakaz.style.display = 'none'
    addItogZakazPanel.classList.remove("addPanelActive")
}

function selectProductPanel() {
    panelAddUsers.style.display = 'none'
    addUsersPanel.classList.remove("addPanelActive")

    panelAddProducts.style.display = 'flex'
    addProductsPanel.classList.add("addPanelActive")

    panelAddItogZakaz.style.display = 'none'
    addItogZakazPanel.classList.remove("addPanelActive")
}

function selectItogZakazPanel() {
    panelAddUsers.style.display = 'none'
    addUsersPanel.classList.remove("addPanelActive")

    panelAddProducts.style.display = 'none'
    addProductsPanel.classList.remove("addPanelActive")

    panelAddItogZakaz.style.display = 'flex'
    addItogZakazPanel.classList.add("addPanelActive")
}


