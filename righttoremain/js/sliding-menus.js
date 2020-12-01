//======main menu hamburger

//open
document.querySelector('.menu-open-btn').addEventListener('click', () => document.querySelector('.main-nav').classList.toggle('show'));


//rotate chevrons
document.querySelector('.menu-open-btn').addEventListener('click', () => document.querySelector('.arrow-right').classList.toggle('rotate'));
document.querySelector('.menu-open-btn').addEventListener('click', () => document.querySelector('.arrow-down').classList.toggle('rotate'));

//close
//document.querySelector('.menu-close-btn').addEventListener('click', () => document.querySelector('.main-nav').classList.remove('show'));

//close main-menu if any other btn clicked
document.querySelector('.flip-btn').addEventListener('click', () => document.querySelector('.main-nav').classList.remove('show'));
document.querySelector('.flip-btn-back').addEventListener('click', () => document.querySelector('.main-nav').classList.remove('show'));
document.querySelector('.read-more-btn').addEventListener('click', () => document.querySelector('.main-nav').classList.remove('show'));

//close main-menu if star cards btn clicked
const closeMenu2 = document.querySelectorAll(".card-btn");
for (let i = 0; i < closeMenu2.length; i++) {
    closeMenu2[i].addEventListener('click', () => document.querySelector('.main-nav').classList.remove('show'));
}
//mobile only close button
document.querySelector('.mobile-nav-close').addEventListener('click', () => document.querySelector('.main-nav').classList.remove('show'));


//======utilities menu

//open
document.querySelector('.utilities-menu-open-btn').addEventListener('click', () => document.querySelector('.utilities-nav').classList.toggle('utilities-show'));


//rotate chevrons
document.querySelector('.utilities-menu-open-btn').addEventListener('click', () => document.querySelector('.arrow-left').classList.toggle('utilities-rotate'));
document.querySelector('.utilities-menu-open-btn').addEventListener('click', () => document.querySelector('.arrow-up').classList.toggle('utilities-rotate'));

//mobile only close button
document.querySelector('.mobile-utilities-nav-close').addEventListener('click', () => document.querySelector('.utilities-nav').classList.remove('utilities-show'));


//close main-menu or utilities menu if any other btn clicked
document.querySelector('.utilities-menu-open-btn').addEventListener('click', () => document.querySelector('.main-nav').classList.remove('show'));
document.querySelector('.menu-open-btn').addEventListener('click', () => document.querySelector('.utilities-nav').classList.remove('utilities-show'));
document.querySelector('.flip-btn').addEventListener('click', () => document.querySelector('.utilities-nav').classList.remove('utilities-show'));
document.querySelector('.flip-btn-back').addEventListener('click', () => document.querySelector('.utilities-nav').classList.remove('utilities-show'));
document.querySelector('.read-more-btn').addEventListener('click', () => document.querySelector('.utilities-nav').classList.remove('utilities-show'));

//close main-menu if star cards btn clicked
// const closeMenu3 = document.querySelectorAll(".card-btn");
// for (let i = 0; i < closeMenu2.length; i++) {
//     closeMenu2[i].addEventListener('click', () => document.querySelector('.utlities-nav').classList.remove('show'));
// }
