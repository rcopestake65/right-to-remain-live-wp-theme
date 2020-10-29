//======main menu hamburger

//open
document.querySelector('.menu-open-btn').addEventListener('click', () => document.querySelector('.main-nav').classList.toggle('show'));


//rotate chevrons
document.querySelector('.menu-open-btn').addEventListener('click', () => document.querySelector('.arrow-right').classList.toggle('rotate'));
document.querySelector('.menu-open-btn').addEventListener('click', () => document.querySelector('.arrow-down').classList.toggle('rotate'));

//close
//document.querySelector('.menu-close-btn').addEventListener('click', () => document.querySelector('.main-nav').classList.remove('show'));

//close main-menu if any problems btn clicked
document.querySelector('.flip-btn').addEventListener('click', () => document.querySelector('.main-nav').classList.remove('show'));
document.querySelector('.flip-btn-back').addEventListener('click', () => document.querySelector('.main-nav').classList.remove('show'));
document.querySelector('.read-more-btn').addEventListener('click', () => document.querySelector('.main-nav').classList.remove('show'));

//close main-menu if star cards btn clicked
const closeMenu2 = document.querySelectorAll(".card-btn");
for (let i = 0; i < closeMenu2.length; i++) {
    closeMenu2[i].addEventListener('click', () => document.querySelector('.main-nav').classList.remove('show'));
}

