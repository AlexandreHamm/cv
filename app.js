let btns = document.querySelectorAll(".mainNav__btn");
let pos = 1;

// REVEAL INIT

window.onload = function(){
   document.querySelectorAll('.mainBlock__wrapper__slide__content__reveal').forEach(function(element){
      element.style.top = (100*Math.random()) + "%";
      element.style.left = (100*Math.random()) + "%";
   });
};

// NAVBAR

function removeActive(){
   btns.forEach(function(btn){
      if(btn.classList.contains('active')){
         btn.classList.remove("active");
      }
   });
}

function one(){
   document.querySelector('.mainBlock__wrapper').style.transform = 'rotate(90deg) translateY(-100vh) translateX(0)';
      document.querySelector('.bgBlock__counter').style.transform = 'translateY(0)';
      document.querySelector('.mainNav__btn:nth-child(4)').style.transform = 'rotate(180deg) translateY(calc(-100vw + (128px)))';
      removeActive();
      document.querySelector('.mainNav__btn:nth-child(4)').classList.add('active');
      document.querySelector('.mainNav__btn:nth-child(4)').classList.add('shine');
      setTimeout(function(){
         document.querySelector('.mainNav__btn:nth-child(4)').classList.remove('shine');
      }, 700);
   if(pos > 1){
      document.querySelector('.mainNav__btn:nth-child(3)').style.transform = 'rotate(180deg) translateY(0)';
      document.querySelector('.mainNav__btn:nth-child(2)').style.transform = 'rotate(180deg) translateY(0)';
      document.querySelector('.mainNav__btn:nth-child(1)').style.transform = 'rotate(180deg) translateY(0)';
   }
   pos = 1;
}
function two(){
   document.querySelector('.mainBlock__wrapper').style.transform = 'rotate(90deg) translateY(-100vh) translateX(-100vw)';
   document.querySelector('.bgBlock__counter').style.transform = 'translateY(-25%)';
   document.querySelector('.mainNav__btn:nth-child(4)').style.transform = 'rotate(180deg) translateY(calc(-100vw + (128px)))';
   document.querySelector('.mainNav__btn:nth-child(3)').style.transform = 'rotate(180deg) translateY(calc(-100vw + (128px)))';
   removeActive();
   document.querySelector('.mainNav__btn:nth-child(3)').classList.add('active');
   document.querySelector('.mainNav__btn:nth-child(3)').classList.add('shine');
      setTimeout(function(){
         document.querySelector('.mainNav__btn:nth-child(3)').classList.remove('shine');
      }, 700);
   if(pos > 2){
      document.querySelector('.mainNav__btn:nth-child(2)').style.transform = 'rotate(180deg) translateY(0)';
      document.querySelector('.mainNav__btn:nth-child(1)').style.transform = 'rotate(180deg) translateY(0)';
   }
   pos = 2;
}
function three(){
   document.querySelector('.mainBlock__wrapper').style.transform = 'rotate(90deg) translateY(-100vh) translateX(-200vw)';
   document.querySelector('.bgBlock__counter').style.transform = 'translateY(-50%)';
   document.querySelector('.mainNav__btn:nth-child(4)').style.transform = 'rotate(180deg) translateY(calc(-100vw + (128px)))';
   document.querySelector('.mainNav__btn:nth-child(3)').style.transform = 'rotate(180deg) translateY(calc(-100vw + (128px)))';
   document.querySelector('.mainNav__btn:nth-child(2)').style.transform = 'rotate(180deg) translateY(calc(-100vw + (128px)))';
   removeActive();
   document.querySelector('.mainNav__btn:nth-child(2)').classList.add('active');
   document.querySelector('.mainNav__btn:nth-child(2)').classList.add('shine');
      setTimeout(function(){
         document.querySelector('.mainNav__btn:nth-child(2)').classList.remove('shine');
      }, 700);
   if(pos > 3){
      document.querySelector('.mainNav__btn:nth-child(1)').style.transform = 'rotate(180deg) translateY(0)';
   }
   pos = 3;
}
function four(){
   document.querySelector('.mainBlock__wrapper').style.transform = 'rotate(90deg) translateY(-100vh) translateX(-300vw)';
   document.querySelector('.bgBlock__counter').style.transform = 'translateY(-75%)';
   document.querySelector('.mainNav__btn:nth-child(4)').style.transform = 'rotate(180deg) translateY(calc(-100vw + (128px)))';
   document.querySelector('.mainNav__btn:nth-child(3)').style.transform = 'rotate(180deg) translateY(calc(-100vw + (128px)))';
   document.querySelector('.mainNav__btn:nth-child(2)').style.transform = 'rotate(180deg) translateY(calc(-100vw + (128px)))';
   document.querySelector('.mainNav__btn:nth-child(1)').style.transform = 'rotate(180deg) translateY(calc(-100vw + (128px)))';
   removeActive();
   document.querySelector('.mainNav__btn:nth-child(1)').classList.add('active');
   document.querySelector('.mainNav__btn:nth-child(1)').classList.add('shine');
      setTimeout(function(){
         document.querySelector('.mainNav__btn:nth-child(1)').classList.remove('shine');
      }, 700);
   pos = 4;
}

// HOVER SHOW CONTENT

document.querySelectorAll('.mainBlock__wrapper__slide__content__reveal').forEach(function(element){
   element.addEventListener('mouseenter', function(){
      document.querySelectorAll('.mainBlock__wrapper__slide__content__img').forEach(function(elmnt){
         elmnt.style.opacity = '.7';
      });
   });
   element.addEventListener('mouseleave', function(){
      document.querySelectorAll('.mainBlock__wrapper__slide__content__img').forEach(function(elmnt){
         elmnt.style.opacity = '0';
      });
   });
});

// JURASSIC PARK EASTER EGG
let disable = true,
   alertModal = false;
document.getElementById('park').volume = 0.2;


   // DISABLE RIGHT CLICK
window.oncontextmenu = function(){
   if(disable == true){
      document.querySelector('.alertModal').style.transform = 'translate(-50%) scale(1)';
      alertModal = true;
      return false;
   }
}
function hideAlert(){
   document.querySelector('.alertModal').style.transform = 'translate(-50%) scale(0)';
   alertModal = false;
}
 
document.onkeydown = function (e) {

   // DISABLE F12
   if(e.keyCode == 123) {
      if(disable == true){
         document.querySelector('.parkModal').style.display = 'flex';
         document.getElementById('park').play();
         if(alertModal == true){
            hideAlert();
         }
         return false;
      }
   }

   // DISABLE CTRL + SHIFT + I
   if(e.ctrlKey && e.shiftKey && e.keyCode == 73){
      if(disable == true){
         document.querySelector('.parkModal').style.display = 'flex';
         document.getElementById('park').play();
         if(alertModal == true){
            hideAlert();
         }
         return false;
      }
   }

   // DISABLE CTRL + SHIFT + J
   if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {
      if(disable == true){
         document.querySelector('.parkModal').style.display = 'flex';
         document.getElementById('park').play();
         if(alertModal == true){
            hideAlert();
         }
         return false;
      }
   }

   // DISABLE CTRL + U
   if(e.ctrlKey && e.keyCode == 85) {
      if(disable == true){
         document.querySelector('.parkModal').style.display = 'flex';
         document.getElementById('park').play();
         if(alertModal == true){
            hideAlert();
         }
         return false;
      }
   }
}

// MODAL

function magicWord(){
   document.querySelector('.parkModal').style.display = 'none';
   document.getElementById('park').pause();
   disable = false;
}