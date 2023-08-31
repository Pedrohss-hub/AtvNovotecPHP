//Reativar o Botão
let btnForm = document.querySelector('.button-form') 
let repsenha = document.querySelector('#idrepsenha')

repsenha.addEventListener('input',() => {
    let senha = document.querySelector('#idsenha')
    if(senha.value === repsenha.value){
        btnForm.disabled = false

    } else {
        btnForm.disabled = true
    }
})
