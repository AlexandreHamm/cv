let btns = document.querySelectorAll("nav > button > p");
let pos = 1;

function removeActive(){
   btns.forEach(function(btn){
      if(btn.classList.contains('active')){
         btn.classList.remove("active");
      }
   });
}

function one(){
   document.querySelector('.content__main').style.transform = 'rotate(90deg) translateY(-100vh) translateX(0)';
      document.querySelector('.content__bg--counter').style.transform = 'translateY(0)';
      document.querySelector('nav > button:nth-child(4)').style.transform = 'rotate(180deg) translateY(calc(-100vw + (124px)))';
      removeActive();
      document.querySelector('nav > button:nth-child(4) > p').classList.add('active');
   if(pos > 1){
      document.querySelector('nav > button:nth-child(3)').style.transform = 'rotate(180deg) translateY(0)';
      document.querySelector('nav > button:nth-child(2)').style.transform = 'rotate(180deg) translateY(0)';
      document.querySelector('nav > button:nth-child(1)').style.transform = 'rotate(180deg) translateY(0)';
   }
   pos = 1;
}
function two(){
   document.querySelector('.content__main').style.transform = 'rotate(90deg) translateY(-100vh) translateX(-100vw)';
   document.querySelector('.content__bg--counter').style.transform = 'translateY(-25%)';
   document.querySelector('nav > button:nth-child(4)').style.transform = 'rotate(180deg) translateY(calc(-100vw + (124px)))';
   document.querySelector('nav > button:nth-child(3)').style.transform = 'rotate(180deg) translateY(calc(-100vw + (124px)))';
   removeActive();
   document.querySelector('nav > button:nth-child(3) > p').classList.add('active');
   if(pos > 2){
      document.querySelector('nav > button:nth-child(2)').style.transform = 'rotate(180deg) translateY(0)';
      document.querySelector('nav > button:nth-child(1)').style.transform = 'rotate(180deg) translateY(0)';
   }
   pos = 2;
}
function three(){
   document.querySelector('.content__main').style.transform = 'rotate(90deg) translateY(-100vh) translateX(-200vw)';
   document.querySelector('.content__bg--counter').style.transform = 'translateY(-50%)';
   document.querySelector('nav > button:nth-child(4)').style.transform = 'rotate(180deg) translateY(calc(-100vw + (124px)))';
   document.querySelector('nav > button:nth-child(3)').style.transform = 'rotate(180deg) translateY(calc(-100vw + (124px)))';
   document.querySelector('nav > button:nth-child(2)').style.transform = 'rotate(180deg) translateY(calc(-100vw + (124px)))';
   removeActive();
   document.querySelector('nav > button:nth-child(2) > p').classList.add('active');
   if(pos > 3){
      document.querySelector('nav > button:nth-child(1)').style.transform = 'rotate(180deg) translateY(0)';
   }
   pos = 3;
}
function four(){
   document.querySelector('.content__main').style.transform = 'rotate(90deg) translateY(-100vh) translateX(-300vw)';
   document.querySelector('.content__bg--counter').style.transform = 'translateY(-75%)';
   document.querySelector('nav > button:nth-child(4)').style.transform = 'rotate(180deg) translateY(calc(-100vw + (124px)))';
   document.querySelector('nav > button:nth-child(3)').style.transform = 'rotate(180deg) translateY(calc(-100vw + (124px)))';
   document.querySelector('nav > button:nth-child(2)').style.transform = 'rotate(180deg) translateY(calc(-100vw + (124px)))';
   document.querySelector('nav > button:nth-child(1)').style.transform = 'rotate(180deg) translateY(calc(-100vw + (124px)))';
   removeActive();
   document.querySelector('nav > button:nth-child(1) > p').classList.add('active');
   pos = 4;
}

// JURASSIC PARK EASTER EGG
let disable = true;
document.getElementById('park').volume = 0.2;


   // disable right click
window.oncontextmenu = function(){
   if(disable == true){
      return false;
   }
}
 
document.onkeydown = function (e) {

   // disable F12 key
   if(e.keyCode == 123) {
      if(disable == true){
         document.querySelector('.magic__word').style.display = 'flex';
         document.getElementById('park').play();
         return false;
      }
   }

   // disable I key
   if(e.ctrlKey && e.shiftKey && e.keyCode == 73){
      if(disable == true){
         document.querySelector('.magic__word').style.display = 'flex';
         document.getElementById('park').play();
         return false;
      }
   }

   // disable J key
   if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {
      if(disable == true){
         document.querySelector('.magic__word').style.display = 'flex';
         document.getElementById('park').play();
         return false;
      }
   }

   // disable U key
   if(e.ctrlKey && e.keyCode == 85) {
      if(disable == true){
         document.querySelector('.magic__word').style.display = 'flex';
         document.getElementById('park').play();
         return false;
      }
   }
}

function magicWord(){
   document.querySelector('.magic__word').style.display = 'none';
   document.getElementById('park').pause();
   disable = false;
}