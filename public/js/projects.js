/* AOS INIT*/
AOS.init();

/* PERSPECTIVE EFFECT */
const projects = document.querySelectorAll('.video');


projects.forEach(project => {
    let count = 1;
    project.addEventListener('mousemove', (e) => {
        let axisX = (window.innerWidth * 0.66  - e.pageX) / 15;
        let axisY = (window.innerHeight * 0.66  - (e.pageY / count) ) / 15;
        project.style.transform = 'rotateY(' + axisX + 'deg) rotateX(' + axisY + 'deg)'

    })

    count += 1;
    project.addEventListener('mouseenter', ()=> {
        project.style.transition = 'transform 0.1s ease'
    })

    project.addEventListener('mouseleave', (e) => {
        project.style.transform = 'rotateY(0deg) rotateX(0deg)';
        project.style.transition = 'transform 0.5s ease';
    })
})