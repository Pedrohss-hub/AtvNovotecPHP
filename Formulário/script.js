let btnForm = document.querySelector('.button-form') 
let repsenha = document.querySelector('#idrepsenha')
btnForm.disable = true

repsenha.addEventListener('input',() => {
    let senha = document.querySelector('#idsenha')
    if(senha.value === repsenha.value){
        btnForm.disable = false

    } else {
        btnForm.disable = true
    }
})
