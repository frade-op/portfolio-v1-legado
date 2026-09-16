// Ativa/desativa as classes de animação do fundo e do texto associados ao ícone clicado
function transition(type, show = true){
    switch (type) {
        case 'icon-code':
            if( document.getElementById('icon-code') ){
                if( show ){
                    document.getElementById('left').classList.add('active')
                    document.getElementById('right').classList.add('active')
                } else {
                    document.getElementById('left').classList.remove('active')
                    document.getElementById('right').classList.remove('active')
                }
                if(document.getElementById('text-code')){
                    document.getElementById('text-code').classList.add('active')
                }
            }
            break;
        case 'icon-briefcase':
            if( document.getElementById('icon-briefcase') ){
                if( show ){
                    document.getElementById('top').classList.add('active')
                    document.getElementById('bottom').classList.add('active')
                } else {
                    document.getElementById('top').classList.remove('active')
                    document.getElementById('bottom').classList.remove('active')
                }
                if(document.getElementById('text-briefcase')){
                    document.getElementById('text-briefcase').classList.add('active')
                }
            }
            break;
        case 'icon-lightbulb':
            if( document.getElementById('icon-lightbulb') ){
                if( show ){
                    document.getElementById('center').classList.add('active')
                } else {
                    document.getElementById('center').classList.remove('active')
                }
                if(document.getElementById('text-lightbulb')){
                    document.getElementById('text-lightbulb').classList.add('active')
                }
            }
            break;
        case 'icon-clock':
            if( document.getElementById('icon-clock') ){
                if( show ){
                    document.getElementById('clock').classList.add('active')
                } else {
                    document.getElementById('clock').classList.remove('active')
                }
                if(document.getElementById('text-clock')){
                    document.getElementById('text-clock').classList.add('active')
                }
            }
            break;
    
        default:
            break;
    }
}

// Reverte o modal ao estado inicial, removendo todas as classes de animação ativas
function restart(){
    const content = document.getElementById('content')
    const modal = document.getElementById('modal')
    const main = document.getElementById('main')
    const close = document.getElementById('close')

    if(document.getElementById('left')){
        document.getElementById('left').classList.remove('active')
    }
    if(document.getElementById('right')){
        document.getElementById('right').classList.remove('active')
    }
    if(document.getElementById('top')){
        document.getElementById('top').classList.remove('active')
    }
    if(document.getElementById('bottom')){
        document.getElementById('bottom').classList.remove('active')
    }
    if(document.getElementById('center')){
        document.getElementById('center').classList.remove('active')
    }
    if(document.getElementById('clock')){
        document.getElementById('clock').classList.remove('active')
    }

    if(document.getElementById('text-code')){
        document.getElementById('text-code').classList.remove('active')
    }
    if(document.getElementById('text-briefcase')){
        document.getElementById('text-briefcase').classList.remove('active')
    }
    if(document.getElementById('text-lightbulb')){
        document.getElementById('text-lightbulb').classList.remove('active')
    }
    if(document.getElementById('text-clock')){
        document.getElementById('text-clock').classList.remove('active')
    }

    close.classList.remove('active')
    modal.classList.remove('active')
    main.classList.remove('second')
    setTimeout(() => {
        content.classList.remove('fade')
    }, 1000);
}

// IIFE que liga os cliques de cada ícone à abertura do modal correspondente
(function () {
    console.log('Author: Felipe Frade de Oliveira Pereira');
    const content = document.getElementById('content')
    const modal = document.getElementById('modal')
    const main = document.getElementById('main')
    const close = document.getElementById('close')

    // Encadeia a animação de fundo com a exibição do modal, respeitando os tempos de transição do CSS
    const button_clicked = function(button){
        content.classList.add('fade')
        setTimeout(() => {
            transition(button, true)
        }, 1000);
        setTimeout(() => {
            main.classList.add('second')
            modal.classList.add('active')
            close.classList.add('active')
        }, 2000);
    }

    if(close){
        close.onclick = function() {
            restart()
        };
    }

    if(document.getElementById('icon-code')){
        document.getElementById('icon-code').onclick = function() {
            button_clicked('icon-code')
        };
    }
    if(document.getElementById('icon-briefcase')){
        document.getElementById('icon-briefcase').onclick = function() {
            button_clicked('icon-briefcase')
        };
    }
    if(document.getElementById('icon-lightbulb')){
        document.getElementById('icon-lightbulb').onclick = function() {
            button_clicked('icon-lightbulb')
        };
    }
    if(document.getElementById('icon-clock')){
        document.getElementById('icon-clock').onclick = function() {
            button_clicked('icon-clock')
        };
    }
})();