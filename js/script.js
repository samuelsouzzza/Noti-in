const btnCriar = document.querySelector('.add-item');
const modal = document.querySelector('.modal-wrapper');
const btnFecharModal = document.querySelector('.btn-fechar-modal');
const txtDesc = document.querySelector('.txt-descricao');
const txtTit = document.querySelector('.txt-titulo');
const btnUpdate = document.querySelector('.btn-atualizar');

function modalOnOff(){
    modal.classList.toggle('ativo');
    txtDesc.value = "";
    txtTit.value = "";
}

btnCriar.addEventListener('click', modalOnOff);
btnFecharModal.addEventListener('click', modalOnOff);
btnUpdate.addEventListener('click', modalOnOff);