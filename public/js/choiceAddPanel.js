let addUsersPanel = document.querySelector('.addUsersPanel')
let addProductsPanel = document.querySelector('.addProductsPanel')

let panelAddUsers = document.querySelector('.panel-add-users')
let panelAddProducts = document.querySelector('.panel-add-products')

selectUserPanel()
function selectUserPanel() {
    panelAddUsers.style.display = 'flex'
    addUsersPanel.classList.add("addPanelActive")
    panelAddProducts.style.display = 'none'
    addProductsPanel.classList.remove("addPanelActive")
}

function selectProductPanel() {
    panelAddUsers.style.display = 'none'
    addUsersPanel.classList.remove("addPanelActive")
    panelAddProducts.style.display = 'flex'
    addProductsPanel.classList.add("addPanelActive")
}