const btnCriar = document.querySelector('.add-item');
const modal = document.querySelector('.modal-wrapper');
const btnFecharModal = document.querySelector('.btn-fechar-modal');

function criarNota(){
    modal.classList.toggle('ativo');
}
function fecharModal(){
    modal.classList.toggle('ativo');
}

btnCriar.addEventListener('click', criarNota);
btnFecharModal.addEventListener('click', fecharModal)