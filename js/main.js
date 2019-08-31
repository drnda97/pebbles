if (window.matchMedia("(min-width: 1025px)").matches) {
  /* the view port is at least 1216px pixels wide */
  window.addEventListener('scroll', (e) => {
    var navbar = document.querySelector('nav');
    var img_pos = document.querySelector('#img_pos');
    var logo = document.querySelector('.logo');
    var ul_nav = document.querySelector('.nav_ul');
    if(window.scrollY > 0){
      navbar.style.position = 'fixed';
      navbar.style.top = '0';
      navbar.style.left = '0';
      logo.style.margin = '0';
      logo.style.float = 'left';
      logo.style.marginRight = '574px';
      img_pos.style.width = '100px';
      img_pos.style.padding = '15px';
      ul_nav.style.display = 'block';
      ul_nav.style.clear = 'none';
      ul_nav.style.float = 'right';
      ul_nav.style.paddingTop = '30px';
      ul_nav.style.paddingBottom = '30px';
    }
    if(window.scrollY === 0){
      navbar.style.position = '';
      logo.style.margin = '0 auto';
      logo.style.float = 'none';
      logo.style.marginRight = '0';
      img_pos.style.width = '220px';
      ul_nav.style.display = '';
      ul_nav.style.clear = 'both';
      ul_nav.style.float = '';
      ul_nav.style.paddingTop = '';
    }
  });
}else if (window.matchMedia("(min-width: 721px) and (max-width: 1024px)").matches) {
  /* the view port is at least 1216px pixels wide */
  window.addEventListener('scroll', (e) => {
    var navbar = document.querySelector('nav');
    var img_pos = document.querySelector('#img_pos');
    var logo = document.querySelector('.logo');
    var ul_nav = document.querySelector('.nav_ul');
    if(window.scrollY > 0){
      navbar.style.position = 'fixed';
      navbar.style.top = '0';
      navbar.style.left = '0';
      logo.style.margin = '0';
      logo.style.float = 'left';
      logo.style.width = '0%';
      logo.style.marginRight = '574px';
      img_pos.style.width = '100px';
      img_pos.style.padding = '15px';
      ul_nav.style.display = 'block';
      ul_nav.style.clear = 'none';
      ul_nav.style.float = 'right';
      ul_nav.style.paddingTop = '30px';
      ul_nav.style.paddingBottom = '30px';
    }
    if(window.scrollY === 0){
      navbar.style.position = '';
      logo.style.margin = '0 auto';
      logo.style.float = 'none';
      logo.style.width = '67%';
      logo.style.marginRight = '0';
      img_pos.style.width = '220px';
      ul_nav.style.display = '';
      ul_nav.style.clear = 'both';
      ul_nav.style.float = '';
      ul_nav.style.paddingTop = '';
    }
  });
} else if(window.matchMedia("(max-width: 720px)").matches) {
  /* the view port is max 720 pixels wide */
  window.addEventListener('load', (e) => {
    var hamburger_icon = document.querySelector('#hamburger_icon');
    var hamburger_div = document.querySelector('.hamburger');
    var nav_ul = document.querySelector('.nav_ul');

    hamburger_icon.addEventListener('click', (e) => {
         hamburger_div.classList.add('secret');
         nav_ul.style.transition = '0.3s all linear';
         // nav_ul.style.display = 'block';
         nav_ul.style.top = '0';
    });

    var close_btn = document.querySelector('#x_icon');
    close_btn.addEventListener('click', (e) => {
      hamburger_div.classList.remove('secret');
      nav_ul.style.transition = '0.3s all linear';
      // nav_ul.style.display = 'none';
      nav_ul.style.top = '-200vh';
    });
  });
}
function showImg(img, images){
  var i = 0;
  var  next_btn = document.querySelector('.next');
  var  prev_btn = document.querySelector('.previous');
  next_btn.addEventListener('click', () => {
    if (i < images.length -1) {
      i += 1;
      img.src = images[i];
    }
  });
  prev_btn.addEventListener('click', () => {
    if (i <= images.length && i > 0) {
      i = i - 1;
      img.src = images[i];
    }
  });
  img.src = images[i];
}
function automaticSlider(img, images){
  var i = 0;
  setInterval(() => {
    if (i < images.length -1) {
      i += 1;
      img.src = images[i];
    }
  }, 5000)
}
