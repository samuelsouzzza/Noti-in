const btnCriar = document.querySelector('.add-item');
const modal = document.querySelector('.modal-wrapper');
const btnFecharModal = document.querySelector('.btn-fechar-modal');
const txtTit = document.querySelector('.txt-titulo');
const txtDesc = document.querySelector('.txt-descricao');
const btnUpdate = document.querySelector('.btn-atualizar');
const lblcount = document.querySelector('.lbl-count');
lblcount.textContent = 0;

function modalOnOff(){
    modal.classList.toggle('ativo');
    txtDesc.value = "";
    txtTit.value = "";
    lblcount.textContent = 0;
}
function contador(){
        let n = 1;
        n += txtDesc.value.length;
        lblcount.textContent = n;
}

btnCriar.addEventListener('click', modalOnOff);
btnFecharModal.addEventListener('click', modalOnOff);
btnUpdate.addEventListener('click', modalOnOff);
txtDesc.addEventListener('keypress', contador);