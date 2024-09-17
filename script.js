searchForm = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
}







window.onscroll = () =>{
    searchForm.classList.remove('active');

    if(window.scrollY > 80){
        document.querySelector('.header .header-2').classList.add('active');
    }else{
        document.querySelector( '.header .header-2').classList.remove('active');
    }
}

window.onload = () =>{
    if(window.scrollY > 80){
        document.querySelector('.header .header-2').classList.add('active');
    }else{
        document.querySelector( '.header .header-2').classList.remove('active');
    }
    fadeOut();
}



/*var swiper = new Swiper(".books-slider", {
   loop:true,
   centeredSlides:true,
   autoplay: {
       delay: 9500,
       disableOnInteraction: false,
      },
    breakpoints: {
      0: {
        slidesPerView: 1,
        
      },
      768: {
        slidesPerView: 2,
        
      },
      1024: {
        slidesPerView: 3,
       
      },
    },
  });*/

  var swiper = new Swiper(".card_slider", {
    /* slidesPerView: 3,
    spaceBetween: 10,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});*/
loop:true,
centeredSlides:true,
autoplay: {
   delay: 4000,
   disableOnInteraction: false,
  },
breakpoints: {
  0: {
    slidesPerView: 1,
    
  },
  768: {
    slidesPerView: 2,
    
  },
  1024: {
    slidesPerView: 3,
   
  },
},
});




    
function loader(){
  [].forEach.call(document.querySelectorAll('.loader-con'), function (el) {
    el.style.display = 'none';
  });
}
function fadeOut(){
    setTimeout(loader,4000);
}
//contact
document.addEventListener('DOMContentLoaded', () => {
  const userBtn = document.getElementById('user-btn');
  if (userBtn) {
      userBtn.addEventListener('click', () => {
          // Add your functionality here
          console.log('User button clicked');
      });
  } else {
      console.error('Element with ID user-btn not found');
  }

  const profile = document.getElementById('profile');
  if (profile) {
      window.onscroll = () => {
          // Add your functionality here
          console.log('Window scrolled');
      };
  } else {
      console.error('Profile element not found');
  }
});
