const navs = document.querySelectorAll('#navs a');
const signUpLink = document.querySelector('#signUpLink');
const form = document.querySelector('#id01');
const logInLink = document.querySelector('#logInLink');
const form2 = document.querySelector('#id02')


navs.forEach(nav => {
    nav.addEventListener('click', () => {
        navs.forEach(nav => nav.classList.remove('active'));
        nav.classList.add('active');
    });
});

function clickBtn(button, form){
    button.addEventListener("click", () =>{
        form.style.display = 'block';
    });
}

clickBtn(signUpLink, form);
clickBtn(logInLink, form2);

// l





