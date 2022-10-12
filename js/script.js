const btnCriar = document.querySelector('.add-item');
const modal = document.querySelector('.modal-wrapper');
const btnFecharModal = document.querySelector('.btn-fechar-modal');
const txtTit = document.querySelector('.txt-titulo');
const txtDesc = document.querySelector('.txt-descricao');
const btnUpdate = document.querySelector('.btn-atualizar');
let lblcount = document.querySelector('.lbl-count');

function modalOnOff(){
    modal.classList.toggle('ativo');
    txtDesc.value = "";
    txtTit.value = "";
}
function contador(){
    let n = txtDesc.value.length;
}

btnCriar.addEventListener('click', modalOnOff);
btnFecharModal.addEventListener('click', modalOnOff);
btnUpdate.addEventListener('click', modalOnOff);
txtDesc.addEventListener('keypress', contador);