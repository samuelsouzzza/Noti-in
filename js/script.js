const btnCriar = document.querySelector('.add-item');
const modal = document.querySelector('.modal-wrapper');
const btnFecharModal = document.querySelector('.btn-fechar-modal');
const txtDesc = document.querySelector('.txt-descricao');

function modalOnOff(){
    modal.classList.toggle('ativo');
    txtDesc.value = "";
}

btnCriar.addEventListener('click', modalOnOff);
btnFecharModal.addEventListener('click', modalOnOff);
