const btnCriar = document.querySelector('.add-item');
const modal = document.querySelector('.modal-wrapper');
const btnFecharModal = document.querySelector('.btn-fechar-modal');

function modalOnOff(){
    modal.classList.toggle('ativo');
}

btnCriar.addEventListener('click', modalOnOff);
btnFecharModal.addEventListener('click', modalOnOff)