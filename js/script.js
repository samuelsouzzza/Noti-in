const btnCriar = document.querySelector('.add-item');

function criarNota(){
    const modal = document.querySelector('.modal-wrapper');
    modal.classList.toggle('ativo');
}

btnCriar.addEventListener('click', criarNota);