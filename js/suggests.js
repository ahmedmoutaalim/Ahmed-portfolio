const menu = document.getElementById('menu');
const hiding =  document.getElementById('list');


menu.addEventListener('click',()=>{

  hiding.classList.toggle('hide')



})
const btn = document.getElementById('show');
const cnt =  document.getElementById('hidden');


btn.addEventListener('click',()=>{

  cnt.classList.toggle('hd');
})


