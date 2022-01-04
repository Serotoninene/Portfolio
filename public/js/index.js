/* PHOTO OF TOULOUSE APPEARING ON HOVER */

const toulouse = document.querySelector('.toulouse');
const phToulouse = document.querySelector('.photoToulouse')

toulouse.addEventListener('mouseover', function(){
    phToulouse.classList.remove('none')
})

toulouse.addEventListener('mouseout', function(){
    phToulouse.classList.add('none')
})

/* AOS INIT*/
AOS.init();



