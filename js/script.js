const btnCriar = document.querySelector('.add-item');
const modal = document.querySelector('.modal-wrapper');
const modalUpdate = document.querySelector('.modal-wrapper-update')
const btnFecharModal = document.querySelector('.btn-fechar-modal');
const btnFecharModalUp = document.querySelector('.btn-fechar-modal-update');
const txtTit = document.querySelector('.txt-titulo');
const txtDesc = document.querySelector('.txt-descricao');
const btnUpdate = document.querySelectorAll('.btn-atualizar');
const lblcount = document.querySelector('.lbl-count');

lblcount.textContent = 0;

function modalOnOff(){
    modal.classList.toggle('ativo');
    txtTit.value = "";
    txtDesc.value = "";
    lblcount.textContent = 0;
}
function modalUpOnOff(){
    modalUpdate.classList.toggle('ativo');
    lblcount.textContent = 0;
}
function contador(){
        let n = 1;
        n += txtDesc.value.length;
        lblcount.textContent = n;
}
btnCriar.addEventListener('click', modalOnOff);
btnFecharModal.addEventListener('click', modalOnOff);
txtDesc.addEventListener('keypress', contador);
btnFecharModalUp.addEventListener('click', modalUpOnOff);
btnUpdate.forEach((c)=>{
    c.addEventListener('click', modalUpOnOff);
});
