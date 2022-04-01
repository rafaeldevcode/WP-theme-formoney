let pesquisa = false;
let menu = false;

document.getElementById('abrir-pesquisa').addEventListener('click', ()=>{
    let tamanhoTela = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    let abrirPesquisa = document.getElementById('form-search');
    let menuDown = document.getElementsByClassName('tema-menu')[0];
    pesquisa = !pesquisa

    if(pesquisa == true){
        abrirPesquisa.style.display = 'block';

        removerClasse(abrirPesquisa, 'pesquisaReverse');
        removerClasse(menuDown, 'menuDownReverse');

        adicionarClasse(abrirPesquisa, 'pesquisa');
        if(tamanhoTela < 951){
            removerClasse(menuDown, 'slideMenu');
            adicionarClasse(menuDown, 'menuDown');
        }

    }else{
        removerClasse(abrirPesquisa, 'pesquisa');
        removerClasse(menuDown, 'menuDown');

        adicionarClasse(abrirPesquisa, 'pesquisaReverse');
        if(tamanhoTela < 951){
            adicionarClasse(menuDown, 'menuDownReverse');
        }

        setTimeout(()=>{
            abrirPesquisa.style.display = 'none';
        }, 300)
    }
})

document.getElementById('checkboxMenu').addEventListener('click', ()=>{
    let fecharPesquisa = document.getElementById('form-search');
    let abrirMenu = document.getElementsByClassName('tema-menu')[0];
    menu = !menu;

    if(menu == true){
        abrirMenu.style.display = 'flex';

        removerClasse(abrirMenu, 'slideMenuReverse');
        adicionarClasse(abrirMenu, 'slideMenu');
    }else{
        removerClasse(fecharPesquisa, 'pesquisa')
        removerClasse(abrirMenu, 'slideMenu');
        adicionarClasse(abrirMenu, 'slideMenuReverse')

        setTimeout(()=>{
            abrirMenu.style.display = 'none';
            fecharPesquisa.style.display = 'none';
        }, 500)
    }
})

function adicionarClasse(nomeVariavel, nomeClasse){
    nomeVariavel.classList.add(nomeClasse);
}

function removerClasse(nomeVariavel, nomeClasse){
    nomeVariavel.classList.remove(nomeClasse);
}