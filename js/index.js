const navs = document.querySelectorAll('#navs a');
const home = document.querySelector('#home');

home.innerHTML = "Not Home";

navs.forEach(nav => {
    nav.addEventListener('click', (event) => {
    
        navs.forEach(nav => nav.classList.remove('active'));
        event.target.classList.add('active');
    });
});

