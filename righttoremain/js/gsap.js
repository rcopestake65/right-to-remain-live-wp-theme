// ============ HOME PAGE ===================

gsap.set(".logo", { opacity: 0, y: -50 });
gsap.to(".logo", { duration: 2, x: 0, y: 0, opacity: 1 });

gsap.set(".home h2", { opacity: 0, y: -50, borderBottom: 0 });
gsap.to(".home h2", { duration: 2, x: 0, y: 0, opacity: 1, delay: 0.3 });

gsap.set(".underline", { width: 0 });
gsap.to(".underline", { width: "45%", delay: 1.3, duration: 1 });

gsap.set(".home img:nth-of-type(2)", { x: 150, opacity: 0 });
gsap.to(".home img:nth-of-type(2)", {duration: 2, x: 0, y: 0, opacity: 1, delay: 1.1,});

gsap.set(".home p:nth-of-type(1)", { x: -150, opacity: 0 });
gsap.to(".home p:nth-of-type(1)", { duration: 2, x: 0, y: 0, opacity: 1, delay: 1.1,});

gsap.set(".home p:nth-of-type(2)", { y: 50, opacity: 0 });
gsap.to(".home p:nth-of-type(2)", { duration: 2, x: 0, y: 0, opacity: 1, delay: 0.5,});

gsap.set(".next-btn-container", { y: 50, opacity: 0 });
gsap.to(".next-btn-container", {  duration: 2, x: 0, y: 0, opacity: 1, delay: 0.7,});

//more btn
gsap.to(".more-btn", { opacity: 1, duration: 1, repeat: -1, yoyo: true });

//background shapes
const tlshape = gsap.timeline({
  defaults: { duration: 0.8, scale: 0.2, ease: Back.easeOut.config(2), opacity: 0,},});
tlshape.from(".shape-1", { delay: 0.5, transformOrigin: "center" });
tlshape.from(".shape-2", { delay: 0, transformOrigin: "center" });
tlshape.from(".shape-3", { delay: 0, transformOrigin: "center" });





//=============== OVERVIEW & NAVIGATION =====================================================================

const overview = document.querySelector(".overview");
const stages = document.querySelector(".stages");
const starCards = document.querySelector(".star-cards");
const fun = document.querySelector(".fun");

if(overview || stages || starCards || fun){
  gsap.set(".overview h2", { opacity: 0, y: -50 });
  gsap.to(".overview h2", { duration: 2, x: 0, y: 0, opacity: 1, delay: 0.3 });
  
  gsap.set(".star-card", { x: 50, opacity: 0 });
  gsap.to(".star-card", { duration: 2, x: 0, y: 0, opacity: 1, delay: 0.3 });
  
  gsap.set(
    [".nav-item-1", ".nav-item-3", ".nav-item-5", ".nav-item-7", ".nav-item-9", ".nav-item-11"],
    { x: -40, opacity: 0 }
  );
  gsap.set([".nav-item-2", ".nav-item-4", ".nav-item-6", ".nav-item-8", ".nav-item-10", ".nav-item-12"], {
    x: 40,
    opacity: 0,
  });
  
  gsap.to(
    [
      ".nav-item-1",
      ".nav-item-2",
      ".nav-item-3",
      ".nav-item-4",
      ".nav-item-5",
      ".nav-item-6",
      ".nav-item-7",
      ".nav-item-8",
      ".nav-item-9",
      ".nav-item-10",
      ".nav-item-11",
      ".nav-item-12"
    ],
    { duration: 1, x: 0, opacity: 1, ease: "power.inOut(1, 0.3)", autoAlpha: 1 }
  );
  
  gsap.to(".nav-item-2", { delay: 0.2 });
  gsap.to(".nav-item-3", { delay: 0.3 });
  gsap.to(".nav-item-4", { delay: 0.4 });
  gsap.to(".nav-item-5", { delay: 0.5 });
  gsap.to(".nav-item-6", { delay: 0.6 });
  gsap.to(".nav-item-7", { delay: 0.7 });
  gsap.to(".nav-item-8", { delay: 0.8 });
  gsap.to(".nav-item-9", { delay: 0.9 });
  gsap.to(".nav-item-10", { delay: 1 });
  gsap.to(".nav-item-11", { delay: 1.1 });
  gsap.to(".nav-item-12", { delay: 1.2 });
  
  //tab slide out btn
  gsap.set(".arrow-right", { opacity: 0.5 });
  gsap.to(".arrow-right", { opacity: 1, duration: 1, repeat: -1, yoyo: true });
  //tab slide down btn mobile
  gsap.set(".arrow-down", { opacity: 0.5 });
  gsap.to(".arrow-down", { opacity: 1, duration: 1, repeat: -1, yoyo: true });
  
  //mouseover form nav items
  
  $(".nav-item").hover(over, out);
  
  function over() {
    gsap.to(this, 0.2, { x: 10 });
  }
  
  function out() {
    gsap.to(this, 0.2, { y: 0, x: 0 });
  }
  
  //mouseover home image/icon
  
  $(".home-btn").hover(overHome, outHome);
  
  function overHome() {
    gsap.to(this, 0, { scaleX: 1.3, scaleY: 1.3 });
  }
  
  function outHome() {
    gsap.to(this, 0, { scaleX: 1, scaleY: 1 });
  }
  //mouseover star card
  gsap.set(".star-card", { transformOrigin: "100% 100%" });
  $(".star-card").hover(starOver, starOut);
  
  function starOver() {
    gsap.to(this, 0.2, {
      scaleX: "1.05",
      scaleY: "1.05",
      transformOrigin: "center center",
    });
  }
  
  function starOut() {
    gsap.to(this, 0.2, { scaleX: "1", scaleY: "1" });
  }
  //illustrations
  gsap.set(".illustration-1", { opacity: 0, x: -150 });
  gsap.to(".illustration-1", { duration: 2, x: 0, y: 0, opacity: 1, delay: 0.3 });
  
  gsap.set(".illustration-2", { opacity: 0, x: 150 });
  gsap.to(".illustration-2", {
    duration: 2,
    x: 50,
    y: 0,
    opacity: 1,
    delay: 0.3,
  });


}//end if statement



//=========== STAGES GENERIC ANIMATIONS ===================================

const stagesHeader = document.querySelector(".stages h2");
const stagesImage = document.querySelector(".stages img.face");
const starHeader = document.querySelector(".star-cards h2");
const starImage = document.querySelector(".star-cards img.face");

if(stagesHeader){
  gsap.set(stagesHeader, { opacity: 0, x: -50, borderBottom: 0 });
  gsap.to(stagesHeader, { duration: 1, x: 0, y: 0, opacity: 1, delay: 0.1 });
}
if(stagesImage){
  gsap.set(stagesImage, { opacity: 0, x: -50, borderBottom: 0 });
  gsap.to(stagesImage, {duration: 1, x: 0, y: 0, opacity: 1, delay: 0.1,});
}
if(starHeader){
  gsap.set(starHeader, { opacity: 0, x: -50, borderBottom: 0 });
  gsap.to(starHeader, { duration: 1, x: 0, y: 0, opacity: 1, delay: 0.1 });
}
if(starImage){
  gsap.set(starImage, { opacity: 0, x: -50, borderBottom: 0 });
  gsap.to(starImage, {duration: 1, x: 0, y: 0, opacity: 1, delay: 0.1,});
}

//backround colour drops down from the top
const bgColour = document.querySelector(".bg-colour");
if(bgColour){
  gsap.set(bgColour, {height: '0'});
  gsap.to(bgColour, { duration: 1, delay: 0.5, top: 0, left: 0, height: 'auto', ease:Linear.easeNone});
}

//cards animate
const card = document.querySelectorAll(".card-container");
if(card){
  $.each($(card), function (i, element) {
  gsap.set(card, { opacity: 0, scaleX: 0, scaleY: 0 });
  gsap.to(card, {duration: 1, scaleX: 1, scaleY: 1, opacity: 1, delay: 0.1,});
})
}

// ========== PROBLEMS & ACTIONS  ======================


//are we on the stages template - then run these animations
if(stages){

//flipping the cards using the btn at the base of the card
gsap.set($(".card-back"), { rotationY: -180 });

$.each($(".card-container"), function (i, element) {
 let frontCard = $(this).children(".card-front");
 let backCard = $(this).children(".card-back");
 let cardFlip = frontCard.children(".flip-btn");
 let cardFlipBack = backCard.children(".flip-btn-back");
 let tlcardShow = gsap.timeline({ paused: true });

  tlcardShow
    .to(frontCard, { duration: 1, rotationY: 180 })
    .to(backCard, { duration: 1, rotationY: 0 }, 0);


  // element.animation = tlcardShow;

  // let forward = false;

  $(cardFlip).click(function () {
    
      tlcardShow.play();
  
    })
    $(cardFlipBack).click(function () {
  
      tlcardShow.reverse();
    
    })

  })

//pulse animation on flip card icon

gsap.set(".flip-btn", { opacity: 0.5 });
gsap.to(".flip-btn", { opacity: 1, duration: 1, repeat: -1, yoyo: true });

//Problem Read More Cards

//hide until read more btn clicked
gsap.set([".card-full-1" ,".card-full-2", ".card-full-3" , ".card-full-4" , ".card-full-5" , ".card-full-6" , ".card-full-7", ".card-full-8", ".card-full-9", ".card-full-10", ".card-full-11" ], { opacity: 0, scaleX: 0, scaleY: 0, display: "none" });

//card-full 1 show
var tlcardFull1 = new gsap.timeline({ paused: true });
tlcardFull1.to(".card-full-1", {scaleX: 1, scaleY: 1, transformOrigin: "center center", opacity: 1, duration: 0.5, display: "flex",});

$(".read-more-btn-1").on("click", function () {
  tlcardFull1.play();
});

$(".card-full-close-btn").on("click", function () {
  tlcardFull1.reverse();
});

//card-full 2 show
var tlcardFull2 = new gsap.timeline({ paused: true });
tlcardFull2.to(".card-full-2", {scaleX: 1, scaleY: 1, transformOrigin: "center center", opacity: 1, duration: 0.5, display: "flex",});

$(".read-more-btn-2").on("click", function () {
  tlcardFull2.play();
});

$(".card-full-close-btn").on("click", function () {
  tlcardFull2.reverse();
});

//card-full 3 show
var tlcardFull3 = new gsap.timeline({ paused: true });
tlcardFull3.to(".card-full-3", {scaleX: 1, scaleY: 1, transformOrigin: "center center", opacity: 1, duration: 0.5, display: "flex",});

$(".read-more-btn-3").on("click", function () {
  tlcardFull3.play();
});

$(".card-full-close-btn-3").on("click", function () {
  tlcardFull3.reverse();
});

//card-full 4 show
var tlcardFull4 = new gsap.timeline({ paused: true });
tlcardFull4.to(".card-full-4", {scaleX: 1, scaleY: 1, transformOrigin: "center center", opacity: 1, duration: 0.5, display: "flex",});

$(".read-more-btn-4").on("click", function () {
  tlcardFull4.play();
});

$(".card-full-close-btn-4").on("click", function () {
  tlcardFull4.reverse();
});

//card-full 5 show
var tlcardFull5 = new gsap.timeline({ paused: true });
tlcardFull5.to(".card-full-5", {scaleX: 1, scaleY: 1, transformOrigin: "center center", opacity: 1, duration: 0.5, display: "flex",});

$(".read-more-btn-5").on("click", function () {
  tlcardFull5.play();
});

$(".card-full-close-btn-5").on("click", function () {
  tlcardFull5.reverse();
});

//card-full 6 show
var tlcardFull6 = new gsap.timeline({ paused: true });
tlcardFull6.to(".card-full-6", {scaleX: 1, scaleY: 1, transformOrigin: "center center", opacity: 1, duration: 0.5, display: "flex",});

$(".read-more-btn-6").on("click", function () {
  tlcardFull6.play();
});

$(".card-full-close-btn-6").on("click", function () {
  tlcardFull6.reverse();
});

//card-full 7 show
var tlcardFull7 = new gsap.timeline({ paused: true });
tlcardFull7.to(".card-full-7", {scaleX: 1, scaleY: 1, transformOrigin: "center center", opacity: 1, duration: 0.5, display: "flex",});

$(".read-more-btn-7").on("click", function () {
  tlcardFull7.play();
});

$(".card-full-close-btn-7").on("click", function () {
  tlcardFull7.reverse();
});

//card-full 8 show
var tlcardFull8 = new gsap.timeline({ paused: true });
tlcardFull8.to(".card-full-8", {scaleX: 1, scaleY: 1, transformOrigin: "center center", opacity: 1, duration: 0.5, display: "flex",});

$(".read-more-btn-8").on("click", function () {
  tlcardFull8.play();
});

$(".card-full-close-btn-8").on("click", function () {
  tlcardFull8.reverse();
});

//card-full 9 show
var tlcardFull9 = new gsap.timeline({ paused: true });
tlcardFull9.to(".card-full-9", {scaleX: 1, scaleY: 1, transformOrigin: "center center", opacity: 1, duration: 0.5, display: "flex",});

$(".read-more-btn-9").on("click", function () {
  tlcardFull9.play();
});

$(".card-full-close-btn-9").on("click", function () {
  tlcardFull9.reverse();
});

//card-full 10 show
var tlcardFull10 = new gsap.timeline({ paused: true });
tlcardFull10.to(".card-full-10", {scaleX: 1, scaleY: 1, transformOrigin: "center center", opacity: 1, duration: 0.5, display: "flex",});

$(".read-more-btn-10").on("click", function () {
  tlcardFull10.play();
});

$(".card-full-close-btn-10").on("click", function () {
  tlcardFull10.reverse();
});

$(".menu-open-btn").on("click", function () {
  tlcardFull10.reverse();
});



$(".menu-open-btn").on("click", function () {
  tlcardFull1.reverse();
  tlcardFull2.reverse();
  tlcardFull3.reverse();
  tlcardFull4.reverse();
  tlcardFull5.reverse();
  tlcardFull6.reverse();
  tlcardFull7.reverse();
  tlcardFull8.reverse();
  tlcardFull9.reverse();
  tlcardFull10.reverse();
  //not needed until content increases
  //tlcardFull11.reverse();
  //tlcardFull12.reverse();
  
});


}//end if stages statement


//=========== STAR CARDS ==================




if(starCards){

//all cards hidden
gsap.set([".card"], { opacity: 0, scaleX: 0, scaleY: 0, display: "none" });

///////////////////////////////////////////////////////

/*card-1 show*/

var tlcards1 = new gsap.timeline({ paused: true });

$(".card-btn-1").on("click", function () {
  tlcards1.play();
});

tlcards1.to(".card-1", {
  scaleX: 1,
  scaleY: 1,
  transformOrigin: "center center",
  opacity: 1,
  duration: 0.5,
  display: "block",
});

/*close card-1*/
var tlcardsClose1 = new gsap.timeline({ paused: true });

$(".card-close-btn-1").on("click", function () {
  tlcards1.reverse();
});

/*card-2 show*/
var tlcards2 = new gsap.timeline({ paused: true });

$(".card-btn-2").on("click", function () {
  tlcards2.play();
});

tlcards2.to(".card-2", {scaleX: 1, scaleY: 1, transformOrigin: "center center", opacity: 1, duration: 0.5, display: "block",});

var tlcardsClose2 = new gsap.timeline({ paused: true });

$(".card-close-btn-2").on("click", function () {
  tlcards2.reverse();
});

/*card-3 show*/
var tlcards3 = new gsap.timeline({ paused: true });

$(".card-btn-3").on("click", function () {
  tlcards3.play();
});

tlcards3.to(".card-3", {
  scaleX: 1,
  scaleY: 1,
  transformOrigin: "center center",
  opacity: 1,
  duration: 0.5,
  display: "block",
});

var tlcardsClose3 = new gsap.timeline({ paused: true });

$(".card-close-btn-3").on("click", function () {
  tlcards3.reverse();
});

/*card-4 show*/
var tlcards4 = new gsap.timeline({ paused: true });

$(".card-btn-4").on("click", function () {
  tlcards4.play();
});

tlcards4.to(".card-4", {
  scaleX: 1,
  scaleY: 1,
  transformOrigin: "center center",
  opacity: 1,
  duration: 0.5,
  display: "block",
});

var tlcardsClose4 = new gsap.timeline({ paused: true });

$(".card-close-btn-4").on("click", function () {
  tlcards4.reverse();
});

/*card-5 show*/
var tlcards5 = new gsap.timeline({ paused: true });

$(".card-btn-5").on("click", function () {
  tlcards5.play();
});

tlcards5.to(".card-5", {
  scaleX: 1,
  scaleY: 1,
  transformOrigin: "center center",
  opacity: 1,
  duration: 0.5,
  display: "block",
});

var tlcardsClose5 = new gsap.timeline({ paused: true });

$(".card-close-btn-5").on("click", function () {
  tlcards5.reverse();
});

/*card-6 show*/
var tlcards6 = new gsap.timeline({ paused: true });

$(".card-btn-6").on("click", function () {
  tlcards6.play();
});

tlcards6.to(".card-6", {
  scaleX: 1,
  scaleY: 1,
  transformOrigin: "center center",
  opacity: 1,
  duration: 0.5,
  display: "block",
});

var tlcardsClose6 = new gsap.timeline({ paused: true });

$(".card-close-btn-6").on("click", function () {
  tlcards6.reverse();
});

/*card-7 show*/
var tlcards7 = new gsap.timeline({ paused: true });

$(".card-btn-7").on("click", function () {
  tlcards7.play();
});

tlcards7.to(".card-7", {
  scaleX: 1,
  scaleY: 1,
  transformOrigin: "center center",
  opacity: 1,
  duration: 0.5,
  display: "block",
});

var tlcardsClose7 = new gsap.timeline({ paused: true });

$(".card-close-btn-7").on("click", function () {
  tlcards7.reverse();
});

/*card-8 show*/
var tlcards8 = new gsap.timeline({ paused: true });

$(".card-btn-8").on("click", function () {
  tlcards8.play();
});

tlcards8.to(".card-8", {
  scaleX: 1,
  scaleY: 1,
  transformOrigin: "center center",
  opacity: 1,
  duration: 0.5,
  display: "block",
});

var tlcardsClose8 = new gsap.timeline({ paused: true });

$(".card-close-btn-8").on("click", function () {
  tlcards8.reverse();
});


/*card-9 show*/
var tlcards9 = new gsap.timeline({ paused: true });

$(".card-btn-9").on("click", function () {
  tlcards9.play();
});

tlcards9.to(".card-9", {
  scaleX: 1,
  scaleY: 1,
  transformOrigin: "center center",
  opacity: 1,
  duration: 0.5,
  display: "block",
});

var tlcardsClose9 = new gsap.timeline({ paused: true });

$(".card-close-btn-9").on("click", function () {
  tlcards9.reverse();
});

/*card-10 show*/
var tlcards10 = new gsap.timeline({ paused: true });

$(".card-btn-10").on("click", function () {
  tlcards10.play();
});

tlcards10.to(".card-10", {
  scaleX: 1,
  scaleY: 1,
  transformOrigin: "center center",
  opacity: 1,
  duration: 0.5,
  display: "block",
});

var tlcardsClose10 = new gsap.timeline({ paused: true });

$(".card-close-btn-10").on("click", function () {
  tlcards10.reverse();
});

/*card-11 show*/
var tlcards11 = new gsap.timeline({ paused: true });

$(".card-btn-11").on("click", function () {
  tlcards11.play();
});

tlcards11.to(".card-11", {
  scaleX: 1,
  scaleY: 1,
  transformOrigin: "center center",
  opacity: 1,
  duration: 0.5,
  display: "block",
});

var tlcardsClose11 = new gsap.timeline({ paused: true });

$(".card-close-btn-11").on("click", function () {
  tlcards11.reverse();
});

/*card-12 show*/
var tlcards12 = new gsap.timeline({ paused: true });

$(".card-btn-12").on("click", function () {
  tlcards12.play();
});

tlcards12.to(".card-12", {
  scaleX: 1,
  scaleY: 1,
  transformOrigin: "center center",
  opacity: 1,
  duration: 0.5,
  display: "block",
});

var tlcardsClose12 = new gsap.timeline({ paused: true });

$(".card-close-btn-12").on("click", function () {
  tlcards12.reverse();
});

/*card-13 show*/
var tlcards13 = new gsap.timeline({ paused: true });

$(".card-btn-13").on("click", function () {
  tlcards13.play();
});

tlcards13.to(".card-13", {
  scaleX: 1,
  scaleY: 1,
  transformOrigin: "center center",
  opacity: 1,
  duration: 0.5,
  display: "block",
});

var tlcardsClose13 = new gsap.timeline({ paused: true });

$(".card-close-btn-13").on("click", function () {
  tlcards13.reverse();
});

/*card-14 show*/
var tlcards14 = new gsap.timeline({ paused: true });

$(".card-btn-14").on("click", function () {
  tlcards14.play();
});

tlcards14.to(".card-14", {
  scaleX: 1,
  scaleY: 1,
  transformOrigin: "center center",
  opacity: 1,
  duration: 0.5,
  display: "block",
});

var tlcardsClose14 = new gsap.timeline({ paused: true });

$(".card-close-btn-14").on("click", function () {
  tlcards14.reverse();
});

/*card-15 show*/
var tlcards15 = new gsap.timeline({ paused: true });

$(".card-btn-15").on("click", function () {
  tlcards15.play();
});

tlcards15.to(".card-15", {
  scaleX: 1,
  scaleY: 1,
  transformOrigin: "center center",
  opacity: 1,
  duration: 0.5,
  display: "block",
});

var tlcardsClose15 = new gsap.timeline({ paused: true });

$(".card-close-btn-15").on("click", function () {
  tlcards15.reverse();
});

/*card-16 show*/
var tlcards16 = new gsap.timeline({ paused: true });

$(".card-btn-16").on("click", function () {
  tlcards16.play();
});

tlcards16.to(".card-16", {
  scaleX: 1,
  scaleY: 1,
  transformOrigin: "center center",
  opacity: 1,
  duration: 0.5,
  display: "block",
});

var tlcardsClose16 = new gsap.timeline({ paused: true });

$(".card-close-btn-16").on("click", function () {
  tlcards16.reverse();
});

/*card-17 show*/
var tlcards17 = new gsap.timeline({ paused: true });

$(".card-btn-17").on("click", function () {
  tlcards17.play();
});

tlcards17.to(".card-17", {
  scaleX: 1,
  scaleY: 1,
  transformOrigin: "center center",
  opacity: 1,
  duration: 0.5,
  display: "block",
});

var tlcardsClose17 = new gsap.timeline({ paused: true });

$(".card-close-btn-17").on("click", function () {
  tlcards17.reverse();
});

/*card-18 show*/
var tlcards18 = new gsap.timeline({ paused: true });

$(".card-btn-18").on("click", function () {
  tlcards18.play();
});

tlcards18.to(".card-18", {
  scaleX: 1,
  scaleY: 1,
  transformOrigin: "center center",
  opacity: 1,
  duration: 0.5,
  display: "block",
});

var tlcardsClose18 = new gsap.timeline({ paused: true });

$(".card-close-btn-18").on("click", function () {
  tlcards18.reverse();
});
///////////////////////////////////////////////////////

//mouseover star cards
gsap.set(".card-btn", { transformOrigin: "100% 100%" });
$(".card-btn").hover(cardOver, cardOut);

function cardOver() {
  gsap.to(this, 0.2, { rotation: "+=3" });
}

function cardOut() {
  gsap.to(this, 0.2, { rotation: "0" });
}

}//end if starCards statement