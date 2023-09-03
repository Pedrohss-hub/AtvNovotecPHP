let buttons = document.querySelectorAll('.container a')

buttons.forEach((button)=>{
    let teste = getComputedStyle(button).backgroundColor
    console.log(teste)
    if(getComputedStyle(button).backgroundColor != "white"){
    //Mouse Entrando no Elemento
    button.addEventListener('mouseenter', ()=>{
        button.animate(
            [
                {borderWidth: '0px'},
                {borderWidth: '4px'}
            ],
            {
                duration: 260,
                interations: 1,
                fill: 'forwards',
                easing: 'linear'
            }
        )
    })

    //Mouse Saindo do Elemento
    button.addEventListener('mouseout', ()=>{
        button.animate(
            [
                {borderWidth: '4px'},
                {borderWidth: '0px'}
            ],
            {
                duration: 200,
                interations: 1,
                fill: 'forwards',
                easing: 'linear'
            }
        )
    })
    } else {
        console.log('funcionou')
    }
})
