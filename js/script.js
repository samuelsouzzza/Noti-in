const btnCriar = document.querySelector('.add-item');
const modal = document.querySelector('.modal-wrapper');
const btnFecharModal = document.querySelector('.btn-fechar-modal');
function modalOnOff(){
   modal.classList.toggle('ativo');
   txtTit.value = "";
   txtDesc.value = "";
   lblcount.textContent = 0;
}
btnCriar.addEventListener('click', modalOnOff);
btnFecharModal.addEventListener('click', modalOnOff);


const lblcount = document.querySelector('.lbl-count');
const txtTit = document.querySelector('.txt-titulo');
const txtDesc = document.querySelector('.txt-descricao');
lblcount.textContent = 0;
function contador(){
   let n = 1;
   n += txtDesc.value.length;
   lblcount.textContent = n;
}
txtDesc.addEventListener('keypress', contador);


const modalUpdate = document.querySelector('.modal-wrapper-update');
const btnUpdate = document.querySelectorAll('.btn-atualizar');
const btnFecharModalUp = document.querySelector('.btn-fechar-modal-update');
function modalUpOnOff(){
   modalUpdate.classList.toggle('ativo');
   lblcount.textContent = 0;
}
btnFecharModalUp.addEventListener('click', modalUpOnOff);
btnUpdate.forEach((c)=>{
    c.addEventListener('click', modalUpOnOff);
});


const imgPerfil = document.querySelector('.img-perfil');
const menuSuspenso = document.querySelector('.menu-suspenso');
function showMenu(){
   function closeMenu(e){
      if(!menuSuspenso.contains(e.target))menuSuspenso.classList.remove('ativo');
   }
   window.addEventListener('click', closeMenu);
   menuSuspenso.classList.add('ativo');
}
imgPerfil.addEventListener('mouseover', showMenu);


const changeTheme = document.querySelector('#change-theme');
function mudarTema(){
   document.body.style.backgroundColor= 'red';
}
changeTheme.addEventListener('click', mudarTema);